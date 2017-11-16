<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 02/11/2017
 * Time: 16:00
 */

class pengesahan extends CI_Controller
{
    public function index()
    {
        $this->load->view("pengesahan/index");
    }

    public function customer()
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==2)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Menghapus Register user.
                                                    </div>";
        }


        $this->load->library("pagination");

        //$this->db->select('*');
        //$this->db->from('user a');
        //$this->db->join('pengunjung b', "b.email = a.email");

        $query = $this->db->get("pengunjung", "10", $this->uri->segment(3));
        $data['pengunjung'] = $query->result();

        $query2 = $this->db->get("pengunjung");

        $config['base_url'] = "registrasi";

        $config['total_rows'] = $query2->num_rows();
        $config['per_page'] = 10;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';

        $config['next_tag_open'] = '<li>';
        $config['prev_tag_open'] = '<li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_close'] = '</li>';
        $config['last_tag_close'] = '</li>';

        $config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";

        $this->pagination->initialize($config);


        $this->load->view("pengesahan/registrasi", $data);
    }

    public function produk()
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==1)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Menghapus Produk user.
                                                    </div>";
        }
        if($in==10)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Memverifikasi Produk.
                                                    </div>";
        }
        if($in==11)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Gagal</strong> Tidak Dapat verifikasi produk ini.
                                                    </div>";
        }

        $this->load->library("pagination");

        $query = $this->db->get("rumah", $this->uri->segment(3));
        $data['rumah'] = $query->result();

        $query2 = $this->db->get("rumah");

        $config['base_url'] = "produk";

        $config['total_rows'] = $query2->num_rows();
        $config['per_page'] = 10;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';

        $config['next_tag_open'] = '<li>';
        $config['prev_tag_open'] = '<li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_close'] = '</li>';
        $config['last_tag_close'] = '</li>';

        $config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";

        $this->pagination->initialize($config);

        $this->load->view("pengesahan/produk", $data, $message);
    }

    public function hapusRegistrasi($email)
    {
        $this->db->where('email', $email);
        $this->db->delete('pengunjung');

        $this->session->set_flashdata('in',1);
        redirect(base_url("index.php/pengesahan/customer"));
    }

    public function hapusProduk($id)
    {
        $this->db->where('idrumah', $id);
        $this->db->delete('rumah');

        $this->session->set_flashdata('in',2);
        redirect(base_url("index.php/pengesahan/produk"));
    }

    public function detailProduk($id)
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==10)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Memverifikasi Produk.
                                                    </div>";
        }
        if($in==11)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Gagal</strong> Tidak Dapat verifikasi produk ini.
                                                    </div>";
        }

        $this->load->model("Data_model");

        $data = $this->Data_model->getDetailProduk($id);

        $this->load->view("pengesahan/detailProduk", array("data" => $data, "message" => $message));
    }

    public function approveProduk($id)
    {
            $update_status = array(
                'status' => "Terverifikasi"
            );

            $where = array("idrumah" => $id);
            $update = $this->db->update('rumah', $update_status, $where);
            if ($update != null) {
                $this->session->set_flashdata('in', 10);
                redirect(base_url() . "index.php/pengesahan/produk");
            } else {
                $this->session->set_flashdata('in', 11);
                redirect(base_url() . "index.php/pengesahan/produk");
            }
    }

    public function deniedProduk($id)
    {
        $update_status = array(
            'status' => "Ditolak"
        );

        $where = array("idrumah" => $id);
        $update = $this->db->update('rumah', $update_status, $where);
        if ($update != null) {
            $this->session->set_flashdata('in', 10);
            redirect(base_url() . "index.php/pengesahan/produk");
        } else {
            $this->session->set_flashdata('in', 11);
            redirect(base_url() . "index.php/pengesahan/produk");
        }
    }

    public function approveRegister($email)
    {
        $update_status = array(
            'verifikasi' => "Terverifikasi"
        );

        $where = array("email" => $email);
        $update = $this->db->update('pengunjung', $update_status, $where);
        if ($update != null) {
            $this->session->set_flashdata('in', 12);
            redirect(base_url() . "index.php/pengesahan/customer");
        } else {
            $this->session->set_flashdata('in', 13);
            redirect(base_url() . "index.php/pengesahan/customer");
        }
    }

    public function deniedRegister($email)
    {
        $update_status = array(
            'verifikasi' => "Ditolak"
        );

        $where = array("email" => $email);
        $update = $this->db->update('pengunjung', $update_status, $where);
        if ($update != null) {
            $this->session->set_flashdata('in', 14);
            redirect(base_url() . "index.php/pengesahan/customer");
        } else {
            $this->session->set_flashdata('in', 15);
            redirect(base_url() . "index.php/pengesahan/customer");
        }
    }

    public function detailRegistrasi($email)
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getRegistrasi($email);


        $this->load->view("pengesahan/detailRegistrasi", array("data" => $data));
    }

    public function transaksi()
    {
		$this->load->model("Data_model");

        $data = $this->Data_model->getTransaksi();
		$this->load->view("pengesahan/transaksi", array("data" => $data));
    }
	
	public function detailTransaksi($id)
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==17)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Pemindahan Kredit Disetujui.
                                                    </div>";
        }
        if($in==18)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Gagal</strong> Tidak Dapat Menyetujui Pemindahan Kredit ini.
                                                    </div>";
        }

        $this->load->model("Data_model");

        $data = $this->Data_model->getDetailTransaksiPenerima($id);
		$data1 = $this->Data_model->getDetailTransaksiPengoper($id);

        $this->load->view("pengesahan/detailTransaksi", array("data" => $data, "message" => $message, "data1" => $data1));
    }
	
	public function approveTransaksi($id)
    {
            $update_status = array(
                'verifikasi' => "Disetujui"
            );

            $where = array("id_pengambilan_kredit" => $id);
            $update = $this->db->update('pengambilan_kredit', $update_status, $where);
            if ($update != null) {
                $this->session->set_flashdata('in', 19);
                redirect(base_url() . "index.php/pengesahan/transaksi");
            } else {
                $this->session->set_flashdata('in', 20);
                redirect(base_url() . "index.php/pengesahan/transaksi");
            }
    }

    public function deniedTransaksi($id)
    {
        $update_status = array(
            'verifikasi' => "Ditolak"
        );

        $where = array("id_pengambilan_kredit" => $id);
        $update = $this->db->update('pengambilan_kredit', $update_status, $where);
        if ($update != null) {
            $this->session->set_flashdata('in', 21);
            redirect(base_url() . "index.php/pengesahan/transaksi");
        } else {
            $this->session->set_flashdata('in', 22);
            redirect(base_url() . "index.php/pengesahan/transaksi");
        }
    }
}
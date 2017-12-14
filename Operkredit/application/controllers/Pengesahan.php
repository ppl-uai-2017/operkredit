<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 02/11/2017
 * Time: 16:00
 */

class pengesahan extends CI_Controller
{
    function __construct() {
        parent::__construct();

        if(isset($_SESSION['username']))
        {
            $this->load->model("Data_model");

            $data = $this->Data_model->getRole();

            foreach ($data as $data)
            {
                $getRole = $data['role'];
            }

            if($getRole != "Pengesahan")
            {
                redirect(base_url("index.php/error404"));
            }
        }
        else
        {
            redirect(base_url("index.php/error404"));
        }

    }

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
        $this->load->model("Data_model");
        $data = $this->Data_model->getProduk();

        $this->load->view("pengesahan/produk", array("data" => $data));
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
        $this->db->where('no_stnkb', $id);
        $this->db->delete('motor');

        $this->session->set_flashdata('something', '<div class="alert alert-success alert-dismissable fade in">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Sukses</strong> Menghapus Produk.
                                                    </div>');

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

            $where = array("no_stnkb" => $id);
            $update = $this->db->update('motor', $update_status, $where);
            if ($update != null) {
                $this->session->set_flashdata('in', 10);
                redirect(base_url() . "index.php/pengesahan/produk");
            }
    }

    public function deniedProduk($id)
    {
        $update_status = array(
            'status' => "Ditolak"
        );

        $where = array("no_stnkb" => $id);
        $update = $this->db->update('motor', $update_status, $where);
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

        $message = null;
        $in = $this->session->flashdata('in');
        if($in==19)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Transaksi berhasil di verifikasi untuk dilanjutkan ke penjadwalan
                                                    </div>";
        }
        elseif($in==20)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Transaksi berhasil di Tolak.
                                                    </div>";
        }
		elseif($in==27)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Transaksi Dinyatakan Selesai.
                                                    </div>";
        }
        elseif($in==22)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Berhasil melakukan penjadwalan
                                                    </div>";
        }
        elseif($in==23)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Berhasil Merubah penjadwalan
                                                    </div>";
        }


        $data = $this->Data_model->getTransaksi();
        $this->load->view("pengesahan/transaksi", array("data" => $data, "message" => $message));
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

        $data = $this->Data_model->getDetailTransaksi($id);
        $data2 = $this->Data_model->getDetailPengambil($id);

        $this->load->view("pengesahan/detailTransaksi", array("data" => $data, "message" => $message, "data2" => $data2));
    }

    public function approveTransaksi($id_transaksi, $no_stnkb)
    {
        $update_status1 = array(
            'verifikasi' => "Diproses"
        );
        $update_status2 = array(
            'status' => "Habis",
            'stok' => 0
        );

        $where1 = array("id_pengambilan_kredit" => $id_transaksi);
        $where2 = array("no_stnkb" => $no_stnkb);

        $update1 = $this->db->update('pengambilan_kredit', $update_status1, $where1);
        $update2 = $this->db->update('motor', $update_status2, $where2);

        if ($update1 != null && $update2 != null) {
            $this->session->set_flashdata('in', 19);
            redirect(base_url() . "index.php/pengesahan/transaksi");
        }
    }

    public function deniedTransaksi($id_transaksi, $no_stnkb)
    {
        $update_status = array(
            'verifikasi' => "Ditolak"
        );
        $update_status2 = array(
            'status' => "Terverifikasi",
            'stok' => 1
        );

        $where = array("id_pengambilan_kredit" => $id_transaksi);
        $where2 = array("no_stnkb" => $no_stnkb);

        $update = $this->db->update('pengambilan_kredit', $update_status, $where);
        $update2 = $this->db->update('motor', $update_status2, $where2);

        if ($update != null && $update2 != null) {
            $this->session->set_flashdata('in', 20);
            redirect(base_url() . "index.php/pengesahan/transaksi");
        }
    }
	
	public function successTransaksi($id_transaksi, $no_stnkb)
    {
        $update_status = array(
            'verifikasi' => "Selesai"
        );
        $update_status2 = array(
            'status' => "Terverifikasi",
            'stok' => 1
        );

        $where = array("id_pengambilan_kredit" => $id_transaksi);
        $where2 = array("no_stnkb" => $no_stnkb);

        $update = $this->db->update('pengambilan_kredit', $update_status, $where);
        $update2 = $this->db->update('motor', $update_status2, $where2);

        if ($update != null && $update2 != null) {
            $this->session->set_flashdata('in', 27);
            redirect(base_url() . "index.php/pengesahan/transaksi");
        }
    }

    public function jadwal($id_transaksi)
    {
        $this->load->model("Data_model");
        $load = $this->Data_model->getJadwal($id_transaksi);

        if(isset($_POST['submit']))
        {
            $status = $this->input->post('status');
            $pertemuan = $this->input->post('pertemuan');

            $data = array(
                'id_pengambilan_kredit' => $id_transaksi,
                'pertemuan' => $pertemuan,
                'status_jadwal' => $status
            );

            $insert = $this->db->insert('jadwal', $data);

            if ($insert != null) {
                $this->session->set_flashdata('in', 22);
                redirect(base_url() . "index.php/pengesahan/transaksi");
            }
        }

        elseif(isset($_POST['edit']))
        {
            $status = $this->input->post('status');
            $pertemuan = $this->input->post('pertemuan');
            $id_jadwal = $this->input->post('id_jadwal');

            $update_data = array(
                'id_pengambilan_kredit' => $id_transaksi,
                'pertemuan' => $pertemuan,
                'status_jadwal' => $status
            );

            $where = array("id_jadwal" => $id_jadwal);

            $update = $this->db->update('jadwal', $update_data, $where);


            if ($update) {
                $this->session->set_flashdata('in', 23);
                redirect(base_url() . "index.php/pengesahan/transaksi");
            }
        }
        $this->load->view("pengesahan/jadwal", array("id" => $id_transaksi, "load" => $load));

    }

    public function error404()
    {
        $this->load->view("errors/cli/error_404");
    }
}
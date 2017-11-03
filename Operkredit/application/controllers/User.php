<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 21:09
 */

class User extends CI_Controller
{
    public function index()
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getProfile();

        $this->load->view("user/profile");
    }

    public function beri_kredit()
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==1)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Mengajukan Oper Kredit Rumah, Silahkan pantau status verifikasi pada halaman history.
                                                    </div>";
        }
        if($in==2)
        {
            $message = "<div class=\"alert alert-warning alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Gagal</strong> Mengajukan Oper Kredit Rumah, Silahkan periksa kembali data anda.
                                                    </div>";
        }


        $this->load->view("user/beri_kredit", array("message" => $message));
    }

    public function rumah()
    {
        $file_name=null;

        $config['upload_path'] = './rumah/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);

        if(isset($_POST['submit']))
        {
            $judul = $this->input->post('judul');
            $luas_tanah = $this->input->post('luas_tanah');
            $lantai = $this->input->post('lantai');
            $kamar_mandi = $this->input->post('kamar_mandi');
            $luas_bangunan = $this->input->post('luas_bangunan');
            $kamar = $this->input->post('kamar');
            $sertifikasi = $this->input->post('sertifikasi');
            $kota = $this->input->post('kota');
            $dokumen = $this->input->post('dokumen');
            $alamat = $this->input->post('alamat');
            $deskripsi = $this->input->post('deskripsi');
            $harga = $this->input->post('harga');
            $total_cicilan = $this->input->post('total_cicilan');
            $cicilan_ke = $this->input->post('cicilan_ke');
            $cicilan_perbulan = $this->input->post('cicilan_perbulan');

            $this->upload->do_upload('foto1');
            $file1 = $this->upload->data();
            $file1_name = $file1['file_name'];

            $this->upload->do_upload('foto2');
            $file2 = $this->upload->data();
            $file2_name = $file2['file_name'];

            $this->upload->do_upload('foto3');
            $file3 = $this->upload->data();
            $file3_name = $file3['file_name'];

            $this->upload->do_upload('foto4');
            $file4 = $this->upload->data();
            $file4_name = $file4['file_name'];

            $tambah_rumah = array(
                'judul' => $judul,
                'luas_tanah' => $luas_tanah,
                'lantai' => $lantai,
                'kamar_mandi' => $kamar_mandi,
                'luas_bangunan' => $luas_bangunan,
                'kamar' => $kamar,
                'sertifikasi' => $sertifikasi,
                'kota' => $kota,
                'dokumen' => $dokumen,
                'alamat' => $alamat,
                'deskripsi' => $deskripsi,
                'foto1' => $file1_name,
                'foto2' => $file2_name,
                'foto3' => $file3_name,
                'foto4' => $file4_name,
                'harga' => $harga,
                'total_cicilan' => $total_cicilan,
                'cicilan_ke' => $cicilan_ke,
                'cicilan_perbulan' => $cicilan_perbulan,
                'pengoper_kredit' => $_SESSION['username'],
                'status' => "Menunggu",
                'stok' => 1
            );

            $insert = $this->db->insert('rumah', $tambah_rumah);
            if ($insert != null) {
                $this->session->set_flashdata('in',1);
                redirect(base_url() . "index.php/user/beri_kredit");
            }
            else
            {
                $this->session->set_flashdata('in',2);
                redirect(base_url() . "index.php/user/beri_kredit");
            }
    }

    $this->load->view("user/beri_kredit");
    }

    public function produk()
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==3)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Menghapus produk.
                                                    </div>";
        }
        if($in==1)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Perubahan data berhasil.
                                                    </div>";
        }
        if($in==2)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Gagal</strong> Perubahan tidak data berhasil.
                                                    </div>";
        }

        $this->load->model("Data_model");

        $data = $this->Data_model->getListProduk();

        $this->load->view("user/produk", array("data" => $data, "message" => $message));
    }

    public function detail_Produk($id)
    {
        $this->load->model("Data_model");

        $data = $this->Data_model->getDetail($id);

        $this->load->view("user/detail_produk", array("data" => $data));
    }

    public function edit($id)
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getDetail($id);

        $file_name = null;

        $config['upload_path'] = './rumah/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '25000';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);

        if (isset($_POST['submit'])) {
            $file_name = null;

            $judul = $this->input->post('judul');
            $luas_tanah = $this->input->post('luas_tanah');
            $lantai = $this->input->post('lantai');
            $kamar_mandi = $this->input->post('kamar_mandi');
            $luas_bangunan = $this->input->post('luas_bangunan');
            $kamar = $this->input->post('kamar');
            $sertifikasi = $this->input->post('sertifikasi');
            $kota = $this->input->post('kota');
            $dokumen = $this->input->post('dokumen');
            $alamat = $this->input->post('alamat');
            $deskripsi = $this->input->post('deskripsi');
            $harga = $this->input->post('harga');
            $foto1 = $this->input->post('foto1');
            $foto2 = $this->input->post('foto2');
            $foto3 = $this->input->post('foto3');
            $foto4 = $this->input->post('foto4');
            $total_cicilan = $this->input->post('total_cicilan');
            $cicilan_ke = $this->input->post('cicilan_ke');
            $cicilan_perbulan = $this->input->post('cicilan_perbulan');

            $this->upload->do_upload('foto1');
            $file1 = $this->upload->data();
            $file1_name = $file1['file_name'];

            $this->upload->do_upload('foto2');
            $file2 = $this->upload->data();
            $file2_name = $file2['file_name'];

            $this->upload->do_upload('foto3');
            $file3 = $this->upload->data();
            $file3_name = $file3['file_name'];

            $this->upload->do_upload('foto4');
            $file4 = $this->upload->data();
            $file4_name = $file4['file_name'];

            $tambah_rumah = array(
                'judul' => $judul,
                'luas_tanah' => $luas_tanah,
                'lantai' => $lantai,
                'kamar_mandi' => $kamar_mandi,
                'luas_bangunan' => $luas_bangunan,
                'kamar' => $kamar,
                'sertifikasi' => $sertifikasi,
                'kota' => $kota,
                'dokumen' => $dokumen,
                'alamat' => $alamat,
                'deskripsi' => $deskripsi,
                'foto1' => $file1_name,
                'foto2' => $file2_name,
                'foto3' => $file3_name,
                'foto4' => $file4_name,
                'harga' => $harga,
                'total_cicilan' => $total_cicilan,
                'cicilan_ke' => $cicilan_ke,
                'cicilan_perbulan' => $cicilan_perbulan,
                'pengoper_kredit' => $_SESSION['username'],
                'status' => "Menunggu",
                'stok' => 1
            );

            $where = array("idrumah" => $id);
            $update = $this->db->update('rumah', $tambah_rumah, $where);
            if ($update != null) {
                $this->session->set_flashdata('in', 1);
                redirect(base_url() . "index.php/user/produk");
            } else {
                $this->session->set_flashdata('in', 2);
                redirect(base_url() . "index.php/user/produk");
            }
        }

        $this->load->view("user/edit", array("data" => $data));
    }

    public function hapus($id)
    {
        $this->db->where('idrumah', $id);
        $this->db->delete('rumah');

        $this->session->set_flashdata('in',3);
        redirect(base_url("index.php/user/produk"));
    }
}
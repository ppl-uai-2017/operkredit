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
                'status' => "Menunggu"
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
}
<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 18:30
 */

class Register extends CI_Controller
{
    public function index()
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==9)
        {
            $message = "<div class=\"alert alert-warning alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Gagal buat akun</strong> Password dan konfirmasi tidak cocok.
                                                    </div>";
        }
        if($in==7)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Registrasi Berhasil</strong> Silahkan login dan pantau status verifikasi akun
                                                    </div>";
        }

        if($in==8)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Registrasi Gagal</strong> Silahkan hubungi customer service operkredit
                                                    </div>";
        }
        $this->load->view("register/register", array("message" => $message));
    }

    public function akun_baru()
    {
        $file_name = null;

        $config['upload_path'] = './akun/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '5000';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);

        if (isset($_POST['submit'])) {
            $username = $this->input->post('username');
            $nama_lengkap = $this->input->post('nama_lengkap');
            $tempat_lahir = $this->input->post('tempat_lahir');
            $email = $this->input->post('email');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $no_hp = $this->input->post('no_hp');
            $status_pernikahan = $this->input->post('status_pernikahan');
            $alamat = $this->input->post('alamat');
            $kota = $this->input->post('kota');
            $kode_pos = $this->input->post('kode_pos');
            $provinsi = $this->input->post('provinsi');
            $no_ktp = $this->input->post('no_ktp');
            $pekerjaan = $this->input->post('pekerjaan');
            $gaji = $this->input->post('gaji');
            $password = $this->input->post('password');
            $konfirmasi = $this->input->post('konfirmasi');

            $this->upload->do_upload('foto');
            $foto = $this->upload->data();
            $foto_name = $foto['file_name'];

            $this->upload->do_upload('file_ktp');
            $ktp = $this->upload->data();
            $ktp_name = $ktp['file_name'];

            $tambah_user = array(
                'email' => $email,
                'nama_lengkap' => $nama_lengkap,
                'tempat_lahir' => $tempat_lahir,
                'tanggal_lahir' => $tanggal_lahir,
                'jenis_kelamin' => $jenis_kelamin,
                'no_hp' => $no_hp,
                'status_pernikahan' => $status_pernikahan,
                'alamat' => $alamat,
                'kota' => $kota,
                'kode_pos' => $kode_pos,
                'provinsi' => $provinsi,
                'no_ktp' => $no_ktp,
                'file_ktp' => $ktp_name,
                'foto' => $foto_name,
                'pekerjaan' => $pekerjaan,
                'gaji' => $gaji,
                'verifikasi' => "Menunggu",
            );

            $tambah_login = array(
                'username' => $username,
                'password' => hash("SHA256", $password),
                'role' => "Pengunjung",
                'email' => $email
            );


            if($password == $konfirmasi)
            {
                $insert_user = $this->db->insert('pengunjung', $tambah_user);
                $insert_login = $this->db->insert('user', $tambah_login);

                if ($insert_user != null && $insert_login != null) {
                    $this->session->set_flashdata('in', 7);
                    redirect(base_url() . "index.php/register");
                } else {
                    $this->session->set_flashdata('in', 8);
                    redirect(base_url() . "index.php/register");
                }
            }
            else{
                $this->session->set_flashdata('in', 9);
                redirect(base_url() . "index.php/register");
            }

            $this->load->view("register/register");
        }
    }
}

?>
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
        $this->load->view("register/register");
    }
	public function create_account()
    {
<<<<<<< HEAD
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
                    redirect(base_url() . "index.php/login");
                } else {
                    $this->session->set_flashdata('in', 8);
                    redirect(base_url() . "index.php/login");
                }
            }
            else{
                $this->session->set_flashdata('in', 9);
                redirect(base_url() . "index.php/register");
            }

            $this->load->view("register/register");
        }
=======
    	$this->load->model('Data_pengunjung');
    	$this->load->library('session');
	$this->load->helper('url');

	$password = $this->input->post('password');
	$this->load->library('form_validation');
	$this->form_validation->set_error_delimiters('<div class="col-sm-9" style="color:red; margin-bottom: 5px">', '</div>');
	$this->form_validation->set_rules('nama_depan', '<b>Nama Depan</b>', 'required');
        $this->form_validation->set_rules('nama_belakang', '<b>Nama Belakang</b>', 'required');
        $this->form_validation->set_rules('tempat_lahir', '<b>Tempat Lahir</b>', 'required');
        $this->form_validation->set_rules('tanggal_lahir', '<b>Tanggal Lahir</b>', 'required');
        $this->form_validation->set_rules('jenis_kelamin', '<b>Jenis Kelamin</b>', 'required');
        $this->form_validation->set_rules('email', '<b>Email</b>', 'required|valid_email|is_unique[pengunjung.email]');
        $this->form_validation->set_rules('no_hp', '<b>No. HP</b>', 'required');
        $this->form_validation->set_rules('status_pernikahan', '<b>Status Pernikahan</b>', 'required');
        $this->form_validation->set_rules('alamat', '<b>Alamat</b>', 'required');
        $this->form_validation->set_rules('kota', '<b>Kota</b>', 'required');
        $this->form_validation->set_rules('kode_pos', '<b>Kode Pos</b>', 'required');
        $this->form_validation->set_rules('provinsi', '<b>Provinsi</b>', 'required');
        $this->form_validation->set_rules('username', '<b>Username</b>', 'required|min_length[5]|max_length[20]|is_unique[user.username]');
        $this->form_validation->set_rules('password', '<b>Password</b>', 'required|min_length[6]|max_length[12]|matches[ulangipassword]');
        $this->form_validation->set_rules('ulangipassword', '<b>Ulangi Password</b>', 'required|min_length[6]|max_length[12]');

		if ($this->form_validation->run() == FALSE)
        {
        	//$this->session->set_flashdata('info','There was an error , please check stuffing error occurred , please check your entries .');
			$this->load->view("register/register");
		}
		else{
				$id_pengunjung = $this->Data_pengunjung->getId_pengunjung();
				$this->session->set_userdata('id', $id_pengunjung['id']);
				$id_user = $this->Data_pengunjung->getId_user();
				$this->session->set_userdata('iduser', $id_user['iduser']);
				$tambah_pengunjung = array(
					'id' => $this->session->set_userdata('id'),
					'nama_depan' =>set_value('nama_depan'),
					'nama_belakang' => set_value('nama_belakang'),
					'tempat_lahir' => set_value('tempat_lahir'),
					'tanggal_lahir' => set_value('tanggal_lahir'),
					'jenis_kelamin' => set_value('jenis_kelamin'),
					'email' => set_value('email'),
					'no_hp' => set_value('no_hp'),
					'status_pernikahan' => set_value('status_pernikahan'),
					'alamat' => set_value('alamat'),
					'kota' => set_value('kota'),
					'kode_pos' => set_value('kode_pos'),
					'provinsi' => set_value('provinsi')
				);
				
				$tambah_user = array(
					'iduser' => $this->session->set_userdata('iduser'),
					'username' => set_value('username'),
					'password' => md5($password),
					'role' => 'Pengunjung'
				);
				$this->Data_pengunjung->getinsert_Pengunjung($tambah_pengunjung);
				$this->Data_pengunjung->getinsert_user($tambah_user);
				//$this->session->set_flashdata('info', 'Register is succsessfull!');
				redirect('Register');
			
		}
>>>>>>> 772fa27fbe938b9bb0ade63c99a289c24783863a
    }
}

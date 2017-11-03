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
        $this->load->view("register/register");
    }
	public function create_account()
    {
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
    }
}

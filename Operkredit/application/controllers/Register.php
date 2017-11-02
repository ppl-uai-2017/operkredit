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
			////variabel yang menyimpan data yg di-submit
			if(isset($_POST['submit']))
			{
				$nama_depan = $this->input->post('nama_depan');
				$nama_belakang = $this->input->post('nama_belakang');
				$tempat_lahir = $this->input->post('tempat_lahir');
				$tanggal_lahir = $this->input->post('tanggal_lahir');
				$jenis_kelamin = $this->input->post('jenis_kelamin');
				$email = $this->input->post('email');
				$no_hp = $this->input->post('no_hp');
				$status_pernikahan = $this->input->post('status_pernikahan');
				$alamat = $this->input->post('alamat');
				$kota = $this->input->post('kota');
				$kode_pos = $this->input->post('kode_pos');
				$provinsi = $this->input->post('provinsi');
				$password = $this->input->post('password');
				$username = $this->input->post('username');
				
				$tambah_pengunjung = array(
					'id' => '',
					'nama_depan' => $nama_depan,
					'nama_belakang' => $nama_belakang,
					'tempat_lahir' => $tempat_lahir,
					'tanggal_lahir' => $tanggal_lahir,
					'jenis_kelamin' => $jenis_kelamin,
					'email' => $email,
					'no_hp' => $no_hp,
					'status_pernikahan' => $status_pernikahan,
					'alamat' => $alamat,
					'kota' => $kota,
					'kode_pos' => $kode_pos,
					'provinsi' => $provinsi
				);
				
				$tambah_user = array(
					'iduser' => '',
					'username' => $username,
					'password' => $password,
					'role' => ''
				);
				
				$insert1 = $this->operkredit->insert('pengunjung', $tambah_pengunjung);
				$insert2 = $this->operkredit->insert('user', $tambah_user);
				if ($insert1 != null)
				{
					$this->session->set_flashdata('in',1);
					redirect(base_url()."index.php/register/create_account");
				}
				
				if ($insert2 != null)
				{
					$this->session->set_flashdata('in',1);
					redirect(base_url()."index.php/register/create_account");
				}
			}
    }
}
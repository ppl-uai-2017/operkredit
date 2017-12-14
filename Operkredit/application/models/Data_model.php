<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 02/11/2017
 * Time: 15:42
 */

class Data_model extends CI_Model
{
    function getRole()
    {
        $this->db->select('role');
        $this->db->from('user');
        $this->db->where('username', $_SESSION['username']);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getPembayaran()
    {
        $this->db->select('*');
        $this->db->from('metode_pembayaran');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getProfile($username)
    {
        $this->db->select('*');
        $this->db->from('user a');
        $this->db->join('pengunjung b', "b.email = a.email");
        $this->db->where('username', $username);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
	
	function getLocation($username)
    {
        $this->db->select('b.kota as kota_motor, b.provinsi as provinsi_motor');
        $this->db->from('user a');
        $this->db->join('pengunjung b', "b.email = a.email");
        $this->db->where('username', $username);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getRegistrasi($email)
    {
        $this->db->select('*');
        $this->db->from('user a');
        $this->db->join('pengunjung b', "b.email = a.email");
        $this->db->where('b.email', $email);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getProduk()
    {
        $this->db->select('*');
        $this->db->from('motor a');
		$this->db->join('user b', "b.username = a.pengoper_kredit");
        $this->db->join('pengunjung c', "b.email = c.email");
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getDetail($id)
    {
        $this->db->select('*, c.kota as kota_motor');
        $this->db->from('motor a');
        $this->db->join('user b', "b.username = a.pengoper_kredit");
        $this->db->join('pengunjung c', "b.email = c.email");
        $this->db->where('no_stnkb', $id);

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getListProduk()
    {
        $this->db->select('*');
        $this->db->from('motor');
        $this->db->where('pengoper_kredit', $_SESSION['username']);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getJadwal($id)
    {
        $this->db->select('*');
        $this->db->from('jadwal a');
        $this->db->join('pengambilan_kredit b', "b.id_pengambilan_kredit = a.id_pengambilan_kredit");
        $this->db->where('b.id_pengambilan_kredit', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getDetailProduk($id)
    {
        $this->db->select('*, c.kota as kota_motor, c.provinsi as provinsi_motor');
        $this->db->from('motor a');
        $this->db->join('user b', "a.pengoper_kredit = b.username");
        $this->db->join('pengunjung c', "b.email = c.email");
        $this->db->where('no_stnkb', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getTransaksi()
    {
        $this->db->select('*, a.verifikasi as transaksi_status');

        $this->db->from('pengambilan_kredit a');
        $this->db->join('user b', "a.id_pengambil_kredit = b.username");
        $this->db->join('pengunjung c', "c.email = b.email");

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getDetailTransaksi($id)
    {
        $this->db->select('*, a.verifikasi as status_verifikasi, d.kota as kota_motor, d.provinsi as provinsi_motor');
        $this->db->from('pengambilan_kredit a');
        $this->db->join('motor b', "a.no_stnkb = b.no_stnkb");
        $this->db->join('user c', "b.pengoper_kredit = c.username");
        $this->db->join('pengunjung d', "c.email = d.email");
        $this->db->join('metode_pembayaran e', "a.id_metode_pembayaran = e.id_metode_pembayaran");
        $this->db->where('id_pengambilan_kredit', $id);

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getDetailPengambil($id)
    {
        $this->db->select('*');
        $this->db->from('pengambilan_kredit a');
        $this->db->join('user b', "a.id_pengambil_kredit = b.username");
        $this->db->join('pengunjung c', "b.email = c.email");
        $this->db->where('id_pengambilan_kredit', $id);

        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getHistory()
    {
        $this->db->select('*, a.verifikasi as status_transaksi');
        $this->db->from('pengambilan_kredit a');
        $this->db->join('motor b', "a.no_stnkb = b.no_stnkb");
        $this->db->join('user d', "b.pengoper_kredit = d.username");
        $this->db->join('pengunjung e', "e.email = d.email");
        $this->db->where('a.id_pengambil_kredit', $_SESSION['username']);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function getDetailHistory($id)
    {
        $this->db->select('*, e.kota as kota_motor');
        $this->db->from('pengambilan_kredit a');
        $this->db->join('motor b', "a.no_stnkb = b.no_stnkb");
        $this->db->join('user d', "b.pengoper_kredit = d.username");
        $this->db->join('pengunjung e', "e.email = d.email");
        $this->db->join('metode_pembayaran f', "a.id_metode_pembayaran = f.id_metode_pembayaran");
        $this->db->where('a.id_pengambilan_kredit', $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
	
	function getKota(){
		$this->db->select('*');
        $this->db->from('regencies');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
	}
	
	function getProvinsi(){
		$this->db->select('*');
        $this->db->from('provinces');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
	}

}
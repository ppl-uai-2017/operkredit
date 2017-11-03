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
        if ($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    function getProfile()
    {
        $this->db->select('*');
        $this->db->from('user a');
        $this->db->join('pengunjung b', "b.email = a.email");
        $this->db->where('username', $_SESSION['username']);
        $query = $this->db->get();
        if ($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    function getProduk()
    {
        $this->db->select('*');
        $this->db->from('rumah');
        $this->db->where('status', "Terverifikasi");
        $query = $this->db->get();
        if ($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    function getDetail($id)
    {
        $this->db->select('*');
        $this->db->from('rumah');
        $this->db->where('idrumah', $id);

        $query = $this->db->get();
        if ($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }

    function getListProduk()
    {
        $this->db->select('*');
        $this->db->from('rumah');
        $this->db->where('pengoper_kredit', $_SESSION['username']);
        $query = $this->db->get();
        if ($query->num_rows() != 0)
        {
            return $query->result_array();
        }
        else
        {
            return false;
        }
    }
}
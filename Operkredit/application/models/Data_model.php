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

    function getProduk_unverify()
    {
        $this->db->select('*');
        $this->db->from('rumah');
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
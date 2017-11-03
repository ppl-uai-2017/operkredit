<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 16:43
 */

class Login_model extends CI_Model
{
    function integrity_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $query  = $this->db->get('user');

        if($query->num_rows() > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
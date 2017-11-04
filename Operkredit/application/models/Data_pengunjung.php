<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 02/11/2017
 * Time: 15:42
 */

class Data_pengunjung extends CI_Model
{
    function getId_pengunjung(){
        $data = array();
        $this->db->select_max("id");
        $hasil = $this->db->get('pengunjung');
        if($hasil->num_rows() > 0){
            return $hasil->row_array();
        }       
    }
    function getId_user(){
        $data = array();
        $this->db->select_max("iduser");
        $hasil = $this->db->get('user');
        if($hasil->num_rows() > 0){
            return $hasil->row_array();
        }       
    }
    public function getinsert_Pengunjung($tambah_pengunjung){
        $this->db->insert('pengunjung',$tambah_pengunjung);
    }
    public function getinsert_user($tambah_user){
        $this->db->insert('user',$tambah_user);
    }
}
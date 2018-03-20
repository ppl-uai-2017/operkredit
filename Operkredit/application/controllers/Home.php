<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 16:57
 */

class Home extends CI_Controller
{
   public function index()
    {
        echo $this->session->flashdata('something');

        $this->load->view("pengunjung/index-2");
    }
}
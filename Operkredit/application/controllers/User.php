<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 21:09
 */

class User extends CI_Controller
{
    public function index()
    {
        $this->load->view("user/profile");
    }

    public function beri_kredit()
    {
        $this->load->view("user/beri_kredit");
    }
}
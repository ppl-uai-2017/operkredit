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
}
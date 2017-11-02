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
        $message = null;
        $in = $this->session->flashdata('in');

        if($in==1)
        {
            $message = "<div class=\"alert alert-info alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Login Berhasil</strong> Selamat Datang !
                                                    </div>";
        }
        if($in==2)
        {
            $message = "<div class=\"alert alert-info alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Logout Berhasil</strong>
                                                    </div>";
        }

        $this->load->view("pengunjung/index", array("message" => $message));
    }
}
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

        $this->load->library("pagination");

        $query = $this->db->get_where("rumah", array("status" => "Terverifikasi", "stok" => 1), "12", $this->uri->segment(1));
        $data['rumah'] = $query->result();

        $query2 = $this->db->get("rumah");

        $config['base_url'] = "home";

        $config['total_rows'] = $query2->num_rows();
        $config['per_page'] = 12;

        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['first_tag_open'] = '<li>';
        $config['last_tag_open'] = '<li>';

        $config['next_tag_open'] = '<li>';
        $config['prev_tag_open'] = '<li>';

        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $config['first_tag_close'] = '</li>';
        $config['last_tag_close'] = '</li>';

        $config['next_tag_close'] = '</li>';
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = "<li class=\"active\"><span><b>";
        $config['cur_tag_close'] = "</b></span></li>";

        $this->pagination->initialize($config);



        $this->load->view("pengunjung/index", $data, array("message" => $message));
    }
}
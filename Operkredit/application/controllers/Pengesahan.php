<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 02/11/2017
 * Time: 16:00
 */

class pengesahan extends CI_Controller
{
    public function index()
    {
        $this->load->view("pengesahan/index");
    }

    public function customer()
    {
        $this->load->view("pengesahan/registrasi");
    }

    public function produk()
    {
        $this->load->library("pagination");

        $query = $this->db->get("rumah", "10", $this->uri->segment(1));
        $data['rumah'] = $query->result();

        $query2 = $this->db->get("rumah");

        $config['base_url'] = "produk";

        $config['total_rows'] = $query2->num_rows();
        $config['per_page'] = 10;

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
        //$this->load->model("Data_model");
       // $data = $this->Data_model->getProduk();

        $this->load->view("pengesahan/produk", $data);
    }
}
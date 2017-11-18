<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 03/11/2017
 * Time: 7:33
 */

class Category extends CI_Controller
{
    public function rumah()
    {
        $this->load->library("pagination");

        $query = $this->db->get_where("rumah", array("status" => "Terverifikasi", "stok" => 1), "12", $this->uri->segment(1));
        $data['rumah'] = $query->result();

        $query2 = $this->db->get("rumah");

        $config['base_url'] = "rumah";

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

        $this->load->view("kategori/rumah", $data);
    }

    public function detail($id)
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getDetail($id);
        $profile = $this->Data_model->getProfile();
        $this->load->view("kategori/detail", array("data" => $data, "profile" => $profile));
    }

    public function review($id)
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getDetail($id);

        $this->load->view("kategori/review", array("data" => $data));
    }
}
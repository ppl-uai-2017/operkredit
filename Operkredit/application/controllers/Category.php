<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 03/11/2017
 * Time: 7:33
 */

class Category extends CI_Controller
{
    public function matic()
    {
        $this->load->library("pagination");

        if(!isset($_POST['submit']) && !isset($_POST['kota'])) {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "type" => "matic"), "12", $this->uri->segment(1));
        }

        if(isset($_POST['kota']) && $_POST['kota'] != null) {
            $kota = $this->input->post('kota');
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "type" => "matic", "kota" => $kota), "12", $this->uri->segment(1));
        }

        if(isset($_POST['submit']) && $_POST['kota'] != null) {
            $harga = $this->input->post('harga');
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "type" => "matic",  "kota" => $kota), "12", $this->uri->segment(1));
        }

        $data['motor'] = $query->result();

        $query2 = $this->db->get("motor");

        $config['base_url'] = "motor";

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

        $this->load->view("kategori/matic", $data);
    }

    public function sport()
    {
        $this->load->library("pagination");

        $kota = $this->input->post('kota');

        if(!isset($_POST['submit']) && !isset($_POST['kota'])) {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "type" => "sport"), "12", $this->uri->segment(1));
        }

        if(isset($_POST['kota']) && $_POST['kota'] != null) {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "type" => "sport", "kota" => $kota), "12", $this->uri->segment(1));
        }

        if(isset($_POST['submit']) && $_POST['kota'] != null) {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "type" => "sport",  "kota" => $kota), "12", $this->uri->segment(1));
        }

        if(isset($_POST['submit']) && $_POST['kota'] == "") {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "type" => "sport"), "12", $this->uri->segment(1));
        }

        $data['motor'] = $query->result();

        $query2 = $this->db->get("motor");

        $config['base_url'] = "motor";

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

        $this->load->view("kategori/sport", $data);
    }

    public function all()
    {
        $this->load->library("pagination");

        $kota = $this->input->post('kota');

        if(!isset($_POST['submit']) && !isset($_POST['kota'])) {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1), "12", $this->uri->segment(1));
        }

        if(isset($_POST['kota']) && $_POST['kota'] != null) {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1, "kota" => $kota), "12", $this->uri->segment(1));
        }

        if(isset($_POST['submit']) && $_POST['kota'] != null) {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1,  "kota" => $kota), "12", $this->uri->segment(1));
        }

        if(isset($_POST['submit']) && $_POST['kota'] == "") {
            $query = $this->db->get_where("motor", array("status" => "Terverifikasi", "stok" => 1), "12", $this->uri->segment(1));
        }

        $data['motor'] = $query->result();

        $query2 = $this->db->get("motor");

        $config['base_url'] = "motor";

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

        $this->load->view("kategori/all", $data);
    }

    public function detail($id)
    {
        $username = null;

        if(isset($_SESSION['username']))
        {
            $username = $_SESSION['username'];
        }

        $this->load->model("Data_model");
        $data = $this->Data_model->getDetail($id);
        $profile = $this->Data_model->getProfile($username);
        $this->load->view("kategori/detail", array("data" => $data, "profile" => $profile));
    }

    public function review($id)
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getDetail($id);

        $this->load->view("kategori/review", array("data" => $data));
    }
}
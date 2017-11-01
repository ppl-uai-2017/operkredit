<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 16:25
 */

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view("login/login");
    }

    public function validasi()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $username = $this->input->post('username');
            $password = hash('SHA256', $this->input->post('password'));
            $this->load->model('login_model');

            if($this->login_model->integrity_login($username, $password))
            {
                $session_data = array('username' => $username);
                $this->session->set_userdata($session_data);

                $this->session->set_flashdata('in',1);
                redirect("home");
            }
            else
            {
                $result = '<div class="alert alert-danger" role="alert">Username atau Password Salah</div>';
                $this->load->view("login/login", array('result' => $result));
            }
        }
        else
        {
            $result = '<div class="alert alert-warning" role="alert">Form Tidak Boleh Kosong</div>';
            $this->load->view("login/login", array('result' => $result));
        }
    }

    function out()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('in',2);
        redirect(base_url() . 'index.php/home');
    }
}
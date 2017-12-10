<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 16:25
 */

class Login extends CI_Controller
{
    /*
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
        if($in==3)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Login Gagal</strong> Username atau Password salah
                                                    </div>";
        }
        if($in==4)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Login Gagal</strong> Form tidak boleh ada yang kosong
                                                    </div>";
        }


        $this->load->view("login/login", array("message" => $message));
    }
    */

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
                $this->load->model("Data_model");
                $role = $this->Data_model->getRole();

                foreach ($role as $role)
                {
                    $role_user = $role['role'];
                }

                if($role_user == "Pengunjung")
                {
                    $this->session->set_flashdata('something', '<script language="javascript"> alert("Login Berhasil")  </script>');
                    redirect("");
                }
                if($role_user == "Pengesahan")
                {
                    $this->session->set_flashdata('something', '<div class="collapsible-header purple white-text"><i class="mdi-device-access-alarms"></i> Login Berhasil, Selamat Datang</div>');
                    redirect("pengesahan");
                }
            }
            else
            {
                $this->session->set_flashdata('something', '<script language="javascript"> alert("Username atau Password Salah")  </script>');

                redirect(base_url(""));
            }
        }
        else
        {
            $this->session->set_flashdata('something', '<script language="javascript"> alert("Form Tidak Boleh ada yang kosong")  </script>');
            redirect(base_url(""));
        }
    }

    function out()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('something', '<script language="javascript"> alert("Logout Berhasil")  </script>');

        redirect(base_url() . '');
    }
}

?>
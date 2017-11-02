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
        $this->load->model("Data_model");
        $unverify = $this->Data_model->getProduk_unverify();

        $this->load->view("pengesahan/produk", array("unverify" => $unverify));
    }
}
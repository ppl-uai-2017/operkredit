<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 03/11/2017
 * Time: 7:33
 */

class Transaksi extends CI_Controller
{
   public function review($id)
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getDetail($id);
        $pembayaran = $this->Data_model->getPembayaran();

        $this->load->view("kategori/review", array("data" => $data, "pembayaran" => $pembayaran));
    }

    public function checkout()
    {
        $idrumah = $this->input->post('idrumah');
        $penerima = $this->input->post('penerima');
        $metode = $this->input->post('metode');
        $cicilan = $this->input->post('cicilan');
        $total = $this->input->post('total');

        $tambah = array(
            'id_pengambil_kredit' => $penerima,
            'id_metode_pembayaran' => $metode,
            'no_pengesahan' => "1",
            'total_bayar' => $total,
            'cicilan' => $cicilan,
            'id_rumah' => $idrumah,
            'status' => "Menunggu"
        );

        $data = array(
            'status' => "Dalam Transaksi"
        );

        $where = array("idrumah" => $idrumah);

        $insert = $this->db->insert('pengambilan_kredit', $tambah);
        $update = $this->db->update('rumah', $data, $where);

        if ($insert != null && $update != null) {
            echo "<script type=\"text/javascript\">alert('Sukses, data anda kan kami review. Silahkan pantau pada halaman riwayat transaksi anda');</script>";
            redirect(base_url() . "index.php/transaksi/riwayat");
        }
    }
}
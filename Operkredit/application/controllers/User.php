<?php
/**
 * Created by PhpStorm.
 * User: asass
 * Date: 01/11/2017
 * Time: 21:09
 */

class User extends CI_Controller
{
    public function index()
    {
        $this->load->model("Data_model");

        $username = null;

        if(isset($_SESSION['username']))
        {
            $username = $_SESSION['username'];
        }

        $data = $this->Data_model->getProfile($username);

        $this->load->view("user/profile", array("data" => $data));
    }

    public function beri_kredit()
    {
        echo $this->session->flashdata('something');
        $this->load->model("Data_model");
        $username = null;

        if(isset($_SESSION['username']))
        {
            $username = $_SESSION['username'];
        }

        $data = $this->Data_model->getProfile($username);
		$kota = $this->Data_model->getLocation($username);
        $this->load->view("user/beri_kredit", array("data" => $data, "kota" => $kota));
    }

    public function motor()
    {
        $file_name=null;

        $config['upload_path'] = './motor/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '50000';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);

        if(isset($_POST['submit']))
        {
            $nomor_stnk = $this->input->post('stnk');
            $nomor_bpkb = $this->input->post('bpkb');
            $nama = $this->input->post('nama');
            $merek = $this->input->post('merek');
            $tipe = $this->input->post('tipe');
            $kota = $this->input->post('kota');
            $provinsi = $this->input->post('provinsi');
            $warna = $this->input->post('warna');
            $jarak = $this->input->post('jarak');
            $silinder = $this->input->post('silinder');
            $tahun = $this->input->post('tahun');
            $deskripsi = $this->input->post('deskripsi');

            $harga_awal = $this->input->post('harga');
			$tebusan = $this->input->post('tebusan');
            $total_bulan_cicilan = $this->input->post('total_cicilan');
            $cicilan_berjalan_ke = $this->input->post('cicilan_ke');
            $cicilan_perbulan = $this->input->post('cicilan_perbulan');

            $this->upload->do_upload('foto1');
            $file1 = $this->upload->data();
            $file1_name = $file1['file_name'];

            $this->upload->do_upload('foto2');
            $file2 = $this->upload->data();
            $file2_name = $file2['file_name'];

            $this->upload->do_upload('foto3');
            $file3 = $this->upload->data();
            $file3_name = $file3['file_name'];

            $this->upload->do_upload('foto4');
            $file4 = $this->upload->data();
            $file4_name = $file4['file_name'];

            $this->upload->do_upload('stnkb');
            $stnkb = $this->upload->data();
            $stnkb_name = $stnkb['file_name'];

            $tambah_motor = array(
                'no_stnkb' => $nomor_stnk,
                'no_bpkb' => $nomor_bpkb,
                'nama' => $nama,
                'merk' => $merek,
                'type' => $tipe,
                'warna' => $warna,
                'jarak_tempuh' => $jarak,
                'isi_silinder' => $silinder,
                'tahun' => $tahun,
                'kota' => $kota,
                'provinsi' => $provinsi,
                'deskripsi' => $deskripsi,
                'foto1' => $file1_name,
                'foto2' => $file2_name,
                'foto3' => $file3_name,
                'foto4' => $file4_name,
                'dokumen_stnkb' => $stnkb_name,
                'harga_awal' => $harga_awal,
				'tebusan' => $tebusan,
                'total_cicilan' => $total_bulan_cicilan,
                'cicilan_ke' => $cicilan_berjalan_ke,
                'cicilan_perbulan' => $cicilan_perbulan,
                'pengoper_kredit' => $_SESSION['username'],
                'status' => "Menunggu",
                'stok' => 1
            );

            $insert = $this->db->insert('motor', $tambah_motor);
            if ($insert != null) {
                $this->session->set_flashdata('something', '<script language="javascript"> alert("Produk Berhasil Ditambahkan")  </script>');
                redirect(base_url() . "index.php/user/produk");

            }
            else
            {
                $this->session->set_flashdata('something', '<script language="javascript"> alert("Gagal Menambahkan Ditambahkan")  </script>');
                redirect(base_url() . "index.php/user/produk");

            }
    }

    $this->load->view("user/beri_kredit");
    }

    public function produk()
    {
        $message = null;
        $in = $this->session->flashdata('in');
        if($in==3)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Menghapus produk.
                                                    </div>";
        }
        if($in==1)
        {
            $message = "<div class=\"alert alert-success alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Sukses</strong> Perubahan data berhasil.
                                                    </div>";
        }
        if($in==2)
        {
            $message = "<div class=\"alert alert-danger alert-dismissable fade in\">
                                                        <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                                                        <strong>Gagal</strong> Perubahan tidak data berhasil.
                                                    </div>";
        }

        $this->load->model("Data_model");

        $data = $this->Data_model->getListProduk();

        $this->load->view("user/produk", array("data" => $data, "message" => $message));
    }

    public function detail_Produk($id)
    {
        $this->load->model("Data_model");

        $data = $this->Data_model->getDetail($id);

        $this->load->view("user/detail_produk", array("data" => $data));
    }

    public function edit($id)
    {
        $this->load->model("Data_model");
        $data = $this->Data_model->getDetail($id);

        $file_name = null;

        $config['upload_path'] = './motor/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size'] = '25000';
        $config['overwrite'] = TRUE;
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->library('upload', $config);

        if (isset($_POST['submit'])) {
            $nomor_bpkb = $this->input->post('bpkb');
            $nama = $this->input->post('nama');
            $merek = $this->input->post('merek');
            $tipe = $this->input->post('tipe');
            $kota = $this->input->post('kota');
            $provinsi = $this->input->post('provinsi');
            $warna = $this->input->post('warna');
            $jarak = $this->input->post('jarak');
            $silinder = $this->input->post('silinder');
            $tahun = $this->input->post('tahun');
            $deskripsi = $this->input->post('deskripsi');

            $this->upload->do_upload('foto1');
            $file1 = $this->upload->data();
            echo $file1_name = $file1['file_name'];

            $this->upload->do_upload('foto2');
            $file2 = $this->upload->data();
            echo $file2_name = $file2['file_name'];

            $this->upload->do_upload('foto3');
            $file3 = $this->upload->data();
            echo $file3_name = $file3['file_name'];

            $this->upload->do_upload('foto4');
            $file4 = $this->upload->data();
            echo $file4_name = $file4['file_name'];

            $this->upload->do_upload('stnkb');
            $stnkb = $this->upload->data();
            echo $stnkb_name = $stnkb['file_name'];

            $edit_motor = array(
                'no_bpkb' => $nomor_bpkb,
                'nama' => $nama,
                'merk' => $merek,
                'type' => $tipe,
                'warna' => $warna,
                'jarak_tempuh' => $jarak,
                'isi_silinder' => $silinder,
                'tahun' => $tahun,
                'kota' => $kota,
                'provinsi' => $provinsi,
                'deskripsi' => $deskripsi,
                'foto1' => $file1_name,
                'foto2' => $file2_name,
                'foto3' => $file3_name,
                'foto4' => $file4_name,
                'dokumen_stnkb' => $stnkb_name
            );

            $where = array("no_stnkb" => $id);
            $update = $this->db->update('motor', $edit_motor, $where);
            if ($update != null) {
                $this->session->set_flashdata('in', 1);
                redirect(base_url() . "index.php/user/produk");
            } else {
                $this->session->set_flashdata('in', 2);
                redirect(base_url() . "index.php/user/produk");
            }
        }

        $this->load->view("user/edit", array("data" => $data));
    }

    public function hapus($id)
    {
        $this->db->where('no_stnkb', $id);
        $this->db->delete('motor');

        $this->session->set_flashdata('in',3);
        redirect(base_url("index.php/user/produk"));
    }

    public function history()
    {

        $this->load->model("Data_model");

        $data = $this->Data_model->getHistory();
        $this->load->view("user/history", array("data" => $data));
    }

    public function detailHistory($id)
    {
        $this->load->model("Data_model");

        $data = $this->Data_model->getDetailHistory($id);

        $this->load->view("user/detailHistory", array("data" => $data));
    }
}
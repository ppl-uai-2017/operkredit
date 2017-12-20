<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Daftar Transaksi</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url("./assets/css/bootstrap.min.css")?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url("./assets/css/animate.min.css")?>" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url("./assets/css/light-bootstrap-dashboard.css")?>" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url("./assets/css/demo.css")?>" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url("./assets/css/pe-icon-7-stroke.css")?>" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="black" >
        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Operkredit
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="<?php echo base_url("index.php/pengesahan")?>">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/pengesahan/customer")?>">
                        <i class="pe-7s-user"></i>
                        <p>Daftar Registrasi</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url("index.php/pengesahan/produk")?>">
                        <i class="pe-7s-note2"></i>
                        <p>Daftar Produk</p>
                    </a>
                </li>

                <li class="active">
                    <a href="<?php echo base_url("index.php/pengesahan/transaksi")?>">
                        <i class="pe-7s-shopbag"></i>
                        <p>Daftar Transaksi</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url("index.php/login/out")?>">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" align="center">Detail Transaksi User</h4>
                                <hr>

                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 align="center">Informasi Personal</h3>
                                        <table class="table table-hover table-striped">
                                            <?php
                                            foreach ($data as $data) {
                                                ?>
                                                <tr>
                                                    <td>No. invoice : </td>
                                                    <td><?php echo $data['id_pengambilan_kredit'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Transaksi: </td>
                                                    <td><?php echo $data['tanggal'] ?></td>
                                                </tr>
                                                    <tr>
                                                        <td>Pemilik Produk (From) : </td>
                                                        <td><a target="_blank" href="<?php echo base_url("index.php/pengesahan/detailRegistrasi/".$data['email'])?>"><?php echo $data['nama_lengkap'] ?></a></td>
                                                    </tr>
                                                <tr>
                                                </tr>
                                            <tr>
                                                <td>Kontak Pemilik : </td>
                                                <td><?php echo $data['no_hp'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Email : </td>
                                                <td><?php echo $data['email'] ?></td>
                                            </tr>
                                            <?php
                                            foreach ($data2 as $data2) {
                                                ?>
                                                <tr>
                                                    <td>Pengambil Barang (For) :</td>
                                                    <td><a target="_blank" href="<?php echo base_url("index.php/pengesahan/detailRegistrasi/".$data2['email'])?>"><?php echo $data2['nama_lengkap'] ?></a></td>
                                                </tr>
                                                <tr>
                                                    <td>Email :</td>
                                                    <td><?php echo $data2['email'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Kontak Penerima :</td>
                                                    <td><?php echo $data2['no_hp'] ?></td>
                                                </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>

                                    </div>
                                        <div class="card">
                                        <h3 align="center">Informasi Produk</h3>
                                        <table class="table table-hover table-striped">
                                                <tr>
                                                    <td>No STNKB : </td>
                                                    <td><a target="_blank" href="<?php echo base_url("index.php/pengesahan/detailProduk/".$data['no_stnkb'])?>"><?php echo $data['no_stnkb'] ?></a></td>
                                                </tr>
                                                <tr>
                                                    <td>BPKB : </td>
                                                    <td><?php echo $data['no_bpkb'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama : </td>
                                                    <td><?php echo $data['nama'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Merek : </td>
                                                    <td><?php echo $data['merk'] ?></td>
                                                </tr><tr>
                                                    <td>Tipe : </td>
                                                    <td><?php echo $data['type'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Warna : </td>
                                                    <td><?php echo $data['warna'] ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Jarak Tempuh : </td>
                                                    <td><?php echo $data['jarak_tempuh'] ?></td>
                                                </tr>
                                            <tr>
                                                <td>Isi Silinder : </td>
                                                <td><?php echo $data['isi_silinder'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Tahun : </td>
                                                <td><?php echo $data['tahun'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Kota : </td>
                                                <td><?php echo $data['kota_motor'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Provinsi : </td>
                                                <td><?php echo $data['provinsi_motor'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi : </td>
                                                <td><?php echo $data['deskripsi'] ?></td>
                                            </tr>

                                            <tr>
                                                <td>Foto : </td>
                                                <td><a href="<?php echo base_url("./motor/".$data['foto1']) ?>"> <img src="<?php echo base_url("./motor/".$data['foto1']) ?>" width="100"> </a> <br><br> <a href="<?php echo base_url("./motor/".$data['foto2']) ?>"> <img src="<?php echo base_url("./motor/".$data['foto2']) ?>" width="100"> </a>  <br><br> <a href="<?php echo base_url("./motor/".$data['foto3']) ?>"> <img src="<?php echo base_url("./motor/".$data['foto3']) ?>" width="100"> </a>  <br><br> <a href="<?php echo base_url("./motor/".$data['foto4']) ?>"> <img src="<?php echo base_url("./motor/".$data['foto4']) ?>" width="100"> </a> </td>
                                            </tr>

                                            <tr>
                                                <td>Dokumen STNKB : </td>
                                                <td><a href="<?php echo base_url("./motor/".$data['dokumen_stnkb']) ?>"> <img src="<?php echo base_url("./motor/".$data['foto1']) ?>" width="100"> </a></td>
                                            </tr>

                                            <tr>
                                                <td>Harga : </td>
                                                <td><?php echo $data['harga_awal'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Total Cicilan : </td>
                                                <td><?php echo $data['total_cicilan'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status Verifikasi Produk : </td>
                                                <td><?php echo $data['status'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Stok barang : </td>
                                                <td><?php echo $data['stok'] ?></td>
                                            </tr>
                                                <?php
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <h3 align="center">Informasi Biaya</h3>
                                        <table class="table table-hover table-striped">
                                            <tr>
                                                <td>Total Kewajiban : </td>
                                                <td><?php echo "Rp ".number_format($data['total_bayar'],2,',','.') ?></td>
                                            </tr>
                                            <tr>
                                                <td>Total Cicilan/bulan : </td>
                                                <td><?php echo "Rp ".number_format($data['cicilan'],2,',','.') ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status Verifikasi Produk : </td>
                                                <td><?php echo $data['verifikasi'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Pembayaran yang dipilih : </td>
                                                <td><?php echo $data['nama_metode_pembayaran'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Rekening : </td>
                                                <td><?php echo $data['nomor_rekening'] ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status Transaksi : </td>
                                                <td><?php echo $data['status_verifikasi'] ?></td>
                                            </tr>
                                        </table>
                                        <?php
                                        if($data['status_verifikasi'] == "Diproses")
                                        {
                                            ?>
                                            <a href="<?php echo base_url("index.php/pengesahan/deniedTransaksi/".$data['id_pengambilan_kredit']."/".$data['no_stnkb']) ?>" type="button" name="submit" rel="tooltip" title="Tolak"
                                               class="btn btn-danger btn-simple btn-xs"
                                               onclick="return confirm('Tolak Transaksi ini ?');">
                                                <div class="btn btn-danger">Batal/Tolak Transaksi</div>
                                            </a>
											<a href="<?php echo base_url("index.php/pengesahan/successTransaksi/".$data['id_pengambilan_kredit']."/".$data['no_stnkb']) ?>" type="button" name="submit" rel="tooltip" title="Selesai"
                                               class="btn btn-danger btn-simple btn-xs"
                                               onclick="return confirm('Transaksi Selesai ?');">
                                                <div class="btn btn-success">Selesai</div>
                                            </a>
                                            <?php
                                        }
                                        if($data['status_verifikasi'] == "Menunggu" || $data['status_verifikasi'] == "Ditolak")
                                        {
                                            ?>
                                            <a href="<?php echo base_url("index.php/pengesahan/approveTransaksi/" . $data['id_pengambilan_kredit']."/".$data['no_stnkb']) ?>" type="button" name="submit" rel="tooltip" title="Verifikasi"
                                               class="btn btn-info btn-simple btn-xs"
                                               onclick="return confirm('Konfirmasi Transaksi ini ?')">
                                                <div class="btn btn-success">Proses Transaksi</div>
                                            </a>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url("./assets/js/jquery-1.10.2.js")?>" type="text/javascript"></script>
<script src="<?php echo base_url("./assets/js/bootstrap.min.js")?>" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url("./assets/js/bootstrap-checkbox-radio-switch.js")?>"></script>

<!--  Charts Plugin -->
<script src="<?php echo base_url("./assets/js/chartist.min.js")?>"></script>

<!--  Notifications Plugin    -->
<script src="<?php echo base_url("./assets/js/bootstrap-notify.js")?>"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url("./assets/js/light-bootstrap-dashboard.js")?>"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("./assets/js/demo.js")?>"></script>

</html>
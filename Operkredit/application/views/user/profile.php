<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Halaman Profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("./css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="<?php echo base_url("./font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/style.css")?>"  rel="stylesheet">
    <link href="<?php echo base_url("./css/responsive.css")?>"  rel="stylesheet">

 
    <script src="<?php echo base_url("./js/ie8-responsive-file-warning.js")?>" ></script>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("./images/fav-144.html")?>" >
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("./images/fav-114.html")?>" >
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("./images/fav-72.html")?>" >
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("./images/fav-57.html")?>" >
    <link rel="shortcut icon" href="<?php echo base_url("./images/fav.html")?>" >

</head>
<body>
<!-- Main Menu Starts -->
<?php
$this->load->view("./navbar");
?>
<!-- Main Menu Ends -->
<!-- Main Container Starts -->
<div id="main-container" class="container">
    <div class="row">
        <!-- Primary Content Starts -->
        <h4 align="center">Halaman Profile</h4><br><br><br>
        <?php
        foreach ($data as $data) {
            ?>
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url("")?>">Home</a></li>
                    <li class="active">Profile</li>
                </ol>
                <!-- About Content Starts -->
                <div class="page-box">
                    <div class="row">
                        <div class="col-sm-3">
                            <img src="<?php echo base_url("./akun/".$data['foto']) ?>" width="200" alt="image" class="img-responsive"/>
                        </div>
                        <div class="col-sm-9">
                            <div class="col-sm-6">
                            <h4>Data Diri</h4>
                            <table class="table" style="font-size:15px">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td><?php echo $data['nama_lengkap'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?php echo $data['email'] ?></td>
                                </tr>

                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td><?php echo $data['tempat_lahir'] ?></td>
                                </tr>

                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td><?php echo $data['tanggal_lahir'] ?></td>
                                </tr>

                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td><?php echo $data['jenis_kelamin'] ?></td>
                                </tr>

                                <tr>
                                    <td>No HP</td>
                                    <td><?php echo $data['no_hp'] ?></td>
                                </tr>

                                <tr>
                                    <td>Status pernikahan</td>
                                    <td><?php echo $data['status_pernikahan'] ?></td>
                                </tr>

                                <tr>
                                    <td>Alamat</td>
                                    <td><?php echo $data['alamat'] ?></td>
                                </tr>

                                <tr>
                                    <td>Kota</td>
                                    <td><?php echo $data['kota'] ?></td>
                                </tr>

                                <tr>
                                    <td>Kode Pos</td>
                                    <td><?php echo $data['kode_pos'] ?></td>
                                </tr>

                                <tr>
                                    <td>Provinsi</td>
                                    <td><?php echo $data['provinsi'] ?></td>
                                </tr>
                            </table>
                            </div>

                            <div class="col-sm-6">

                            <h4>File</h4>
                            <table class="table" style="font-size:15px">
                                <tr>
                                    <td>Nomor KTP</td>
                                    <td><?php echo $data['no_ktp'] ?></td>
                                </tr>
                                <tr>
                                    <td>KTP</td>
                                    <td><a href="<?php echo base_url("./akun/".$data['file_ktp'])?>"> <img src="<?php echo base_url("./akun/".$data['file_ktp'])?>" width="100"></a> </td>
                                </tr>
                            </table>

                            <h4>Pekerjaan</h4>
                            <table class="table" style="font-size:15px">
                                <tr>
                                    <td>Pekerjaan</td>
                                    <td><?php echo $data['pekerjaan'] ?></td>
                                </tr>

                                <tr>
                                    <td>Gaji</td>
                                    <td><?php echo $data['gaji'] ?></td>
                                </tr>
                            </table>

                            <h4>Status Verifikasi Akun</h4>
                            <table class="table" style="font-size:15px">
                                <tr>
                                    <td>Status</td>
                                    <td><?php echo $data['verifikasi'] ?></td>
                                </tr>

                            </table>
                            </div>
                        </div>
                    </div>
                    <br/>

                </div>
                <!-- About Content Ends -->
                <hr/>
                <!-- Testimonials Starts -->

                <!-- Testimonial #3 Ends -->
                <!-- Testimonials Ends -->
            </div>
            <?php
        }
        ?>
        <!-- Primary Content Ends -->
    </div>
</div>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->
<?php
$this->load->view("./footer");
?>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="<?php echo base_url("./js/jquery-1.11.1.min.js")?>"></script>
<script src="<?php echo base_url("./js/jquery-migrate-1.2.1.min.js")?>"></script>
<script src="<?php echo base_url("./js/bootstrap.min.js")?>"></script>
<script src="<?php echo base_url("./js/bootstrap-hover-dropdown.min.js")?>"></script>
<script src="<?php echo base_url("./js/jquery.magnific-popup.min.js")?>"></script>
<script src="<?php echo base_url("./js/owl.carousel.min.js")?>"></script>
<script src="<?php echo base_url("./js/custom.js")?>"></script>
</body>
</html>
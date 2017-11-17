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

    <title>Daftar Produk</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="<?php echo base_url("./font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/style.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/responsive.css")?>" rel="stylesheet">


    <script src="<?php echo base_url("./js/ie8-responsive-file-warning.js")?>"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url("./images/fav-144.html")?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url("./images/fav-114.html")?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url("./images/fav-72.html")?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url("./images/fav-57.html")?>">
    <link rel="shortcut icon" href="<?php echo base_url("./images/fav.html")?>">

</head>
<body>
<?php
    $this->load->view("./navbar");
?>
<!-- Main Container Starts -->
<div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="<?php echo base_url("")?>">Home</a></li>
        <li class="active">Riwayat Transaksi</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <h4 align="center">
        Riwayat Transaksi
    </h4>
    <!-- Main Heading Ends -->
    <!-- Compare Table Starts -->
    <br>
    * Transaksi dalam status menunggu belum bisa melanjutkan penjadwalan
    <?php
    if(isset($message))
    {
        echo $message;
    }
    ?>
    <div class="table-responsive compare-table">
        <table class="table table-bordered">
            <thead>
            <tr>
                <td>No Transaksi. </td>
                <td>Tanggal </td>
                <td>Judul </td>
                <td>Total Harga </td>
                <td>Status</td>
                <td>Aksi</td>
            </tr>
            </thead>
            <tbody>
            <?php
            if($data  != null)
            {
            foreach ($data as $data) {
                ?>
                <tr>
                    <td><?php echo $data['id_pengambilan_kredit']; ?></td>
					<td><?php echo $data['tanggal']; ?></td>
                    <td>
                        <?php echo $data['judul']; ?>
                    </td>
                    <td>
                        <?php echo number_format($data['total_harga'], 2, ',', '.'); ?>
                    </td> 
                    <td>
                        <?php
                        if ($data['verifikasi'] == "Menunggu") {
                            ?>
                            <span class="label label-warning"><?php echo $data['verifikasi']; ?></span>
                            <?php
                        } elseif ($data['verifikasi'] == "Disetujui") {
                            ?>
                            <span class="label label-success"><?php echo $data['verifikasi']; ?></span>
                            <?php
                        } else{
                            ?>
                            <span class="label label-danger"><?php echo $data['verifikasi']; ?></span>
                            <?php
                        }
                        ?>
                    </td>
                    <td>
                        <a href="<?php echo base_url("index.php/user/detailHistory/" . $data['id_pengambilan_kredit']) ?>"><span
                                    class="label label-info"> Detail</span></a>
                    </td>
                </tr>
                <?php
            }
            }
            else
            {
                ?>
            <tr>
                <td colspan="8">Belum ada Transaksi</td>
            </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <!-- Compare Table Ends -->
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
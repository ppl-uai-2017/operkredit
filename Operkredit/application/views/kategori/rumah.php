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

    <title>Kategori - Rumah</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("./css/bootstrap.min.css")?>" rel="stylesheet">

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
<!-- Header Section Starts -->
<header id="header-area">
    <!-- Nested Container Starts -->
    <?php
        $this->load->view("navbar");
    ?>
    <!-- Nested Container Ends -->
</header>
<!-- Header Section Ends -->

<!-- Main Container Starts -->
<div id="main-container" class="container">
    <div class="row">
        <!-- Sidebar Starts -->
        <!-- Sidebar Ends -->
        <!-- Primary Content Starts -->
        <div class="col-md-12">
            <!-- Breadcrumb Starts -->
            <ol class="breadcrumb">
                <li><a href="index-2.html">Home</a></li>
                <li>Kategori</li>
                <li class="active">Rumah</li>
            </ol>
            <!-- Breadcrumb Ends -->
            <!-- Main Heading Starts -->
            <h2 class="main-heading2">
                Properti > Rumah
            </h2>
            <!-- Main Heading Ends -->
            <!-- Category Intro Content Starts -->
            <div class="row cat-intro">
                <div class="col-sm-3">
                    <img src="<?php echo base_url("./images/rumah.jpg")?>" alt="Image" class="img-responsive img-thumbnail" />
                </div>
                <div class="col-sm-9 cat-body">
                    <p>
                        Miliki Rumah idaman hanya dengan klik saja
                    </p>
                </div>
            </div>
            <!-- Category Intro Content Ends -->
            <!-- Product Filter Starts -->
            <div class="product-filter">
                <div class="row">
                    <div class="col-md-4">
                        <div class="display">
                            <a href="#" class="active">
                                <i class="fa fa-th" title="Grid View"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-5 text-right">
                        <label class="control-label">Sort</label>
                    </div>
                    <div class="col-md-3 text-right">
                        <select class="form-control">
                            <option value="default" selected="selected">Default</option>
                            <option value="ascending">Name (A - Z)</option>
                            <option value="descending">Name (Z - A)</option>
                            <option value="murah">Termurah</option>
                            <option value="mahal">Termahal</option>
                        </select>
                    </div>
                </div>
            </div>
            <!-- Product Filter Ends -->
            <!-- Product Grid Display Starts -->
            <div class="row">
                <!-- Product #1 Starts -->
                <?php
                foreach ($rumah as $data => $rumah) {
                    ?>
                        <div class="col-md-3 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./rumah/".$rumah -> foto2)?>" alt="product"
                                     class="img-responsive img-center-sm"/>
                            </div>
                            <div class="caption">
                                <h4><?php echo $rumah -> judul ?></h4>
                                <div class="description">
                                    <table>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td> <?php echo "Rp.".number_format($rumah -> harga,2,',','.') ?></td>
                                        </tr>

                                        <tr>
                                            <td>Lokasi  </td>
                                            <td>:</td>
                                            <td> <?php echo  $rumah -> kota ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cicilan ke </td>
                                            <td>:</td>
                                            <td> <?php echo  $rumah -> cicilan_ke ?></td>
                                        </tr>

                                        <tr>
                                            <td>Total Cicilan </td>
                                            <td>:</td>
                                            <td> <?php echo  $rumah -> total_cicilan." Bulan" ?></td>
                                        </tr>

                                        <tr>
                                            <td>Cicilan </td>
                                            <td>:</td>
                                            <td> <?php echo "Rp.".number_format($rumah -> cicilan_perbulan,2,',','.')." /bulan" ?></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="cart-button button-group">
                                    <button onclick="location.href='<?php echo base_url("index.php/category/detail/".$rumah -> idrumah)?>';" type="button" class="btn btn-cart">
                                        Lihat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <!-- Product #1 Ends -->
            </div>
            <!-- Product Grid Display Ends -->
            <hr />
            <!-- Pagination & Results Starts -->
            <div class="row">
                <!-- Pagination Starts -->
                <div class="col-sm-6 pagination-block">
                    <center>
                        <?php
                            echo $this->pagination->create_links();
                        ?>
                    </center>
                </div>
                <!-- Pagination Ends -->
            </div>
            <!-- Pagination & Results Ends -->
        </div>
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
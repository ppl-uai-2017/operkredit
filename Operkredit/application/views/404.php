<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Halaman Tidak Ditemukan</title>

    <!-- Favicons-->
    <link rel="icon" href="<?php echo base_url("../images/favicon/favicon-32x32.png")?>" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->


    <?php
    $this->load->view("css");
    ?>
</head>

<body class="cyan">
<div id="error-page">

    <div class="row">
        <div class="col s12">
            <div class="browser-window">
                <div class="top-bar">
                    <div class="circles">
                        <div id="close-circle" class="circle"></div>
                        <div id="minimize-circle" class="circle"></div>
                        <div id="maximize-circle" class="circle"></div>
                    </div>
                </div>
                <div class="content">
                    <div class="row">
                        <div id="site-layout-example-top" class="col s12">
                            <p class="flat-text-logo center white-text caption-uppercase">Maaf Halaman Tidak Dapat Ditemukan</p>
                        </div>
                        <div id="site-layout-example-right" class="col s12 m12 l12">
                            <div class="row center">
                                <h1 class="text-long-shadow col s12">404</h1>
                            </div>
                            <div class="row center">
                                <p class="center white-text col s12">Halaman Tidak Ada.</p>
                                <p class="center s12"><a href="<?php echo base_url("")?>" class="btn waves-effect waves-light">Homepage</a>
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- ================================================
  Scripts
  ================================================ -->

<?php
$this->load->view("script");
?>

<script type="text/javascript">
    function goBack() {
        window.history.back();
    }
</script>
</body>


<!-- Mirrored from demo.geekslabs.com/materialize/v2.3/layout03/page-404.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Nov 2017 10:00:49 GMT -->
</html>

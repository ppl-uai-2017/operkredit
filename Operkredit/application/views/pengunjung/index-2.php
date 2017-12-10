<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Operkredit</title>
    <?php
    $this->load->view("./css.php");
    ?>
    </head>

<body>
<?php
$this->load->view("./navbar.php");
?>

<br><br><br><br>
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                  <!-- SLider-->
                    <!DOCTYPE html>
                    <html>
                    <head>
                        <link href="<?php echo base_url("./themes/2/js-image-slider.css")?>" rel="stylesheet" type="text/css" />
                        <script src="<?php echo base_url("./themes/2/js-image-slider.js")?>" type="text/javascript"></script>
                        <link href="<?php echo base_url("./generic.css")?>" rel="stylesheet" type="text/css" />
                    </head>

                    <br>

                    <div id="container">
                        <a href="<?php echo base_url("index.php/category/sport")?>">
                            <figure>
                                <img src="<?php echo base_url("./images/motor/motorbike.png")?>" width="100px" height="100px" />
                                <figcaption>Sport</figcaption>
                            </figure>
                        </a>
                        <a href="<?php echo base_url("index.php/category/matic")?>">
                            <figure>
                                <img src="<?php echo base_url("./images/motor/vespa.png")?>" width="100px" height="100px" />
                                <figcaption>Matik</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div id="sliderFrame">
                        <div class="header-search-wrapper hide-on-med-and-down">
                            <form action="<?php echo base_url("index.php/category/all")?>" method="POST">
                                <input type="text" name="kota" class="form-control" required placeholder="Saya ingin cari di: Jakarta"  oninvalid="this.setCustomValidity('Tidak Boleh Kosong')"
                                       oninput="setCustomValidity('')"/>
                                <input type="submit" name="submit" class="btn btn-info" value="Cari">
                            </form>
                        </div>

                    </div>
                </div>
            </section>




            <style>
                #container {
                    text-align: center;
                }
                a, figure {
                    display: inline-block;
                }
                figcaption {
                    margin: 10px 0 0 0;
                    font-variant: small-caps;
                    font-family: Arial;
                    font-weight: bold;
                    color: #bb3333;
                }
                figure {
                    padding: 5px;
                }
                img:hover {
                    transform: scale(1.1);
                    -ms-transform: scale(1.1);
                    -webkit-transform: scale(1.1);
                    -moz-transform: scale(1.1);
                    -o-transform: scale(1.1);
                }
                img {
                    transition: transform 0.2s;
                    -webkit-transition: -webkit-transform 0.2s;
                    -moz-transition: -moz-transform 0.2s;
                    -o-transition: -o-transform 0.2s;
                }
            </style>
            <!--Start of Zendesk Chat Script-->
            <script type="text/javascript">
                window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
                    d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
                _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
                    $.src="https://v2.zopim.com/?5K8hLQsfy7OuoR5d7SrTJXWIjLppNgIc";z.t=+new Date;$.
                        type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
            </script>
            <!--End of Zendesk Chat Script-->
            <!-- END CONTENT -->
        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->
<?php
$this->load->view("./script.php");
?>
</body>

</html>
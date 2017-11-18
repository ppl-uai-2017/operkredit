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
                    <body>
                    <br>

                    <div id="sliderFrame">
                        <div id="slider">
                            <img src="<?php echo base_url("./images/image-slider-1.jpg")?>"/>
                            <a class="lazyImage" href="images/image-slider-2.jpg"></a>
                            <a ><b data-src="images/image-slider-3.jpg"></b></a>
                            <a class="lazyImage" href="images/image-slider-4.jpg" title=""></a>
                        </div>
                        <!--thumbnails-->
                        <div id="thumbs">
                            <div class="thumb">
                                <div class="frame"><img src="<?php echo base_url("./images/thumb1.jpg")?>" /></div>
                                <div class="thumb-content"><p>HTML Content</p>Thumbnails allows any HTML content</div>
                                <div style="clear:both;"></div>
                            </div>
                            <div class="thumb">
                                <div class="frame"><img src="images/thumb2.jpg" /></div>
                                <div class="thumb-content"><p>Customizable</p>Thumbnail style is customizable</div>
                                <div style="clear:both;"></div>
                            </div>
                            <div class="thumb">
                                <div class="frame"><img src="images/thumb3.jpg" /></div>
                                <div class="thumb-content"><p>Variety of Layouts</p>Just a CSS tweak.</div>
                                <div style="clear:both;"></div>
                            </div>
                            <div class="thumb">
                                <div class="frame"><img src="images/thumb4.jpg" /></div>
                                <div class="thumb-content"><p>Integration</p>Built-in functions for the thumbnails</div>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                        <div style="clear:both;height:0;"></div>
                    </div>
                </div>
            </section>

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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0">
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
                                <figcaption>Matic</figcaption>
                            </figure>
                        </a>
                        <a href="<?php echo base_url("index.php/category/bebek")?>">
                            <figure>
                                <img src="<?php echo base_url("./images/motor/bebek.png")?>" width="100px" height="100px" />
                                <figcaption>Bebek</figcaption>
                            </figure>
                        </a>
                    </div>
                    <div id="sliderFrame">
                        <div class="header-search-wrapper hide-on-med-and-down">
                            <form action="<?php echo base_url("index.php/category/all")?>" method="POST">
                                <input type="text" name="kota" class="form-control" required placeholder="Saya ingin cari dilokasi: Jakarta"  oninvalid="this.setCustomValidity('Tidak Boleh Kosong')"
                                       oninput="setCustomValidity('')"/>
                                <!--<input type="submit" name="submit" class="btn waves-effect waves-light blue">-->
                                <button type="submit" class="btn waves-effect waves-light grey">Cari</button>
                            </form>
                        </div>

                    </div>
                </div>
            </section>

            <br><br><br><br>
            <h4 align="center">Apa Itu Operkredit ?</h4>
            <p align="center" style="font-size:18px">
                Operkredit adalah marketplace khusus bagi pengguna yang ingin memiliki barang dengan cara kredit baru maupun pindah kredit lama dari pengguna lainnya. Di Operkredit pengguna dapat mengajukan pengoperan produk motor yang masih dalam status kredit berjalan maupun produk baru dari dealer resmi maupun perorangan.
            </p>

            <center>
            <iframe src="https://www.youtube.com/embed/YbzcxAPTk7U"  width="710" height="345"  align="middle">
            </iframe>
            </center>

            <br><br><br>
            <h4 align="center">Cara Operkredit</h4>
            <div id="container">

                    <figure>
                        <img src="<?php echo base_url("./images/Tutorial Diagram/1.png")?>" width="100px" height="100px" />
                        <figcaption>1. Registrasi dan Dapatkan Verifikasi Akun maksimal 2 hari kerja</figcaption>
                    </figure>


                    <figure>
                        <img src="<?php echo base_url("./images/Tutorial Diagram/2.png")?>" width="100px" height="100px" />
                        <figcaption>2. Login untuk dapat mengajukan opekredit</figcaption>
                    </figure>


                    <figure>
                        <img src="<?php echo base_url("./images/Tutorial Diagram/3.png")?>" width="100px" height="100px" />
                        <figcaption>3. Cari produk, lihat detail dan pilih produk</figcaption>
                    </figure>


                    <figure>
                        <img src="<?php echo base_url("./images/Tutorial Diagram/4.png")?>" width="100px" height="100px" />
                        <figcaption>4. Konfirmasi dan Ajukan Operkredit</figcaption>
                    </figure>


                    <figure>
                        <img src="<?php echo base_url("./images/Tutorial Diagram/5.png")?>" width="100px" height="100px" />
                        <figcaption>5. Tunggu Tim kami menghubungi, maksimal 2 hari kerja</figcaption>
                    </figure>

            </div>
            <br><br><br>

            <div class="container">
                <div class="section">
                    <div class="divider"></div>
                    <div class="row">
                        <div class="col s12">
                            <h4 align="center">FAQ</h4>
                        </div>

                        <section class="plans-container">
                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Apa Itu operkredit ?</font> </div>
                                        <div class="price-desc"><font color="black" size="3">Operkredit adalah <i>marketplace</i> untuk transaksi barang yang masih dalam status kredit dan akan di pindahkan kewajiban tersebut kepada pihak lain yang berminat</font></div>
                                    </div>
                                </div>
                            </article>

                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Apa operkredit aman ?</font> </div>
                                        <div class="price-desc"><font color="black" size="3">Kami menjamin keamanan data yang tersimpan dengan baik dalam database kami, sehingga pengunjung tidak perlu khawatir</font></div>
                                    </div>
                                </div>
                            </article>

                            <!--
                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Apa Operkredit halal ?</font> </div>
                                        <div class="price-desc"><font color="black" size="3">Operkredit adalah perusahaan yang menjadi jasa untuk mempertemukan pihak yang sedang memiliki kredit untuk membantu agar kredit tersebut dapat dipindah kepada pihak lain, merupakan salah satu bentuk untuk menghindari adanya riba karena sebagian besar kredit yang ada di Indonesia menggunakan prinsip denda bila telat membayar, maka dengan dipindahkan kewajiban tersebut bisa menghindari adanya riba.</font></div>
                                    </div>
                                </div>
                            </article>


                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Penjesalan Hukum Kredit</font> </div>
                                        <div class="price-desc"><font color="black" size="3"></font></div>
                                    </div>
                                </div>
                            </article>
                            -->

                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Produk Apa yang ada di operkredit ?</font> </div>
                                        <div class="price-desc"><font color="black" size="3">Untuk saat ini operkredit khusus menyediakan produk kendaraan bermotor. Namun, tidak perlu khawatir karena produk yang lain akan berkembang</font></div>
                                    </div>
                                </div>
                            </article>

                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Mengapa Barang Harus dioperkredit ?</font> </div>
                                        <div class="price-desc"><font color="black" size="3">Pelanggan yang memiliki kredit barang ketika tidak ingin melanjutkan kredit barangnya bisa memindahkan kewajiban kredit nya kepada pihak lain. Operkredit juga sebagai fasilitator kredit macet agar kredit tersebut bisa dilanjutkan oleh pihak lain</font></div>
                                </div>
                                </div>
                            </article>

                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Apa Keuntungannya ?</font> </div>
                                        <div class="price-desc"><font color="black" size="3">Pemilik kredit awal bisa terbebas dari beban bayar, mendapat biaya untuk barang lain, atau bila tak sanggup lagi untuk melanjutkan kredit produk.</font></div>
                                    </div>
                                </div>
                            </article>

                            <article class="col s12 m6 l4 ">
                                <div class="card z-depth-4">
                                    <div class="card-image white waves-effect">
                                        <div class="card-title"><font color="black" size="3">Apa operkredit memiliki aplikasi ?</font> </div>
                                        <div class="price-desc"><font color="black" size="3">Untuk saat ini operkredit hanya tersedia di web aplikasi, namun akan terus berkembang.</font></div>
                                    </div>
                                </div>
                            </article>
                        </section>

                    </div>
                    <a class="waves-effect waves-light modal-trigger" href="#modal3"><h5 align="center" style="color: black"> selengkapnya</h5></a>

                    <div id="modal3" class="modal">
                        <div class="modal-content">
                            <h4 align="center">FAQ</h4>
                            <br><br>
                            <h5>
                                Apa itu operkredit ?
                            </h5>
                            <p align="justify">Operkredit adalah <i>marketplace</i> untuk transaksi barang yang masih dalam status kredit dan akan di pindahkan kewajiban tersebut kepada pihak lain yang berminat</p>
                            <hr>

                            <br><br>
                            <h5>
                                Apa operkredit aman ?
                            </h5>
                            <p align="justify">Kami menjamin keamanan data yang tersimpan dengan baik dalam database kami, sehingga pengunjung tidak perlu khawatir</p>
                            <hr>

                            <br><br>
                            <h5>
                                Apa Operkredit halal ?
                            </h5>
                            <p align="justify">Operkredit adalah perusahaan yang menjadi jasa untuk mempertemukan pihak yang sedang memiliki kredit untuk membantu agar kredit tersebut dapat dipindah kepada pihak lain, merupakan salah satu bentuk untuk menghindari adanya riba karena sebagian besar kredit yang ada di Indonesia menggunakan prinsip denda bila telat membayar, maka dengan dipindahkan kewajiban tersebut bisa menghindari adanya riba.</p>
                            <hr>

                            <br><br>
                            <h5>
                                Penjesalan Hukum Kredit
                            </h5>
                            <p align="justify">Hukum adanya transaksi dengan cara kredit dibagi menjadi beberapa pandangan. Transaksi kredit pun tidak semuanya riba (Haram) untuk dilakukan, berikut pembahasan: <a href="http://pengusahamuslim.com/1476-tanya-jawab-hukum-jual-beli-kredit.html">Hukum Kredit</a> </p>
                            <hr>


                            <br><br>
                            <h5>
                                Produk Apa yang ada di operkredit ?
                            </h5>
                            <p align="justify">Untuk saat ini operkredit khusus menyediakan produk kendaraan bermotor. Namun, tidak perlu khawatir karena produk yang lain akan berkembang</p>
                            <hr>


                            <br><br>
                            <h5>
                                Mengapa Barang Harus dioperkredit ?
                            </h5>
                            <p align="justify">Pelanggan yang memiliki kredit barang ketika tidak ingin melanjutkan kredit barangnya bisa memindahkan kewajiban kredit nya kepada pihak lain. Operkredit juga sebagai fasilitator kredit macet agar kredit tersebut bisa dilanjutkan oleh pihak lain</p>
                            <hr>


                            <br><br>
                            <h5>
                                Apa keuntungannya ?
                            </h5>
                            <p align="justify">Pemilik kredit awal bisa terbebas dari beban bayar, mendapat biaya untuk barang lain, atau bila tak sanggup lagi untuk melanjutkan kredit produk.</p>
                            <hr>


                            <br><br>
                            <h5>
                                Mengapa Barang Harus dioperkredit ?
                            </h5>
                            <p align="justify">Pelanggan yang memiliki kredit barang ketika tidak ingin melanjutkan kredit barangnya bisa memindahkan kewajiban kredit nya kepada pihak lain. Operkredit juga sebagai fasilitator kredit macet agar kredit tersebut bisa dilanjutkan oleh pihak lain</p>
                            <hr>

                            <br><br>
                            <h5>
                                Mengapa Barang Harus dioperkredit ?
                            </h5>
                            <p align="justify">Untuk saat ini operkredit hanya tersedia di web, namun akan terus berkembang.</p>
                            <hr>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Mengerti</a>
                        </div>
                    </div>

                    <br><br><br><br>
                    <?php
                    $this->load->view("footer");
                    ?>
                </div>
            </div>

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

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->
<?php
$this->load->view("./script.php");
?>
</body>

</html>
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

    <title>Operkredit</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("./css/bootstrap.min.css")?>" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="<?php echo base_url("./font-awesome/css/font-awesome.min.css")?>" rel="stylesheet">
    <link href="<?php echo base_url("./css/owl.carousel.css")?>" rel="stylesheet">
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
    <?php
    $this->load->view("navbar");
    ?>
    <!-- Nested Container Starts -->
    <div class="container">
        <!-- Header Top Starts -->

        <?php
        if(isset($message))
        {
            echo $message;
        }
        ?>
        <!-- Header Top Ends -->
    </div>
    <!-- Nested Container Ends -->
</header>
<!-- Header Section Ends -->
<!-- Main Menu Starts -->

<div class="col-lg-8">
</div>

<div class="col-md-3 col-xs-12">
    <div id="search">
        <form action="" method="POST">
        <div class="input-group">

            <input type="text" class="form-control" placeholder="Search">
            <span class="input-group-btn">
								<button class="btn btn-lg" type="submit">
									<i class="fa fa-search"></i>
								</button>
							  </span>
        </div>
        </form>
    </div>
</div>
<br><br>
<!-- Main Menu Ends -->
<!-- Main Container Starts -->
<div id="main-container" class="container home">
    <!-- Nested Row Starts -->
    <div class="row">
        <!-- Sidebar Starts -->
        <div class="col-md-3">
            <!-- Categories Links Starts -->
            <h3 class="side-heading">Categories</h3>
            <div class="list-group categories">
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Properti
                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
                <a href="category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>

                </a>
            </div>
            <!-- Categories Links Ends -->
            <!-- Banner #1 Starts -->
             <br>
            <!-- Banner #1 Ends -->

            <!-- Banner #2 Starts -->

            <!-- Banner #2 Ends -->
        </div>
        <!-- Sidebar Ends -->
        <!-- Primary Content Starts -->
        <div class="col-md-9">
            <!-- Top Section Starts -->
            <div class="row">
                <!-- Slider Starts -->
                <div class="col-sm-13 col-xs-12">
                    <div id="main-carousel" class="carousel slide slider" data-ride="carousel">
                        <!-- Wrapper For Slides Starts -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="http://www.xoticpc.com/media/wysiwyg/xpc/laptop/asus/gl503/banner-hero.jpg" width="1000" alt="Slider" class="img-responsive img-center-xs" />
                            </div>
                            <div class="item">
                                <img src="https://dlcdnimgs.asus.com/websites/global/products/fRoiTmXJNO2QtbzD/PG27UQ-banner-middle.jpg" width="1100" alt="Slider" class="img-responsive img-center-xs" />
                            </div>
                        </div>
                        <!-- Wrapper For Slides Ends -->
                        <!-- Controls Starts -->
                        <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                        <!-- Controls Ends -->
                    </div>
                </div>
                <!-- Slider Ends -->

            </div>
            <!-- Top Section Ends -->
        </div>
    </div>

            <!-- Latest Products Starts -->
            <section class="product-carousel">
                <!-- Heading Starts -->
                <h2 class="product-head">Latest Products</h2>
                <!-- Heading Ends -->
                <!-- Products Row Starts -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Product Carousel Starts -->
                        <div id="owl-product" class="owl-carousel">
                            <!-- Product #1 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/1.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #1 Ends -->
                            <!-- Product #2 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/2.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #2 Ends -->
                            <!-- Product #3 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/3.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #3 Ends -->
                            <!-- Product #4 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/4.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #4 Ends -->
                            <!-- Product #5 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/5.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #5 Ends -->
                            <!-- Product #6 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/6.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #6 Ends -->
                            <!-- Product #7 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/7.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #7 Ends -->
                            <!-- Product #8 Starts -->
                            <div class="item">
                                <div class="product-col">
                                    <div class="image">
                                        <img src="<?php echo base_url("./images/product-images/8.jpg")?>" alt="product" class="img-responsive" />
                                    </div>
                                    <div class="caption">
                                        <h4><a href="product.html">Digital Electro Goods</a></h4>
                                        <div class="price">
                                            <span class="price-new">$199.50</span>
                                            <span class="price-old">$249.50</span>
                                        </div>
                                        <div class="cart-button button-group">
                                            <button type="button" class="btn btn-cart">
                                                <i class="fa fa-shopping-cart"></i>
                                                Add to cart
                                            </button>
                                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                                <i class="fa fa-heart"></i>
                                            </button>
                                            <button type="button" title="Compare" class="btn btn-compare">
                                                <i class="fa fa-bar-chart-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Product #8 Ends -->
                        </div>
                        <!-- Product Carousel Ends -->
                    </div>
                </div>
                <!-- Products Row Ends -->
            </section>
            <!-- Latest Products Ends -->
            <!-- 1 Column Banners Starts -->
            <div class="col1-banners">
                <img src="<?php echo base_url("./images/banners/1col-banner1.jpg")?>" alt="banners" class="img-responsive img-center-sm img-center-xs" />
            </div>
            <!-- 1 Column Banners Ends -->
            <!-- Featured Products Starts -->
            <section class="products-list">
                <!-- Heading Starts -->
                <h2 class="product-head">Featured Products</h2>
                <!-- Heading Ends -->
                <!-- Products Row Starts -->
                <div class="row">
                    <!-- Product #1 Starts -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/9.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/9.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/9.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/9.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/9.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/9.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product #1 Starts -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/9.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product #1 Ends -->
                    <!-- Product #2 Starts -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/10.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product #2 Ends -->
                    <!-- Product #3 Starts -->
                    <div class="col-md-4 col-sm-6">
                        <div class="product-col">
                            <div class="image">
                                <img src="<?php echo base_url("./images/product-images/11.jpg")?>" alt="product" class="img-responsive img-center-sm img-center-xs" />
                            </div>
                            <div class="caption">
                                <h4>
                                    <a href="product-full.html">Digital Electro Goods</a>
                                </h4>
                                <div class="price">
                                    <span class="price-new">$199.50</span>
                                    <span class="price-old">$249.50</span>
                                </div>
                                <div class="cart-button button-group">
                                    <button type="button" class="btn btn-cart">
                                        <i class="fa fa-shopping-cart"></i>
                                        Add to cart
                                    </button>
                                    <button type="button" title="Wishlist" class="btn btn-wishlist">
                                        <i class="fa fa-heart"></i>
                                    </button>
                                    <button type="button" title="Compare" class="btn btn-compare">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Product #3 Ends -->
                </div>
                <!-- Products Row Ends -->
            </section>
            <!-- Featured Products Ends -->
        </div>
        <!-- Primary Content Ends -->
    </div>
    <!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->
<?php
$this->load->view("footer");
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
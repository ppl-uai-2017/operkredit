<br>
<nav id="main-menu" class="navbar" role="navigation">
    <div class="container">
        <!-- Nav Header Starts -->

        <!-- Nav Header Ends -->
        <!-- Navbar Cat collapse Starts -->
        <div class="collapse navbar-collapse navbar-cat-collapse">
            <ul class="nav navbar-nav">
                <?php
                if(isset($_SESSION['username']))
                {
                    ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url("index.php/home")?>">
                                <i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
                                <span class="hidden-sm hidden-xs">
											Home
										</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                                My Account
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a tabindex="-1" href="<?php echo base_url("index.php/login/out")?>">Logout</a></li>

                            </ul>
                        </li>
                    </ul>
                    <?php
                }
                else
                {
                    ?>
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="<?php echo base_url("index.php/home")?>">
                                <i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
                                <span class="hidden-sm hidden-xs">
											Home
										</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/login")?>">
                                <i class="fa fa-lock hidden-lg hidden-md" title="Login"></i>
                                <span class="hidden-sm hidden-xs">
											Login
										</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/register")?>">
                                <i class="fa fa-unlock hidden-lg hidden-md" title="Register"></i>
                                <span class="hidden-sm hidden-xs">
											Register
										</span>
                            </a>
                        </li>
                    </ul>
                    <?php
                }
                ?>
            </ul>

        </div>
        <!-- Navbar Cat collapse Ends -->
    </div>
</nav>
<hr>
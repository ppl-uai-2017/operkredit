<nav class="navbar" role="navigation">
    <div class="panel panel-smart" >
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
											<font color="black">Home</font>
										</span>
                            </a>
                        </li>

                        <li class="dropdown">
                            <a href="category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                                <font color="black">Akun</font>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a tabindex="-1" href="<?php echo base_url("index.php/user")?>"><font color="black", size="2">Halaman Profile</font></a></li>
                                <li><a tabindex="-1" href="<?php echo base_url("index.php/user/produk")?>"><font color="black", size="2">Barang Saya</font></a></li>
                                <li><a tabindex="-1" href="<?php echo base_url("index.php/user/history")?>"><font color="black", size="2">Riwayat Transaksi</font></a></li>
                                <li><a tabindex="-1" href="<?php echo base_url("index.php/user/beri_kredit")?>"><font color="black", size="2">Beri Kredit</font></a></li>
                                <li><a tabindex="-1" href="<?php echo base_url("index.php/login/out")?>"><font color="black", size="2">Logout</font></a></li>
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
											<font color="black">Home</font>
										</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/login")?>">
                                <i class="fa fa-lock hidden-lg hidden-md" title="Login"></i>
                                <span class="hidden-sm hidden-xs">
											<font color="black">Login</font>
										</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/register")?>">
                                <i class="fa fa-unlock hidden-lg hidden-md" title="Register"></i>
                                <span class="hidden-sm hidden-xs">
											<font color="black">Register</font>
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
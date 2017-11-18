<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">
            <div class="nav-wrapper">
                <ul class="left">
                    <li class="no-hover"><a href="#" data-activates="slide-out" class="menu-sidebar-collapse btn-floating btn-flat btn-medium waves-effect waves-light cyan hide-on-large-only"><i class="mdi-navigation-menu" ></i></a></li>
                    <li><h1 class="logo-wrapper"><a href="<?php echo base_url("")?>" class="brand-logo darken-1"><img src="" alt="OperKredit"></a> <span class="logo-text">Materialize</span></h1></li>
                </ul>
                <div class="header-search-wrapper hide-on-med-and-down">
                    <i class="mdi-action-search"></i>
                    <input type="text" name="Search" class="header-search-input z-depth-9" placeholder="Apa yang kamu cari"/>
                </div>
                <ul class="right hide-on-med-and-down">
                    <?php
                    if(!isset($_SESSION['username'])) {
                        ?>
                        <li><a class="modal-trigger" href="#modal1">Login</a>
                        </li>
                        <li><a href="<?php echo base_url("index.php/register")?>">Register</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>

        <!-- Modals Windows-->
        <div id="modal1" class="modal">
            <div class="modal-content">
                <form action="<?php echo base_url("index.php/login/validasi")?>" method="POST" class="col s12">
                    <h4 align="center" class="header2">Login</h4>
                    <hr>
                    <div class="row">
                        <div class="input-field col s4">
                            <i class="mdi-action-account-circle prefix"></i>
                            <input name="username" id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Username</label>
                        </div>
                        <div class="input-field col s4">
                            <i class="mdi-action-lock-outline prefix"></i>
                            <input name="password" id="icon_password" type="password" class="validate">
                            <label for="icon_password">Password</label>
                        </div>
                        <div class="input-field col s4">
                            <div class="input-field col s12">
                                <button type="submit" class="btn cyan waves-effect waves-light" type="submit" name="action"><i class="mdi-action-lock-open"></i> Login</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="#" class="waves-effect waves-red btn-flat modal-action modal-close">Batal</a>
            </div>
        </div>
        <!-- HORIZONTL NAV START-->
        <nav id="horizontal-nav" class="white hide-on-med-and-down">
            <div class="nav-wrapper">
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li>
                        <a href="<?php echo base_url("")?>" class="cyan-text">
                            <i class="mdi-action-home"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-menu cyan-text" href="#!" data-activates="Formsdropdown">
                            <i class="mdi-editor-insert-comment"></i>
                            <span>Produk<i class="mdi-navigation-arrow-drop-down right"></i></span>
                        </a>
                    </li>
                </ul>
                <?php
                if(isset($_SESSION['username'])) {
                    ?>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-menu cyan-text" href="#!" data-activates="UIElementsdropdown">
                                <i class="mdi-social-person"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </nav>

        <ul id="UIElementsdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a tabindex="-1" href="<?php echo base_url("index.php/user")?>"><font color="black", size="2">Halaman Profile</font></a></li>
            <li><a tabindex="-1" href="<?php echo base_url("index.php/user/produk")?>"><font color="black", size="2">Barang Saya</font></a></li>
            <li><a tabindex="-1" href="<?php echo base_url("index.php/user/history")?>"><font color="black", size="2">Riwayat Transaksi</font></a></li>
            <li><a tabindex="-1" href="<?php echo base_url("index.php/user/beri_kredit")?>"><font color="black", size="2">Beri Kredit</font></a></li>
            <li><a tabindex="-1" href="<?php echo base_url("index.php/login/out")?>"><font color="black", size="2">Logout</font></a></li>
        </ul>

        <!-- Formsdropdown -->
        <ul id="Formsdropdown" class="dropdown-content dropdown-horizontal-list">
            <li><a tabindex="-1" href="<?php echo base_url("index.php/category/rumah")?>"><font color="black", size="2">Rumah</font></a></li>
        </ul>
    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

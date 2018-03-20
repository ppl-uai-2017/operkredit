<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="red">
            <div class="nav-wrapper">
                <ul class="left">
                    <li><h1 class="logo-wrapper"><a href="<?php echo base_url("")?>" class="brand-logo darken-1">Operkredit</a> <span class="logo-text">Materialize</span></h1></li>
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
                        <a href="<?php echo base_url("")?>" class="black-text">
                            <i class="mdi-action-home"></i>
                            <span>Home</span>
                        </a>
                    </li>

                </ul>

                <ul class="right hide-on-med-and-down">
                    <?php
                    if(!isset($_SESSION['username'])) {
                        ?>
                        <li><a class="modal-trigger" href="#modal1"><font color="black">Login</font> </a>
                        </li>
                        <li><a href="<?php echo base_url("index.php/register")?>"><font color="black">Register</font></a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
                <?php
                if(isset($_SESSION['username'])) {
                    ?>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-menu black-text" href="<?php echo base_url("index.php/login/out")?>">
                                <i class="mdi-action-settings-power"></i>
                                <span>Logout</span>
                            </a>
                        </li>
                    </ul>

                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-menu black-text" href="#!" data-activates="UIElementsdropdown">
                                <i class="mdi-social-notifications-none"></i>
                                <?php
                                if(isset($notif))
                                {
                                    ?>
                                    <span class="new badge">1</span>
                                <?php
                                }
                                else
                                {
                                    ?>
                                    <span>Notifikasi</span>
                                <?php
                                }
                                ?>
                            </a>
                        </li>
                    </ul>

                    <ul id="UIElementsdropdown" class="dropdown-content dropdown-horizontal-list">
                        <li>Belum ada Notifikasi</li>
                    </ul>

                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-menu black-text" href="<?php echo base_url("index.php/user")?>">
                                <i class="mdi-social-person"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                    </ul>

                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-menu black-text" href="<?php echo base_url("index.php/user/produk")?>">
                                <i class="mdi-av-stop"></i>
                                <span>Barang</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-menu black-text" href="<?php echo base_url("index.php/user/history")?>">
                                <i class="mdi-maps-local-mall"></i>
                                <span>Transaksi</span>
                            </a>
                        </li>
                    </ul>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li>
                            <a class="dropdown-menu black-text" href="<?php echo base_url("index.php/user/beri_kredit")?>">
                                <i class="mdi-action-credit-card"></i>
                                <span>Beri Kredit</span>
                            </a>
                        </li>
                    </ul>
                    <?php
                }
                ?>
            </div>
        </nav>


    </div>
    <!-- end header nav-->
</header>
<!-- END HEADER -->

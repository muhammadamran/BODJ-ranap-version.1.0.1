<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md">
        <div class="navbar-header" data-logobg="skin6">
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <div class="navbar-brand">
                <a href="index.php">
                    <b class="logo-icon">
                        <img src="assets/mode/images/logo-icon.png" alt="homepage" class="dark-logo" />
                    </b>
                    <span class="logo-text">
                        <img src="assets/mode/images/logo-text.png" alt="homepage" class="dark-logo" />
                    </span>
                </a>
            </div>
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="ti-more"></i>
                </a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                <li class="nav-item d-none d-md-block">
                    <i class="far fa-clock"></i> &nbsp;<span id='ct' ></span>
                </li>
            </ul>
            <ul class="navbar-nav float-right">
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link" href="javascript:void(0)">
                        <form>
                            <div class="customize-input">
                                <input class="form-control custom-shadow custom-radius border-0 bg-white" type="search" placeholder="Search" aria-label="Search">
                                <i class="form-control-icon" data-feather="search"></i>
                            </div>
                        </form>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <!-- <img src="assets/mode/images/users/profile-pic.jpg" alt="user" class="rounded-circle" width="40"> -->
                        <?php
                        if ($_SESSION['foto']==NULL) { ?>
                            <img src="assets/img/user/user-13.png" alt="user" class="rounded-circle" width="40"/>   
                        <?php }else{ ?>
                            <img src="<?php echo 'assets/img/user/'. $_SESSION['foto'];?>" alt="user" class="rounded-circle" width="40"/>   
                        <?php } ?>
                        <span class="ml-2 d-none d-lg-inline-block">
                        <span>Hello,</span> 
                        <span class="text-dark"><?php echo $_SESSION['nama_lengkap'];?></span> 
                            <i data-feather="chevron-down" class="svg-icon"></i>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                        <a class="dropdown-item" href="index.php?m=profil&s=profil"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>My Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php"><i data-feather="power" class="svg-icon mr-2 ml-1"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
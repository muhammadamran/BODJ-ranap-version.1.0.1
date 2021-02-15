<div class="header">
    <div class="header-left">
        <div class="menu-icon dw dw-menu"></div>
        &nbsp;&nbsp;&nbsp;<span class="micon dw dw-wall-clock1"></span> &nbsp;<span id='ct' ></span>
    </div>
    <div class="header-right">
        <div class="dashboard-setting user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
                    <i class="dw dw-settings2"></i>
                </a>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <?php
                        if ($_SESSION['foto']==NULL) { ?>
                            <img src="assets/img/user/user-13.png" alt="">
                        <?php }else{ ?>
                            <img src="<?= 'assets/img/user/'. $_SESSION['foto'];?>" alt="user" class="rounded-circle" width="40"/>
                        <?php } ?>
                    </span>
                    <span class="user-name">
                        <?= $_SESSION['nama_lengkap']; ?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="index.php?m=MProfil&s=MProfil"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.php">
            <img src="assets/mode/images/logo-icon.png" alt="" class="dark-logo">
            <img src="assets/mode/images/logo-icon.png" alt="" class="light-logo">
            <b style="color: #5269df">BODJ</b><small style="color: #01caf1"><font style="font-size: 10px">Rawat Inap</font></small>
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <br>
                <li>
                    <div class="sidebar-small-cap">Menu</div>
                </li>
                <li class="dropdown <?= empty($_GET['m']) ? 'show' : '' ?>">
                    <a href="index.php" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-time-management"></span><span class="mtext">Beranda</span>
                    </a>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'MDashboard' ? 'show' : '' ?>">
                    <a href="index.php?m=MDashboard&s=MDashboard" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-analytics-11"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <br>
                <li>
                    <div class="sidebar-small-cap">BODJ Rawat Inap</div>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'MInputBODJ' ? 'show' : '' ?>">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-edit2"></span><span class="mtext">Forms BODJ</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index.php?m=MInputBODJ&s=MInputBODJ">Input BODJ</a></li>
                    </ul>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'MPrint' ? 'show' : '' ?>">
                    <a href="index.php?m=MPrint&s=MPrint" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-analytics-5"></span><span class="mtext">Search / Print</span>
                    </a>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'MLaporan' ? 'show' : '' ?>">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon dw dw-analytics-20"></span><span class="mtext">Laporan BODJ</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="index.php?m=MLaporan&s=MLaporan">Riwayat BODJ Pasien</a></li>
                    </ul>
                </li>
                <br>
                <li>
                    <div class="sidebar-small-cap">Pelayanan Medis</div>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'ARawatJalan' ? 'show' : '' ?>">
                    <a href="index.php?m=ARawatJalan&s=ARawatJalan" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-stethoscope"></span><span class="mtext">Rawat Jalan</span>
                    </a>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'ARawatInap' ? 'show' : '' ?>">
                    <a href="index.php?m=ARawatInap&s=ARawatInap" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-hospital"></span><span class="mtext">Rawat Inap</span>
                    </a>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'AHemodialisa' ? 'show' : '' ?>">
                    <a href="index.php?m=AHemodialisa&s=AHemodialisa" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-fuel"></span><span class="mtext">Hemodialisa</span>
                    </a>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'ABedahCentral' ? 'show' : '' ?>">
                    <a href="index.php?m=ABedahCentral&s=ABedahCentral" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-push-pin-1"></span><span class="mtext">Bedah Central (O.K)</span>
                    </a>
                </li>
                <!-- br>
                <li>
                    <div class="sidebar-small-cap">Penunjang Medis</div>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'BFarmasi' ? 'show' : '' ?>">
                    <a href="index.php?m=BFarmasi&s=BFarmasi" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-syringe"></span><span class="mtext">Farmasi</span>
                    </a>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'BLab' ? 'show' : '' ?>">
                    <a href="index.php?m=BLab&s=BLab" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-billboard"></span><span class="mtext">Laboratorium</span>
                    </a>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'BRadiologi' ? 'show' : '' ?>">
                    <a href="index.php?m=BRadiologi&s=BRadiologi" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-target"></span><span class="mtext">Radiologi</span>
                    </a>
                </li> -->
                <br>
                <li>
                    <div class="sidebar-small-cap">Tentang Aplikasi</div>
                </li>
                <li class="dropdown <?= !empty($_GET['m']) && $_GET['m'] == 'Pabout' ? 'show' : '' ?>">
                    <a href="index.php?m=Pabout&s=Pabout" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-question"></span><span class="mtext">BODJ Rawat Inap</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>
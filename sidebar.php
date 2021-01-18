<aside class="left-sidebar" data-sidebarbg="skin6">
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item <?= empty($_GET['m']) ? 'selected' : '' ?>">
                    <a class="sidebar-link sidebar-link" href="index.php" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap">
                    <span class="hide-menu">Applications</span>
                </li>
                <li class="sidebar-item <?= !empty($_GET['m']) && $_GET['m'] == 'datapasien' ? 'selected' : '' ?>">
                    <a class="sidebar-link" href="index.php?m=datapasien&s=datapasien" aria-expanded="false">
                        <i data-feather="tag" class="feather-icon"></i>
                        <span class="hide-menu">Data Pasien</span>
                    </a>
                </li>
                <li class="list-divider"></li>
                <li class="nav-small-cap">
                    <span class="hide-menu">Components</span>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">Forms </span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item <?= !empty($_GET['m']) && $_GET['m'] == 'forms' ? 'active' : '' ?>">
                            <a href="index.php?m=forms&s=forms" class="sidebar-link">
                            <span class="hide-menu"> Input BODJ</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
                        <i data-feather="bar-chart" class="feather-icon"></i>
                        <span class="hide-menu">Laporan</span>
                    </a>
                    <ul aria-expanded="false" class="collapse  first-level base-level-line">
                        <li class="sidebar-item <?= !empty($_GET['m']) && $_GET['m'] == 'soapreport' ? 'active' : '' ?>">
                            <a href="index.php?m=soapreport&s=soapreport" class="sidebar-link">
                                <span class="hide-menu"> SOAP Count Per-Pasien</span>
                            </a>
                        </li>
                        <li class="sidebar-item <?= !empty($_GET['m']) && $_GET['m'] == 'soapriwayat' ? 'active' : '' ?>">
                            <a href="index.php?m=soapriwayat&s=soapriwayat" class="sidebar-link">
                                <span class="hide-menu"> Riwayat SOAP Pasien </span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="list-divider"></li>
                <?php if($_SESSION['NIK']=='3281705') { ?>
                <li class="nav-small-cap">
                    <span class="hide-menu">Administrator</span>
                </li>
                <li class="sidebar-item <?= !empty($_GET['m']) && $_GET['m'] == 'pengguna' ? 'selected' : '' ?>">
                    <a class="sidebar-link" href="index.php?m=pengguna&s=pengguna" aria-expanded="false">
                        <i data-feather="tag" class="feather-icon"></i>
                        <span class="hide-menu">Data Pengguna</span>
                    </a>
                </li>
                <?php } ?>
                <li class="list-divider"></li>
            </ul>
        </nav>
    </div>
</aside>
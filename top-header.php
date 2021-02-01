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
        <div class="user-notification">
            <div class="dropdown">
                <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                    <i class="icon-copy dw dw-notification"></i>
                    <span class="badge notification-active"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="notification-list mx-h-350 customscroll">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="https://www.smkn2terbanggibesar.sch.id/wp-content/uploads/2018/06/avatar.png" alt="">
                                    <h3><?php echo $_SESSION['nama_lengkap'];?></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/vendors/images/photo1.jpg" alt="">
                                    <h3>Lea R. Frith</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/vendors/images/photo2.jpg" alt="">
                                    <h3>Erik L. Richards</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/vendors/images/photo3.jpg" alt="">
                                    <h3>John Doe</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/vendors/images/photo4.jpg" alt="">
                                    <h3>Renee I. Hansen</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/vendors/images/img.jpg" alt="">
                                    <h3>Vicki M. Coleman</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <?php
                        if ($_SESSION['foto']==NULL) { ?>
                            <img src="https://www.smkn2terbanggibesar.sch.id/wp-content/uploads/2018/06/avatar.png" alt="">
                        <?php }else{ ?>
                            <img src="<?php echo 'assets/img/user/'. $_SESSION['foto'];?>" alt="user" class="rounded-circle" width="40"/>
                        <?php } ?>
                    </span>
                    <span class="user-name">
                        <?= $_SESSION['nama_lengkap']; ?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="profile.html"><i class="dw dw-settings2"></i> Setting</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                    <a class="dropdown-item" href="logout.php"><i class="dw dw-logout"></i> Log Out</a>
                </div>
            </div>
        </div>
    </div>
</div>
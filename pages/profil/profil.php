        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Profil</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.php" class="text-muted">Home</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Profil</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="col-5 align-self-center">
                        <div class="customize-input float-right">
                            <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                                <option selected>2021</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4 text-center mb-4">
                                        <?php
                                        if ($_SESSION['foto']==NULL) { ?>
                                            <img src="assets/img/user/user-13.png"  alt="image" class="rounded-circle" width="290"/>   
                                        <?php }else{ ?>
                                            <img src="<?php echo 'assets/img/user/'. $_SESSION['foto'];?>"  alt="image" class="rounded-circle" width="290"/>   
                                        <?php } ?>
                                        <p class="mt-3 mb-0"></p>
                                        <a href="index.php?m=profil&s=profil_edit&id=<?= $_SESSION['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i> Edit Profil</a>
                                        <a href="index.php?m=profil&s=profil_password&id=<?= $_SESSION['id'] ?>" class="btn btn-sm btn-secondary"><i class="fa fas fa-lock"></i> Ganti Password</a>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active show" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"aria-controls="v-pills-home" aria-selected="true">
                                                <i class="mdi mdi-home-variant d-lg-none d-block mr-1"></i>
                                                <span class="d-none d-lg-block">Home</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="tab-content" id="v-pills-tabContent">
                                            <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                <label><b>NIP</b>: <?= $_SESSION['NIK']; ?></label> | 
                                                <label><b>Nama Lengkap</b>: <?= $_SESSION['nama_lengkap']; ?></label><br>
                                                <label><b>Tempat Lahir</b>: <?= $_SESSION['tempat_lahir']; ?></label> | 
                                                <label><b>Tanggal Lahir</b>: <?= $_SESSION['tgl_lahir']; ?></label><br>
                                                <label><b>Email</b>: <?= $_SESSION['email']; ?></label><br>
                                                <label><b>Agama</b>: <?= $_SESSION['agama']; ?></label><br>
                                                <label><b>Jenis Kelamin</b>: <?= $_SESSION['jenis_kelamin']; ?></label><br>
                                                <label><b>Status Pernikahan</b>: <?= $_SESSION['status_pernikahan']; ?></label><br>
                                                <label><b>Status Pegawai</b>: <?= $_SESSION['status_pegawai']; ?></label><br>
                                                <label><b>Jabatan</b>: <?= $_SESSION['jabatan']; ?></label><br>
                                                <label><b>Alamat</b>: <?= $_SESSION['alamat']; ?></label><br>
                                                <label><b>No. Telepon</b>: <?= $_SESSION['telepon']; ?></label><br>
                                                <label><b>Hak Akses</b>: <?= $_SESSION['role']; ?></label><br>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center text-muted">
                All Rights Reserved by Adminmart. Designed and Developed by <a
                href="https://wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
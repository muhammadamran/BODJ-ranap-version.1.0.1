<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h4>Profile</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo" align="center">
                            <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <?php
                            if ($_SESSION['foto']==NULL) { ?>
                                <img id="image" src="assets/img/user/user-13.png" alt="Picture" class="avatar-photo"/>   
                            <?php }else{ ?>
                                <img id="image" src="<?= 'assets/img/user/'. $_SESSION['foto'];?>" alt="Picture" class="avatar-photo"/>   
                            <?php } ?>
                            
                            <?php 
                            $sesiid= $_SESSION['id'];
                            $data = $db->query("SELECT * FROM tb_user WHERE id='$sesiid'");
                            $row = $data->fetch_assoc();
                            ?>
                            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body pd-5">
                                            <form class="form-horizontal form-bordered" action="pages/MProfile/MProfile_proses.php?aksi=foto_profil&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                                                <div class="img-container">
                                                <br>
                                                    <?php
                                                    if ($row['foto']==NULL) { ?>
                                                        <img id="image" src="assets/img/user/user-13.png" alt="Picture" class="lingkaran-detail" width="40"/>   
                                                    <?php }else{ ?>
                                                        <img id="image" src="<?= 'assets/img/user/'. $row['foto'];?>" alt="Picture" class="lingkaran-detail" width="40"/>   
                                                    <?php } ?>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <label class="col-lg-4 col-form-label">Upload Foto Profil</label>
                                                    <div class="col-lg-8">
                                                        <div class="input-group">
                                                            <input type="hidden" class="form-control" name="id" value="<?= $row['id'] ?>"/>
                                                            <input type="file" class="form-control" name="foto"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Upload</button>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0"><?= $row['nama_lengkap'];?></h5>
                        <p class="text-center text-muted font-14"><?= $row['NIK'];?></p>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Kontak Informasi</h5>
                            <ul>
                                <li>
                                    <span>Tempat / Tanggal Lahir:</span>
                                    <?= $row['tempat_lahir'];?> / <?= $row['tgl_lahir'];?>
                                </li>
                                <li>
                                    <span>Agama:</span>
                                    <?= $row['agama'];?>
                                </li>
                                <li>
                                    <span>Status Pegawai:</span>
                                    <?= $row['status_pegawai'];?>
                                </li>
                                <li>
                                    <span>Jabatan:</span>
                                    <?= $row['jabatan'];?>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <?= $row['email'];?>
                                </li>
                                <li>
                                    <span>Telepon:</span>
                                    <?= $row['telepon'];?>
                                </li>
                                <li>
                                    <span>Jenis Kelamin:</span>
                                    <?= $row['jenis_kelamin'];?>
                                </li>
                                <li>
                                    <span>Alamat:</span>
                                    <?= $row['alamat'];?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <div class="tab height-100-p">
                                <ul class="nav nav-tabs customtab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">My Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#tasks" role="tab">Update Data Diri</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#setting" role="tab">Update Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <!-- Timeline Tab start -->
                                    <div class="tab-pane fade show active" id="timeline" role="tabpanel">
                                        <div class="pd-20">
                                            <div class="profile-timeline">
                                                <div class="profile-timeline-list">
                                                    <ul>
                                                        <?php 
                                                        $sesi= $_SESSION['nama_lengkap'];
                                                        $data = $db->query("SELECT a.kd_soap,a.no_rm,a.nama_pasien,a.kelas,a.dokter_jaga,
                                                            b.kd_soap,b.status,b.date_add
                                                            FROM tb_soap a JOIN tb_soaplog b
                                                            ON a.kd_soap=b.kd_soap
                                                            WHERE dokter_jaga='$sesi'
                                                            ORDER BY b.id DESC LIMIT 5", 0);
                                                        while($row_1 = $data->fetch_assoc()) {
                                                            ?>
                                                        <?php if ($row_1['status']=='0') { ?>
                                                        <li>
                                                            <div class="date"><?= tanggal_indo(date('Y-m-d',strtotime($row_1['date_add']))); ?></div>
                                                            <div class="task-name"><i class="icon-copy ion-clipboard"></i> SOAP Baru dari <?= $row_1['dokter_jaga']; ?></div>
                                                            <p>Dengan Pasien <br> <?= $row_1['no_rm']; ?>.</p>
                                                            <div class="task-time"><?= date('H:i',strtotime($row_1['date_add'])); ?> WIB</div>
                                                        </li>
                                                        <?php }elseif ($row_1['status']=='1') { ?>
                                                        <li>
                                                            <div class="date"><?= tanggal_indo(date('Y-m-d',strtotime($row_1['date_add']))); ?></div>
                                                            <div class="task-name"><i class="icon-copy ion-loop"></i> Update SOAP dari <?= $row_1['dokter_jaga']; ?></div>
                                                            <p>Dengan Pasien <br> <?= $row_1['no_rm']; ?>.</p>
                                                            <div class="task-time"><?= date('H:i',strtotime($row_1['date_add'])); ?> WIB</div>
                                                        </li>
                                                        <?php }elseif ($row_1['status']=='2') { ?>
                                                        <li>
                                                            <div class="date"><?= tanggal_indo(date('Y-m-d',strtotime($row_1['date_add']))); ?></div>
                                                            <div class="task-name"><i class="icon-copy ion-images"></i> Update Filr LAB dari <?= $row_1['dokter_jaga']; ?></div>
                                                            <p>Dengan Pasien <br> <?= $row_1['no_rm']; ?>.</p>
                                                            <div class="task-time"><?= date('H:i',strtotime($row_1['date_add'])); ?> WIB</div>
                                                        </li>
                                                        <?php }elseif ($row_1['status']=='3') { ?>
                                                        <li>
                                                            <div class="date"><?= tanggal_indo(date('Y-m-d',strtotime($row_1['date_add']))); ?></div>
                                                            <div class="task-name"><i class="icon-copy ion-images"></i> Update Filr Rontgent dari <?= $row_1['dokter_jaga']; ?></div>
                                                            <p>Dengan Pasien <br> <?= $row_1['no_rm']; ?>.</p>
                                                            <div class="task-time"><?= date('H:i',strtotime($row_1['date_add'])); ?> WIB</div>
                                                        </li>
                                                        <?php }elseif ($row_1['status']=='4') { ?>
                                                        <li>
                                                            <div class="date"><?= tanggal_indo(date('Y-m-d',strtotime($row_1['date_add']))); ?></div>
                                                            <div class="task-name"><i class="icon-copy ion-images"></i> Update Filr EKG dari <?= $row_1['dokter_jaga']; ?></div>
                                                            <p>Dengan Pasien <br> <?= $row_1['no_rm']; ?>.</p>
                                                            <div class="task-time"><?= date('H:i',strtotime($row_1['date_add'])); ?> WIB</div>
                                                        </li>
                                                        <?php } } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Timeline Tab End -->
                                    <!-- Tasks Tab start -->
                                    <div class="tab-pane fade" id="tasks" role="tabpanel">
                                        <div class="pd-20 profile-task-wrap">
                                            <div class="container pd-0">
                                                <!-- Open Task start -->
                                                <form action="pages/MProfil/MProfil_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Foto Profil</label>
                                                        <div class="col-lg-8" align="center">
                                                            <?php
                                                            if ($row['foto']==NULL) { ?>
                                                                <img src="assets/img/user/user-13.png" alt="user" class="lingkaran-detail" width="40"/>   
                                                            <?php }else{ ?>
                                                                <img src="<?= 'assets/img/user/'. $row['foto'];?>" alt="user" class="lingkaran-detail" width="40"/>   
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Username</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" value="<?= $row['NIK'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">NIP</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="NIK" value="<?= $row['NIK'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Nama Lengkap</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="nama_lengkap" value="<?= $row['nama_lengkap'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Tempat Lahir & Tanggal Lahir</label>
                                                        <div class="col-lg-4">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="tempat_lahir" value="<?= $row['tempat_lahir'] ?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="input-group">
                                                                <input type="date" class="form-control" name="tgl_lahir" value="<?= $row['tgl_lahir'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Agama</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="agama" value="<?= $row['agama'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Jenis Kelamin</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <select class="form-control" name="jenis_kelamin">
                                                                    <option value="<?= $row['jenis_kelamin'] ?>"><?= $row['jenis_kelamin'] ?></option>
                                                                    <option value="">Pilih Jenis Kelamin</option>
                                                                    <option value="Pria">Pria</option>
                                                                    <option value="Wanita">Wanita</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Status Pernikahan</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <select class="form-control" name="status_pernikahan">
                                                                    <option value="<?= $row['status_pernikahan'] ?>"><?= $row['status_pernikahan'] ?></option>
                                                                    <option value="">Pilih Status Pernikahan</option>
                                                                    <option value="Belum Menikah">Belum Menikah</option>
                                                                    <option value="Menikah">Menikah</option>
                                                                    <option value="Duda">Duda</option>
                                                                    <option value="Janda">Janda</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Status Pegawai</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <select class="form-control" name="status_pegawai">
                                                                    <option value="<?= $row['status_pegawai'] ?>"><?= $row['status_pegawai'] ?></option>
                                                                    <option value="">Pilih Status Pegawai</option>
                                                                    <option value="Aktif">Aktif</option>
                                                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                                                    <option value="Cuti">Cuti</option>
                                                                    <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                                                                    <option value="Lain-lain">Lain-lain</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Jabatan</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="jabatan" value="<?= $row['jabatan'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Email</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="email" class="form-control" name="email" value="<?= $row['email'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Alamat</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <textarea type="text" class="form-control" name="alamat"><?= $row['alamat'] ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Telepon</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="telepon" value="<?= $row['telepon'] ?>"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <label class="col-lg-4 col-form-label">Hak Akses</label>
                                                        <div class="col-lg-8">
                                                            <div class="input-group">
                                                                <select class="form-control" name="role" required="required">
                                                                    <option value="<?= $row['role'] ?>"><?= $row['role'] ?></option>
                                                                    <option value="">Pilih Hak Akses</option>
                                                                    <option value="dokter">dokter</option>
                                                                    <option value="superadmin">superadmin</option>
                                                                    <option value="admin">admin</option>
                                                                    <option value="user">user</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Tasks Tab End -->
                                    <!-- Setting Tab start -->
                                    <div class="tab-pane fade height-100-p" id="setting" role="tabpanel">
                                        <div class="profile-setting">
                                            <div class="pd-20 profile-task-wrap">
                                                <div class="container pd-0">
                                                    <form action="pages/MProfile/MProfile_proses.php?aksi=update_password&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <label class="col-lg-4 col-form-label">New Password</label>
                                                            <div class="col-lg-8">
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control" placeholder="New Password..." required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-lg-4 col-form-label">Retype New Password</label>
                                                            <div class="col-lg-8">
                                                                <div class="input-group">
                                                                    <input type="password" class="form-control" name="password"  placeholder="Retype New Password..." required/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary">Update Password</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Setting Tab End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
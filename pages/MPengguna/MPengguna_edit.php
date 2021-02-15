<?php
$data = $db->query('SELECT * FROM tb_user WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-edit2"></span> Update Pengguna/Dokter BODJ</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Update Pengguna/Dokter BODJ</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Silahkan lakukan Update Data Pengguna/Dokter BODJ.</label> <br><hr>
                                    <label>Klik button <button type="button" class="btn btn-primary">Update</button> untuk mengubah data Pengguna/Dokter BODJ</label>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="mode/vendors/images/02.png">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 text-left">
                    <button type="button" class="btn btn-dark" onclick="history.go(-1)"><i class="icon-copy ion-arrow-left-a"></i></button>
                </div>
            </div>
            <br>
            <div class="card-box mb-30">
                <div class="responsive">
                    <div class="pd-20">
                        <form action="pages/MPengguna/MPengguna_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Foto Profil</label>
                                <div class="col-lg-8" align="center">
                                    <?php
                                    if ($_SESSION['foto']==NULL) { ?>
                                        <img src="assets/img/user/user-13.png" alt="user" class="lingkaran-detail" width="40"/>   
                                    <?php }else{ ?>
                                        <img src="<?php echo 'assets/img/user/'. $_SESSION['foto'];?>" alt="user" class="lingkaran-detail" width="40"/>   
                                    <?php } ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Username</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="<?= $row['username'] ?>"/>
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
        </div>
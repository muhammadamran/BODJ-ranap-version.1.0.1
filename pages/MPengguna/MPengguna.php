<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-user"></span> Input Pengguna/Dokter BODJ</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input Pengguna/Dokter BODJ</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Berikut merupakan inputan Pengguna/Dokter BODJ.</label> <br><hr>
                                    <label>Klik icon <button type="button" class="btn btn-outline-primary"><i class="icon-copy ion-plus-circled"></i></button> untuk menambahkan data Pengguna/Dokter BODJ</label><br>
                                    <label>Klik icon <button type="button" class="btn btn-dark"><i class="fa fa-eye"></i></button> untuk melihat data Pengguna/Dokter BODJ</label><br>
                                    <label>Klik icon <button type="button" class="btn btn-primary"><i class="icon-copy ion-edit"></i></button> untuk mengupdate data Pengguna/Dokter BODJ</label><br>
                                    <label>Klik icon <button type="button" class="btn btn-secondary"><i class="fa fa-lock"></i></button> untuk mengupdate password Pengguna/Dokter BODJ</label><br>
                                    <label>Klik icon <button type="button" class="btn btn-danger"><i class="fa fas fa-trash"></i></button> untuk menghapus data Pengguna/Dokter BODJ</label>
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="mode/vendors/images/02.png">
                    </div>
                </div>
            </div>
            <div class="card-box mb-30">
                <div class="pd-20">
                    <a href="index.php?m=MPengguna&s=MPengguna_add" class="btn btn-outline-primary">
                        <i class="icon-copy ion-plus-circled"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th class="text-nowrap">NIP</th>
                                    <th class="text-nowrap">Nama Lengkap</th>
                                    <th class="text-nowrap">Jabatan</th>
                                    <th class="text-nowrap">Status Pegawai</th>
                                    <th class="text-nowrap">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $data = $db->query("SELECT * FROM tb_user ORDER BY id DESC", 0);
                                while($row = $data->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><?= $row['NIK'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['NIK'] ?></td>
                                        <td><?= $row['nama_lengkap'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_lengkap'] ?></td>
                                        <td><?= $row['jabatan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['jabatan'] ?></td>
                                        <td><?= $row['status_pegawai'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['status_pegawai'] ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#detail<?= $row['id']?>"><span class="btn btn-dark btn-sm"><i class="fa fa-eye"></i> </span></a>
                                            <a href="index.php?m=MPengguna&s=MPengguna_edit&id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i class="fa fas fa-edit"></i></a>
                                            <a href="index.php?m=MPengguna&s=MPengguna_password&id=<?= $row['id'] ?>" class="btn btn-sm btn-secondary"><i class="fa fas fa-lock"></i></a>
                                            <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-sm btn-danger" style="color:#fff;cursor:pointer"><i class="fa fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <!-- DETAILS -->
                                    <div class="modal fade" id="detail<?= $row['id']?>" role="dialog">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <label class="modal-title">Lihat Data Pengguna/Dokter BODJ </label>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal form-bordered" action="pages/forms/forms_file.php" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-12" align="center">
                                                                <?php
                                                                if ($_SESSION['foto']==NULL) { ?>
                                                                    <img src="assets/img/user/user-13.png" alt="user" class="lingkaran-detail" width="40"/>   
                                                                <?php }else{ ?>
                                                                    <img src="<?= 'assets/img/user/'. $_SESSION['foto'];?>" alt="user" class="lingkaran-detail" width="40"/>   
                                                                <?php } ?>
                                                            </div>
                                                        </div>
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
                                                            <!-- <button type="submi" name="updatefile" class="btn btn-block btn-primary">Update</button> -->
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END DETAILS -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function deleteData(id) {
                var r = confirm("Anda yakin ingin menghapus ini");
                if (r == true) {
                    location.href = "pages/MPengguna/MPengguna_proses.php?aksi=hapus&id=" + id;
                }
            }
        </script>
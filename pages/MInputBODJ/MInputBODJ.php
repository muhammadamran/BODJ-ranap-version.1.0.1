<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-edit2"></span> Input Form BODJ</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input Form BODJ</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Berikut merupakan inputan SOAP dari BODJ Rawat Inap yang dilakukan oleh masing-masing dokter pada pasien Rawat Inap.</label> <br><hr>
                                    <label>Klik icon <button type="button" class="btn btn-outline-primary"><i class="icon-copy ion-plus-circled"></i></button> untuk menambahkan data SOAP Rawat Inap</label>
                                    <label>Klik icon <button type="button" class="btn btn-light"><i class="icon-copy ion-edit"></i></button> untuk mengupdate data SOAP Rawat Inap</label>
                                    <label>Klik icon <button type="button" class="btn btn-warning"><i class="icon-copy ion-android-image"></i> <b>LAB</b></button> untuk mengupload file <b>LAB</b> Pasien</label>
                                    <label>Klik icon <button type="button" class="btn btn-warning"><i class="icon-copy ion-android-image"></i> <b>Rontgent</b></button> untuk mengupload file <b>Rontgen</b> Pasien</label>
                                    <label>Klik icon <button type="button" class="btn btn-warning"><i class="icon-copy ion-android-image"></i> <b>EKG</b></button> untuk mengupload file <b>EKG</b> Pasien</label>
                                    <label>Klik icon <button type="button" class="btn btn-danger"><i class="icon-copy ion-trash-b"></i></button> untuk menghapus data SOAP Rawat Inap</label>
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
                    <a href="index.php?m=MInputBODJ&s=MInputBODJ_add" class="btn btn-outline-primary">
                        <i class="icon-copy ion-plus-circled"></i>
                    </a>
                </div>
                <div class="table-responsive">
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">No. RM | Nama Pasien</th>
                                    <th>Tanggal Jaga</th>
                                    <th>Dokter Jaga</th>
                                    <th>Kelas Pelayanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DATA -->
                                <?php 
                                $sesi= $_SESSION['nama_lengkap'];
                                $data = $db->query("SELECT * FROM tb_soap WHERE dokter_jaga='$sesi' AND no_rm !='' ORDER BY tgl_jaga ASC", 0);
                                while($row = $data->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                    <?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detailsoap<?= $row['id']?>">Data SOAP</a>
                                                    <a class="dropdown-item" href="#">Resume Perawatan</a>
                                                    <a class="dropdown-item" href="#">Riwayat Perawatan</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $row['tgl_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : tanggal_indo($row['tgl_jaga']) ?></td>
                                        <td><?= $row['dokter_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['dokter_jaga'] ?></td>
                                        <td><?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
                                        <td>
                                            <a href="#" data-toggle="modal" data-target="#updatesoap<?= $row['id']?>"><span class="btn btn-light btn-sm"><i class="icon-copy ion-edit"></i> </span></a>
                                            <a href="#" data-toggle="modal" data-target="#updatefilelab<?= $row['id']?>"><span class="btn btn-warning btn-sm"><i class="icon-copy ion-android-image"></i> <b>LAB</b> </span></a>
                                            <a href="#" data-toggle="modal" data-target="#updatefilerontgen<?= $row['id']?>"><span class="btn btn-warning btn-sm"><i class="icon-copy ion-android-image"></i> <b>Rontgent</b> </span></a>
                                            <a href="#" data-toggle="modal" data-target="#updatefileekg<?= $row['id']?>"><span class="btn btn-warning btn-sm"><i class="icon-copy ion-android-image"></i> <b>EKG</b> </span></a>
                                            <a onclick="deleteData(<?= $row['id'] ?>)" class="btn btn-danger btn-sm" style="color:#fff;cursor:pointer"><i class="icon-copy ion-trash-b"></i></a>
                                        </td>
                                    </tr>
                                    <!-- DETAIL SOAP & KETERANGAN -->
                                    <div class="modal fade" id="detailsoap<?= $row['id']?>" role="dialog">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <label class="modal-title">Lihat Data Buku Operan Dokter Jaga Rawat Inap <b><?= $row['nama_pasien']; ?></b></label>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <p><b>Identitas Pasien</b></p>
                                                            <p>No.Rekam Medis: <?= $row['no_rm']; ?></p>
                                                            <p>Nama Pasien: <?= $row['nama_pasien']; ?></p>
                                                            <p>Kelas: <?= $row['nama_pasien']; ?></p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p><b>Dokter</b></p>
                                                            <p>Tanggal Dokter Jaga: <?= $row['tgl_jaga']; ?></p>
                                                            <p>Dokter: <?= $row['dokter_jaga']; ?></p>
                                                            <p>DPJP: <?= $row['DPJP']; ?></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div align="center">
                                                        <label><b>SOAP</b></label>
                                                    </div>
                                                    <hr>
                                                    <div align="center">
                                                        <h5>Subject</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <textarea type="text" class="ckeditor" id="ckedtor" name="subject" placeholder="Subject..." readonly><?php echo $row['subject']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div align="center">
                                                        <h5>Object</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <textarea type="text" class="ckeditor" id="ckedtor" name="object" placeholder="Object..." readonly><?php echo $row['object']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div align="center">
                                                        <h5>Assesment</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <textarea type="text" class="ckeditor" id="ckedtor" name="assesment" placeholder="Assesment..." readonly><?php echo $row['assesment']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div align="center">
                                                        <h5>Plan</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <label class="col-lg-12 col-form-label">Berkas Digital Sebelumnya</label>
                                                        <div class="col-lg-12">
                                                            <?php
                                                            if ($row['berkas']==NULL) { ?>
                                                                <div align="center">
                                                                    <img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
                                                                </div>
                                                            <?php }else{ ?>
                                                                <div align="center">
                                                                    <img src="<?php echo 'assets/uploads/object/'. $row['berkas'];?>" class="lingkaran" alt="" />
                                                                </div>   
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <textarea type="text" class="ckeditor" id="ckedtor" name="plan" placeholder="Plan..." readonly><?php echo $row['plan']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div align="center">
                                                        <h5>Keterangan</h5>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="input-group">
                                                                <textarea type="text" class="ckeditor" id="ckedtor" name="keterangan" placeholder="Keterangan..." readonly><?php echo $row['keterangan']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END DETAIL SOAP & KETERANGAN -->
                                    <!-- DETAIL SOAP & KETERANGAN -->
                                    <div class="modal fade" id="updatefile<?= $row['id']?>" role="dialog">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <label class="modal-title">Update File</label>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal form-bordered" action="pages/MInputBODJ/MInputBODJ_file.php" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <label class="col-lg-4 col-form-label">Upload Berkas Digital Sebelumnya</label>
                                                            <div class="col-lg-8">
                                                                <?php
                                                                if ($row['berkas']==NULL) { ?>
                                                                    <div align="center">
                                                                        <b>Tidak Ada File</b>
                                                                    </div>
                                                                <?php }else{ ?>
                                                                    <img src="<?php echo 'assets/uploads/object/'. $row['berkas'];?>" class="lingkaran" alt="" />   
                                                                <?php } ?>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-lg-4 col-form-label">Upload Berkas Digital(Optional)</label>
                                                            <div class="col-lg-8">
                                                                <div class="input-group">
                                                                    <input type="hidden" class="form-control" name="id" value="<?= $row['id'] ?>"/>
                                                                    <input type="file" class="form-control" name="berkas" value="<?= $row['berkas'] ?>"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="form-group">
                                                            <button type="submit" name="updatefile" class="btn btn-block btn-primary">Update</button>
                                                            <button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Tutup</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END UPDATE FILE -->
                                <?php } ?>
                                <!-- END DATA -->
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
                    location.href = "pages/MInputBODJ/MInputBODJ_proses.php?aksi=hapus&id=" + id;
                }
            }
        </script>
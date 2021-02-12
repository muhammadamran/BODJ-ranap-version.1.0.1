<?php
$data = $db->query('SELECT * FROM tb_soap WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>
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
                                    <label>Silahkan lakukan inputan SOAP dari BODJ Rawat Inap yang dilakukan oleh masing-masing dokter pada pasien Rawat Inap.</label> <br><hr>
                                    <label>Klik button <button type="button" class="btn btn-primary">Simpan</button> untuk menambahkan data BODJ Rawat Inap</label>
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
                        <form action="pages/MInputBODJ/MInputBODJ_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Dokter Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="dokter_jaga" value="<?= $row['dokter_jaga'];?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="text" class="form-control" name="date_created" value="<?= $row['date_created'];?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="hidden" name="kd_soap" value="<?= $row['kd_soap']; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Tanggal Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="tgl_jaga" placeholder="Tanggal Jaga..." value="<?= $row['tgl_jaga'];?>" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">No. Rekam Medis / Nama Pasien</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="custom-select2 form-control" name="no_rm" style="width: 100%; height: 38px;" required="required">
                                            <optgroup label="Pilih Data No.Rekam Medis / Nama Pasien">
                                                <option value="<?= $row['no_rm'] ?>"><?= $row['no_rm'] ?></option>
                                                <?php
                                                $result_a = pg_query($pg, "SELECT * FROM pasien_m ORDER BY create_time DESC LIMIT 5000");
                                                while ($row_a = pg_fetch_assoc($result_a)) {
                                                    ?>
                                                    <option value="<?= $row_a['no_rekam_medik'] ?> | <?= $row_a['namadepan'] ?> <?= $row_a['nama_pasien'] ?>"><?= $row_a['no_rekam_medik'] ?> | <?= $row_a['namadepan'] ?> <?= $row_a['nama_pasien'] ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Kelas</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="custom-select2 form-control" name="kelas" style="width: 100%; height: 38px;" required="required">
                                            <optgroup label="Pilih Kelas Pelayanan">
                                                <option value="<?= $row['kelas'] ?>"><?= $row['kelas'] ?></option>
                                                <?php
                                                $result_b = pg_query($pg, "SELECT * FROM kelaspelayanan_m");
                                                while ($row_b = pg_fetch_assoc($result_b)) {
                                                    ?>
                                                    <option value="<?= $row_b['kelaspelayanan_nama'] ?>"><?= $row_b['kelaspelayanan_nama'] ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">DPJP</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="custom-select2 form-control" name="DPJP" style="width: 100%; height: 38px;" required="required">
                                            <optgroup label="Pilih DPJP">
                                                <option value="<?= $row['DPJP'] ?>"><?= $row['DPJP'] ?></option>
                                                <?php
                                                $data_c = $db->query("SELECT * FROM tb_dpjp WHERE status='Aktif'", 0);
                                                while($row_c = $data_c->fetch_assoc()) {
                                                    ?>
                                                    <option value="<?= $row_c['gelar_depan'] ?><?= $row_c['nama_dpjp'] ?><?= $row_c['gelar_belakang'] ?>"><?= $row_c['gelar_depan'] ?><?= $row_c['nama_dpjp'] ?><?= $row_c['gelar_belakang'] ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h5>Subject</h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="subject" placeholder="Subject..." required="required"><?= $row['subject'] ?></textarea>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="object" placeholder="Object..." required="required"><?= $row['object'] ?></textarea>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="assesment" placeholder="Assesment..." required="required"><?= $row['assesment'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h5>Plan</h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="input-group">
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="plan" placeholder="Plan..." required="required"><?= $row['plan'] ?></textarea>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="keterangan" placeholder="Keterangan..." required="required"><?= $row['keterangan'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h5>Upload Berkas LAB, Rontgent & EKG Pasien</h5>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label>LAB</label>
                                    <div class="input-group">
                                        <?php
                                        if ($row['berkas']==NULL) { ?>
                                            <div align="center">
                                                <img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
                                            </div>
                                        <?php }else{ ?>
                                            <div align="center">
                                                <img src="<?= 'assets/uploads/object/'. $row['berkas'];?>" class="lingkaran" alt="" />
                                            </div>   
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>Rontgent</label>
                                    <div class="input-group">
                                        <?php
                                        if ($row['rontgent']==NULL) { ?>
                                            <div align="center">
                                                <img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
                                            </div>
                                        <?php }else{ ?>
                                            <div align="center">
                                                <img src="<?= 'assets/uploads/object/'. $row['rontgent'];?>" class="lingkaran" alt="" />
                                            </div>   
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label>EKG</label>
                                    <div class="input-group">
                                        <?php
                                        if ($row['ekg']==NULL) { ?>
                                            <div align="center">
                                                <img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
                                            </div>
                                        <?php }else{ ?>
                                            <div align="center">
                                                <img src="<?= 'assets/uploads/object/'. $row['ekg'];?>" class="lingkaran" alt="" />
                                            </div>   
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-dark" onclick="history.go(-1)">Kembali</button>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
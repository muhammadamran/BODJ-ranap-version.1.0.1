<?php
$data2 = $db->query('SELECT * FROM tb_soap WHERE no_rm="'.$_GET['no_rm'].'"');
$row2 = $data2->fetch_assoc()
?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-edit2"></span> Riwayat Pasien a.n <?= $row2['no_rm']; ?></h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Riwayat Pasien a.n <?= $row2['no_rm']; ?></li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Lihat & Scroll Down untuk melihat Riwayat Pasien a.n <?= $row2['no_rm']; ?> yang diinput oleh Dokter Jaga Rawat Inap sebelumnya.</label> <br><hr>
                                    <label>Klik icon <button type="button" class="btn btn-dark"><i class="icon-copy fi-print"></i></button> untuk print berkas Riwayat Pasien a.n <?= $row2['no_rm']; ?></label><br>
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
                    <a href="print_riwayat.php?no_rm=<?= $row2['no_rm']; ?>" target="_blank">
                        <span type="submit" class="btn btn-dark"><i class="icon-copy fi-print"></i> Print Riwayat</span>
                    </a>
                </div>
            </div>
            <br>
            <div class="card-box mb-30">
                <div class="responsive">
                    <div class="pd-20">

                        <!-- IDENTITAS -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-lg-12">
                                                <button class="btn btn-block btn-danger"><i class="fas fa-file-alt"></i> IDENTITAS PASIEN</button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6" align="center">
                                                <p><b>Identitas Pasien</b></p>
                                                <p>No.Rekam Medis: <?= $row2['no_rm']; ?></p>
                                                <p>Nama Pasien: <?= $row2['nama_pasien']; ?></p>
                                                <p>Kelas: <?= $row2['nama_pasien']; ?></p>
                                            </div>
                                            <div class="col-lg-6" align="center">
                                                <p><b>Dokter</b></p>
                                                <p>Tanggal Dokter Jaga: <?= $row2['tgl_jaga']; ?></p>
                                                <p>Dokter: <?= $row2['dokter_jaga']; ?></p>
                                                <p>DPJP: <?= $row2['DPJP']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END IDENTITAS -->

                        <!-- RIWAYAT -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <?php 
                                        $data = $db->query('SELECT * FROM tb_soap WHERE no_rm="'.$_GET['no_rm'].'" ORDER BY tgl_jaga DESC');
                                        while($row = $data->fetch_assoc()) {
                                            ?>        
                                            <h4 class="card-title"><button class="btn btn-xs btn-danger"><?php echo tanggal_indo($row['tgl_jaga'],true); ?> | Oleh Dokter <?php echo $row['dokter_jaga']; ?></button>
                                            </h4>
                                            <hr>
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
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END RIWAYAT -->
                    </div>
                </div>
            </div>
        </div>
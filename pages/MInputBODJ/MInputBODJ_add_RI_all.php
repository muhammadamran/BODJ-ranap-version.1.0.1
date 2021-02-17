<?php
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;
}

$kalimat = generate_string($permitted_chars, 20);;
$sub_kalimat = substr($kalimat,-5);
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
                        <form action="pages/MInputBODJ/MInputBODJ_proses.php?aksi=insert" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Dokter Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="dokter_jaga" value="<?= $_SESSION['nama_lengkap'];?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="text" class="form-control" name="date_created" value="<?= date('Y-m-d h:m:i');?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="hidden" name="kd_soap" value="<?= date('Ymd');?><?= $_SESSION['id'];?><?= $_SESSION['NIK'];?><?= $sub_kalimat; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Tanggal Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="tgl_jaga" placeholder="Tanggal Jaga..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">No. Rekam Medis / Nama Pasien</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="custom-select2 form-control" name="no_rm" style="width: 100%; height: 38px;" required="required">
                                            <optgroup label="Pilih Data No.Rekam Medis / Nama Pasien">
                                                <option value="">Pilih Data No.Rekam Medis / Nama Pasien</option>
                                                <?php
                                                $result = pg_query($pg, "SELECT * FROM infokunjunganri_v WHERE tglpulang IS NULL ORDER BY tgl_pendaftaran DESC");
                                                while ($row = pg_fetch_assoc($result)) {
                                                    ?>
                                                    <option value="<?= $row['no_rekam_medik'] ?> | <?= $row['namadepan'] ?> <?= $row['nama_pasien'] ?>"><?= $row['no_rekam_medik'] ?> | <?= $row['namadepan'] ?> <?= $row['nama_pasien'] ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                        <small><i>Jika pasien tidak ada silahkan <b><a href="index.php?m=MInputBODJ&s=MInputBODJ_add_RI">Klik Disini</a></i></b></small>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Kelas</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="custom-select2 form-control" name="kelas" style="width: 100%; height: 38px;" required="required">
                                            <optgroup label="Pilih Kelas Pelayanan">
                                                <option value="">Pilih Kelas Pelayanan</option>
                                                <?php
                                                $result = pg_query($pg, "SELECT * FROM kelaspelayanan_m");
                                                while ($row = pg_fetch_assoc($result)) {
                                                    ?>
                                                    <option value="<?= $row['kelaspelayanan_nama'] ?>"><?= $row['kelaspelayanan_nama'] ?></option>
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
                                                <option value="">Pilih DPJP</option>
                                                <?php
                                                $data = $db->query("SELECT * FROM tb_dpjp WHERE status='Aktif'", 0);
                                                while($row = $data->fetch_assoc()) {
                                                    ?>
                                                    <option value="<?= $row['gelar_depan'] ?><?= $row['nama_dpjp'] ?><?= $row['gelar_belakang'] ?>"><?= $row['gelar_depan'] ?><?= $row['nama_dpjp'] ?><?= $row['gelar_belakang'] ?></option>
                                                <?php } ?>
                                            </optgroup>
                                        </select>
                                        <small><i>Jika DPJP belum ada silahkan tambahkan <b><a href="index.php?m=Cdpjp&s=Cdpjp">Klik Disini</a></i></b></small>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="subject" placeholder="Subject..." required="required"></textarea>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="object" placeholder="Object..." required="required"></textarea>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="assesment" placeholder="Assesment..." required="required"></textarea>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="plan" placeholder="Plan..." required="required"></textarea>
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
                                        <textarea type="text" class="ckeditor" id="ckedtor" name="keterangan" placeholder="Keterangan..." required="required"></textarea>
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
                                        <input type="file" class="form-control" name="berkas" placeholder="berkas..."/>
                                    </div>
                                    <small>Upload File Max:100MB (docx,pdf,xlxs,mp4)</small>
                                </div>
                                <div class="col-lg-4">
                                    <label>Rontgent</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="rontgent" placeholder="rontgent..."/>
                                    </div>
                                    <small>Upload File Max:100MB (docx,pdf,xlxs,mp4)</small>
                                </div>
                                <div class="col-lg-4">
                                    <label>EKG</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="ekg" placeholder="ekg..."/>
                                    </div>
                                    <small>Upload File Max:100MB (docx,pdf,xlxs,mp4)</small>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
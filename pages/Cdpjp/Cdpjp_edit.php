<?php
$data = $db->query('SELECT * FROM tb_dpjp WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-edit2"></span> Input DPJP</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input DPJP</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Silahkan lakukan inputan DPJP.</label> <br><hr>
                                    <label>Klik button <button type="button" class="btn btn-primary">Update</button> untuk mengupdate data DPJP</label>
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
                        <form action="pages/Cdpjp/Cdpjp_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <label class="col-lg-3 col-form-label">SIP</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="SIP" placeholder="SIP ..." value="<?= $row['SIP'];?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Gelar Depan</label>
                                <div class="col-lg-9">
                                        <small><i>Gunakan "<b>.</b>" setelah gelar depan</i></small>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="gelar_depan" placeholder="Gelar Depan ..." value="<?= $row['gelar_depan'];?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Nama DPJP</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nama_dpjp" placeholder="Nama DPJP..." value="<?= $row['nama_dpjp'];?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Gelar Belakang</label>
                                <div class="col-lg-9">
                                        <small><i>Gunakan "<b>,</b>" sebelum gelar belakang</i></small>
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="gelar_belakang" placeholder="Gelar Belakang ..." value="<?= $row['gelar_belakang'];?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Spesialis</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="spesialis" placeholder="Spesialis ..." value="<?= $row['spesialis'];?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-3 col-form-label">Status DPJP</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="custom-select2 form-control" name="status" style="width: 100%; height: 38px;" required="required">
                                            <optgroup label="Pilih Status">
                                                <option value="<?= $row['status'];?>"><?= $row['status'];?></option>
                                                <option value="Aktif">Aktif</option>
                                                <option value="Tidak Aktif">Tidak Aktif</option>
                                            </optgroup>
                                        </select>
                                        <small><i><b>Note:</b></i></small>
                                        <small><i>Jika status <b>Aktif</b> maka DPJP akan tampil pada pilihan Inputan SOAP BODJ Rawat Inap</i></small><br>
                                        <small><i>Jika status <b>Tidak Aktif</b> maka DPJP tidak akan tampil pada pilihan Inputan SOAP BODJ Rawat Inap</i></small>
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
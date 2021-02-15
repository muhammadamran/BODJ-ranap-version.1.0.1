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
                                    <label>Klik button <button type="button" class="btn btn-primary">Update Password</button> untuk mengubah password Pengguna/Dokter BODJ</label>
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
                        <form action="pages/MPengguna/MPengguna_proses.php?aksi=update_password&id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
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
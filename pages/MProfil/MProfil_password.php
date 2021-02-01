<?php
$data = $db->query('SELECT * FROM tb_user WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data Profil</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Update Profil</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-right">
                    <select class="custom-select custom-select-set form-control bg-white border-0 custom-shadow custom-radius">
                        <option selected>Aug 19</option>
                        <option value="1">July 19</option>
                        <option value="2">Jun 19</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="index.php?m=profil&s=profil"><button class="btn btn-dark btn-circle"><i class="fas fa-arrow-circle-left"></i></button></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form class="form-horizontal form-bordered" action="pages/profil/profil_proses.php?aksi=update_password&id=<?= $_GET['id'] ?>" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">New Password</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="New Password..." required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Retype New Password</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="password" class="form-control" name="password"  placeholder="Retype New Password..." required/>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary">Chane Password</button>
                                </div>
                            </div>   
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
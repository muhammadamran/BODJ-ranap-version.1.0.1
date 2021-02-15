<?php
$data = $db->query('SELECT * FROM tb_soap WHERE id="'.$_GET['id'].'"');
$row = $data->fetch_assoc()
?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Data forms Rawat Inap</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.php" class="text-muted">Dashboard</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Input forms</li>
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
                <a href="index.php?m=forms&s=forms"><button class="btn btn-dark btn-circle"><i class="fas fa-arrow-circle-left"></i></button></a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Update Data Buku Operan Dokter Jaga Rawat Inap</h4>
                        <h6 class="card-subtitle">Klik  <button class="btn waves-effect waves-light btn-sm btn-primary">Update</button> Untuk memperbarui data Buku Operan Dokter Jaga Rawat Inap.</h6>
                        <hr>
                        <form class="form-horizontal form-bordered" action="pages/forms/forms_proses.php?aksi=update&id=<?= $_GET['id'] ?>" method="POST">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Dokter Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="dokter_jaga" value="<?= $_SESSION['nama_lengkap'];?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="text" class="form-control" name="date_created" value="<?= date('Y-m-d h:m:i');?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="hidden" class="form-control" name="kd_soap" value="<?= $row['kd_soap']; ?>"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Tanggal Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="tgl_jaga" value="<?= $row['tgl_jaga']; ?>" placeholder="Tanggal Jaga..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">No. Rekam Medis</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="no_rm" value="<?= $row['no_rm']; ?>" placeholder="No. Rekam Medis..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Nama Pasien</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nama_pasien" value="<?= $row['nama_pasien']; ?>" placeholder="Nama Pasien..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Kelas</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <!-- <input type="text" class="form-control" name="kelas" value="<?= $row['kelas']; ?>" placeholder="Kelas..." required/> -->
                                        <select class="form-control" name="kelas" placeholder="Kelas..." required>
                                            <option value="<?= $row['kelas']; ?>"><?= $row['kelas']; ?></option>
                                            <option value="">-- Pilih Kelas --</option>
                                            <option value="HCU">HCU</option>
                                            <option value="VVIP">VVIP</option>
                                            <option value="VIP">VIP</option>
                                            <option value="Kelas I">Kelas I</option>
                                            <option value="Kelas II">Kelas II</option>
                                            <option value="Kelas III">Kelas III</option>
                                            <option value="Tanpa Kelas">Tanpa Kelas</option>
                                            <option value="Isolasi 209">Isolasi 209</option>
                                            <option value="Isolasi 210">Isolasi 210</option>
                                            <option value="Asoka">Asoka</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">DPJP</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="DPJP" value="<?= $row['DPJP']; ?>" placeholder="DPJP..." required/>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h1>S</h1>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Subject</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" name="subject" placeholder="Subject..." required><?= $row['subject']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h1>O</h1>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Object</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" name="object" placeholder="Object..." required><?= $row['object']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h1>A</h1>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Assesment</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" name="assesment" placeholder="Assesment..." required><?= $row['assesment']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h1>P</h1>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Berkas Digital Sebelumnya</label>
                                <div class="col-lg-9">
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
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Plan</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" name="plan" placeholder="Plan..." required><?= $row['plan']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h1>Keterangan</h1>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Keterangan</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan..." required><?= $row['keterangan']; ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-primary">Update</button>
                                    </div>
                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
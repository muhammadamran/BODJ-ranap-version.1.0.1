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
                        <h4 class="card-title">Tambah Data Buku Operan Dokter Jaga Rawat Inap</h4>
                        <h6 class="card-subtitle">Klik  <button class="btn waves-effect waves-light btn-sm btn-primary">Simpan</button> Untuk menambahkan data Buku Operan Dokter Jaga Rawat Inap.</h6>
                        <hr>
                        <form class="form-horizontal form-bordered" action="pages/forms/forms_proses.php?aksi=insert" method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Dokter Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="dokter_jaga" value="<?php echo $_SESSION['nama_lengkap'];?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="text" class="form-control" name="date_created" value="<?php echo date('Y-m-d h:m:i');?>" placeholder="Dokter Jaga..." readonly/>
                                        <input type="hidden" name="kd_soap" value="<?= date('Ymd');?><?= $_SESSION['id'];?><?= $_SESSION['NIK'];?><?= $sub_kalimat; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Tanggal Jaga</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="tgl_jaga" placeholder="Tanggal Jaga..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">No. Rekam Medis</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="no_rm" placeholder="No. Rekam Medis..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Nama Pasien</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Kelas</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <select class="form-control" name="kelas" placeholder="Kelas..." required>
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
                                        <input type="text" class="form-control" name="DPJP" placeholder="DPJP..." required/>
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
                                        <textarea type="text" class="form-control" name="subject" placeholder="Subject..." required></textarea>
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
                                        <textarea type="text" class="form-control" name="object" placeholder="Object..." required></textarea>
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
                                        <textarea type="text" class="form-control" name="assesment" placeholder="Assesment..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div align="center">
                                <h1>P</h1>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Upload Berkas Digital(Optional)</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="berkas" placeholder="berkas..."/>
                                    </div>
                                    <small>Upload File Max:100MB (docx,pdf,xlxs,mp4)</small>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label">Plan</label>
                                <div class="col-lg-9">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" name="plan" placeholder="Plan..." required></textarea>
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
                                        <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-block btn-primary">Simpan Data</button>
                                    </div>
                                </div>   
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
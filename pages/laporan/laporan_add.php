<div id="content" class="content">
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Buku Operan Dokter Jaga Rawat Inap</a></li>
        <!-- <li class="breadcrumb-item active">Tambah Buku Operan Dokter Jaga Rawat Inap</li> -->
    </ol>
    <h1 class="page-header">Tambah Buku Operan Dokter Jaga Rawat Inap</h1>
    <a href="index.php?m=user&s=user">
        <span type="button" class="btn btn-inverse">
        <i class="fa fa-arrow-alt-circle-left"></i> Kembali
        </span>
    </a>
    <hr>
    <div class="row">
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Isi Buku Operan Dokter Jaga Rawat Inap</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <div class="panel-body panel-form">
                    <form class="form-horizontal form-bordered" action="pages/bodj/bodj_proses.php?aksi=insert" method="POST">
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Dokter Jaga</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="dokter_jaga" value="<?php echo $_SESSION['nama_lengkap'];?>" placeholder="Dokter Jaga..." readonly/>
                                    <input type="text" class="form-control" name="date_created" value="<?php echo date('Y-m-d h:m:i');?>" placeholder="Dokter Jaga..." readonly/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Tanggal Jaga</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="date" class="form-control" name="tgl_jaga" placeholder="Tanggal Jaga..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">No. Rekam Medis</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="no_rm" placeholder="No. Rekam Medis..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-address-book"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Nama Pasien</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama_pasien" placeholder="Nama Pasien..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Kelas</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="kelas" placeholder="Kelas..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-home"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">DPJP</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="DPJP" placeholder="DPJP..." required/>
                                    <div class="input-group-addon">
                                        <i class="fa fa-user-circle"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>S</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Subject</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="subject" placeholder="Subject..." required></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>O</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Object</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="object" placeholder="Object..." required></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>A</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Assesment</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="assesment" placeholder="Assesment..." required></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div align="center">
                            <h1>P</h1>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Plan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="plan" placeholder="Plan..." required></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-lg-4 col-form-label">Keterangan</label>
                            <div class="col-lg-8">
                                <div class="input-group">
                                    <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan..." required></textarea>
                                    <div class="input-group-addon">
                                        <i class="fas fa-puzzle-piece"></i>
                                    </div>
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
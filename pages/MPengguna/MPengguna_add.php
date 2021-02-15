<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-edit2"></span> Input Pengguna/Dokter BODJ</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Input Pengguna/Dokter BODJ</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Silahkan lakukan inputan Data Pengguna/Dokter BODJ.</label> <br><hr>
                                    <label>Klik button <button type="button" class="btn btn-primary">Simpan</button> untuk menambahkan data Pengguna/Dokter BODJ</label>
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
                        <form action="pages/MPengguna/MPengguna_proses.php?aksi=insert" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <label class="col-lg-4 col-form-label">NIP</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="NIK" placeholder="NIP..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Nama Lengkap</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Tempat Lahir/Tanggal Lahir</label>
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir..." required/>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <input type="date" class="form-control" name="tgl_lahir" placeholder="Tanggal Lahir..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Agama</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <select class="form-control" name="agama" required>
                                            <option value="">-- Pilih Agama --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Protestan">Protestan</option>
                                            <option value="Katolik">Katolik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Jenis Kelamin</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <select class="form-control" name="jenis_kelamin" required>
                                            <option value="">-- Pilih Jenis Kelamin --</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Status Pernikahan</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <select class="form-control" name="status_pernikahan" required>
                                            <option value="">-- Pilih Status Pernikahan --</option>
                                            <option value="Belum Menikah">Belum Menikah</option>
                                            <option value="Menikah">Menikah</option>
                                            <option value="Cerai Hidup">Cerai Hidup</option>
                                            <option value="Cerai Mati">Cerai Mati</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Status Pegawai</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <select class="form-control" name="status_pegawai" required>
                                            <option value="">-- Pilih Status Pegawai --</option>
                                            <option value="Aktif">Aktif</option>
                                            <option value="Tidak Aktif">Tidak Aktif</option>
                                            <option value="Cuti">Cuti</option>
                                            <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                                            <option value="Dikeluarkan">Dikeluarkan</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Jabatan</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">E-Mail</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="email" class="form-control" name="email" placeholder="E-Mail..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Alamat</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" name="alamat" placeholder="Alamat Tinggal..." required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Nomor Telepon</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="telepon" placeholder="Nomor Telepon..." required/>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-lg-4 col-form-label">Hak Akses</label>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                        <select class="form-control" name="role" required>
                                            <option value="">-- Pilih Hak Akses --</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
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
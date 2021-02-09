<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-stethoscope"></span> Dashboard</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                            <hr>
                            <!-- <ol class="breadcrumb">
                                <?php
                                    $result_t = pg_query($pg, "SELECT COUNT(*) AS jumlah FROM infokunjunganrj_v WHERE DATE(tgl_pendaftaran) = CURRENT_DATE");
                                    $row_t = pg_fetch_assoc($result_t);
                                ?>
                                <li class="breadcrumb-item"><h5>Jumlah Pasien Dashboard <?= tanggal_indo(date('Y-m-d'));?> - <?= $row_t['jumlah']; ?> Pasien</h5> 
                                </li>
                            </ol> -->
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="mode/vendors/images/02.png">
                    </div>
                </div>
            </div>
            <div class="row">

                <!-- SEARCH PERIODE -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box mb-30">
                        <div class="row">
                            <div class="col-xl-4">
                                <img src="assets/mode/images/logo-icon.png" alt=""> <h5><b>BODJ</b> <small>Rawat Inap</small></h5>
                            </div>
                            <div class="col-xl-4">
                                <h5><b>Cari Per-Periode</b><small> Buku Catatan Dokter Rawat Inap</small></h5>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xl-5">
                                <select class="custom-select2 form-control" name="Bulan" style="width: 100%; height: 38px;" required="required">
                                    <optgroup label="Pilih Bulan">
                                        <option value="">Pilih Bulan</option>
                                        <option value="Januari">Januari</option>
                                        <option value="Februari">Februari</option>
                                        <option value="Maret">Maret</option>
                                        <option value="April">April</option>
                                        <option value="Mei">Mei</option>
                                        <option value="Juni">Juni</option>
                                        <option value="Juli">Juli</option>
                                        <option value="Agustus">Agustus</option>
                                        <option value="September">September</option>
                                        <option value="Oktober">Oktober</option>
                                        <option value="November">November</option>
                                        <option value="Desember">Desember</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-xl-5">
                                <select class="custom-select2 form-control" name="Tahun" style="width: 100%; height: 38px;" required="required">
                                    <optgroup label="Pilih Tahun">
                                        <option value="">Pilih Tahun</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2021">2021</option>
                                        <option value="2021">2021</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="col-xl-2">
                                <button type="submit" class="btn btn-primary btn-block"><i class="icon-copy ion-search"></i> Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SEARCH PERIODE -->

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box mb-30">
                        <div class="row">
                            <div class="col-xl-4">
                                <img src="assets/mode/images/logo-icon.png" alt=""> <h5><b>BODJ</b> <small>Rawat Inap</small></h5>
                            </div>
                            <div class="col-xl-8">
                                <h5 align="left">Grafik ... </h5>
                            </div>
                        </div>
                        <hr>
                        <b>On Progress</b>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box mb-30">
                        <div class="row">
                            <div class="col-xl-4">
                                <img src="assets/mode/images/logo-icon.png" alt=""> <h5><b>BODJ</b> <small>Rawat Inap</small></h5>
                            </div>
                            <div class="col-xl-8">
                                <h5 align="left">Grafik ... </h5>
                            </div>
                        </div>
                        <hr>
                        <b>On Progress</b>
                    </div>
                </div>

                
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box mb-30">
                        <div class="row">
                            <div class="col-xl-4">
                                <img src="assets/mode/images/logo-icon.png" alt=""> <h5><b>BODJ</b> <small>Rawat Inap</small></h5>
                            </div>
                            <div class="col-xl-8">
                                <h5 align="left">Grafik ... </h5>
                            </div>
                        </div>
                        <hr>
                        <b>On Progress</b>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
                    <div class="pd-20 card-box mb-30">
                        <div class="row">
                            <div class="col-xl-4">
                                <img src="assets/mode/images/logo-icon.png" alt=""> <h5><b>BODJ</b> <small>Rawat Inap</small></h5>
                            </div>
                            <div class="col-xl-8">
                                <h5 align="left">Grafik ... </h5>
                            </div>
                        </div>
                        <hr>
                        <b>On Progress</b>
                    </div>
                </div>
            </div>
        </div>
<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-hospital"></span> Rawat Inap</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Rawat Inap</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <?php
                                    $result_t = pg_query($pg, "SELECT COUNT(*) AS jumlah FROM infokunjunganri_v WHERE tglpulang IS NULL");
                                    $row_t = pg_fetch_assoc($result_t);
                                ?>
                                <li class="breadcrumb-item"><h5>Jumlah Pasien Rawat Inap <?= tanggal_indo(date('Y-m-d'));?> - <?= $row_t['jumlah']; ?> Pasien</h5> 
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-center">
                        <img src="mode/vendors/images/02.png">
                    </div>
                </div>
            </div>
            <!-- Export Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">Pasien Rawat Inap</h4>
                </div>
                <div class="table-responsive">
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Tgl Pendaftaran</th>
                                    <th>Tgl Masuk Admisi</th>
                                    <th>Tgl Pulang</th>
                                    <th>Cara Masuk</th>
                                    <th>No. Pendaftaran</th>
                                    <th>No. RM</th>
                                    <th>Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Umur</th>
                                    <th>DPJP</th>
                                    <th>Jenis Kasus Penyakit</th>
                                    <th>Nama Ruangan</th>
                                    <th>Kelas Pelayanan</th>
                                    <th>Status Periksa</th>
                                    <th>Status Pasien</th>
                                    <th>Status Masuk</th>
                                    <th>Asuransi</th>
                                    <th>Penjamin</th>
                                    <th>Kelompok Umur</th>
                                    <th>Cara Keluar</th>
                                    <th>Kondisi Keluar</th>
                                    <!-- <th class="datatable-nosort">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DATA -->
                                <?php 
                                $result = pg_query($pg, "SELECT * FROM infokunjunganri_v WHERE tglpulang IS NULL ORDER BY tgl_pendaftaran DESC");
                                    while ($row = pg_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?= $row['tgl_pendaftaran'] ?></td>
                                    <td><?= $row['tgladmisi'] ?></td>
                                    <td><?= $row['tglpulang'] == NULL ? "<i><font style='color:red;'>Masih Dirawat</font></i>" : $row['tglpulang'] ?></td>
                                    <td><?= $row['caramasuk_nama'] ?></td>
                                    <td><?= $row['no_pendaftaran'] ?></td>
                                    <td><?= $row['no_rekam_medik'] ?></td>
                                    <td><?= $row['namadepan'] ?> <?= $row['nama_pasien'] ?></td>
                                    <td><?= $row['jeniskelamin'] ?></td>
                                    <td><?= $row['umur'] ?></td>
                                    <td><?= $row['gelardepan'] ?><?= $row['nama_pegawai'] ?>,<?= $row['gelarbelakang_nama'] ?></td>
                                    <td><?= $row['jeniskasuspenyakit_nama'] ?></td>
                                    <td><?= $row['ruangan_nama'] ?></td>
                                    <td><?= $row['kelaspelayanan_nama'] ?></td>
                                    <td><?= $row['statusperiksa'] ?></td>
                                    <td><?= $row['statuspasien'] ?></td>
                                    <td><?= $row['statusmasuk'] ?></td>
                                    <td><?= $row['carabayar_nama'] ?></td>
                                    <td><?= $row['penjamin_nama'] ?></td>
                                    <td><?= $row['kelompokumur_nama'] ?></td>
                                    <td><?= $row['carakeluar_nama'] == NULL ? "<i><font style='color:red;'>Masih Dirawat</font></i>" : $row['carakeluar_nama'] ?></td>
                                    <td><?= $row['kondisikeluar_nama'] == NULL ? "<i><font style='color:red;'>Masih Dirawat</font></i>" : $row['kondisikeluar_nama'] ?></td>
                                    <!-- <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td> -->
                                </tr>
                                <?php } ?>
                                <!-- END DATA -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
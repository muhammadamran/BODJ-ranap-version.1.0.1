<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-fuel"></span> Table Hemodialisa</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Table Hemodialisa</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <?php
                                    $result_t = pg_query($pg, "SELECT COUNT(*) AS jumlah FROM infokunjunganhd_v WHERE DATE(tgl_pendaftaran) = CURRENT_DATE");
                                    $row_t = pg_fetch_assoc($result_t);
                                ?>
                                <li class="breadcrumb-item"><h5>Jumlah Pasien HD <?= tanggal_indo(date('Y-m-d'));?> - <?= $row_t['jumlah']; ?> Pasien</h5> 
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
            <div class="col-xl-12" style="background-color: #fff">
                <div class="table-responsive">
                    <div class="pb-20">
                        <br>
                        <table class="table hover multiple-select-row nowrap">
                            <thead>
                                <tr>
                                    <th>No. Pendaftaran</th>
                                    <th>NO.RM / Nama Pasien</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas Pelayanan</th>
                                    <th>Nama Ruangan</th>
                                    <!-- <th class="datatable-nosort">Action</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                <!-- DATA -->
                                <?php
                                $result = pg_query($pg, "SELECT * FROM infokunjunganhd_v WHERE DATE(tgl_pendaftaran) = CURRENT_DATE ORDER BY tgl_pendaftaran DESC");
                                    while ($row = pg_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?= $row['no_pendaftaran'] ?></td>
                                    <td><?= $row['no_rekam_medik'] ?> / <?= $row['namadepan'] ?> <?= $row['nama_pasien'] ?></td>
                                    <td><?= $row['jeniskelamin'] ?></td>
                                    <td><?= $row['kelaspelayanan_nama'] ?></td>
                                    <td><?= $row['ruangan_nama'] ?></td>
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
        <br>
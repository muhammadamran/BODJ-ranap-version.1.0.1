<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h3><span class="micon dw dw-analytics-20"></span> Riwayat Pasien SOAP BODJ Rawat Inap</h3>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Riwayat Pasien SOAP BODJ Rawat Inap</li>
                            </ol>
                            <hr>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <label>Berikut Riwayat SOAP dari BODJ Rawat Inap yang dilakukan oleh masing-masing dokter pada pasien Rawat Inap.</label> <br><hr>
                                    <label>Klik icon <button type="button" class="btn btn-dark"><i class="icon-copy fi-eye"></i></button> untuk melihat Riwayat Per-Pasien</label><br>
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
                    <h4 class="text-blue h4">Riwayat Pasien Rawat Inap</h4>
                </div>
                <div class="table-responsive">
                    <div class="pb-20">
                        <table class="table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">Lihat Detail</th>
                                    <th>Identitas Pasien</th>
                                    <th>SOAP</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <?php 
                                $data = $db->query("SELECT tgl_jaga,no_rm,nama_pasien,kelas,dokter_jaga,DPJP,subject,object,assesment,plan,keterangan,COUNT(no_rm) AS total
                                  FROM tb_soap GROUP BY no_rm ORDER BY id DESC", 0);
                                while($row = $data->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><a href="index.php?m=MLaporan&s=MLaporan_lihat&no_rm=<?= RIGHT($row['no_rm'],6) ?>" class="btn btn-sm btn-dark"><i class="icon-copy fi-eye"></i></a></td>
                                        <td><?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?> | <?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
                                        <td align="center"><button class="btn btn-warning"><i class="icon-copy ion-clipboard"></i> <?= $row['total']; ?></i></button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Export Datatable End -->
        </div>
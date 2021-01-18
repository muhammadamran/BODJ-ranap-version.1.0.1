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
                <div class="card">
                    <div class="card-body">
                        <h6 class="card-subtitle">Klik  <button class="btn btn-sm btn-dark"><i class="fas fa-eye"></i></button> Untuk melihat riwayat SOAP pasien yang dilakukan oleh Dokter sebelumnya.</h6>
                        <hr>
                        <h4 class="card-title">Data Buku Operan Dokter Jaga Rawat Inap</h4>
                        <div class="table-responsive">
                            <table id="multi_col_order"
                            class="table table-striped table-bordered display no-wrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Lihat Detail</th>
                                    <th>Identitas Pasien</th>
                                    <th>SOAP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $sesi= $_SESSION['nama_lengkap'];
                                    // $data = $db->query("SELECT * FROM tb_soap WHERE dokter_jaga='$sesi' ORDER BY tgl_jaga ASC", 0);
                                $data = $db->query("SELECT tgl_jaga,no_rm,nama_pasien,kelas,dokter_jaga,DPJP,subject,object,assesment,plan,keterangan,COUNT(no_rm) AS total
                                      FROM tb_soap GROUP BY no_rm ORDER BY id DESC", 0);
                                while($row = $data->fetch_assoc()) {
                                    ?>
                                    <tr>
                                        <td><a href="index.php?m=soapriwayat&s=soapriwayat_edit&no_rm=<?= $row['no_rm'] ?>" class="btn btn-sm btn-dark"><i class="fas fa-eye"></i></a></td>
                                        <td><?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?> | <?= $row['nama_pasien'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['nama_pasien'] ?> | <?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
                                        <td align="center"><button class="btn btn-warning"><i class="fas fa-clipboard"> <?= $row['total']; ?></i></button></td>
                                    </tr>
                                    <!-- DETAIL SOAP & KETERANGAN -->
                                    <div class="modal fade" id="detailsoap<?= $row['id']?>" role="dialog">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <label class="modal-title">Lihat SOAP <b><?= $row['nama_pasien']; ?></b></label>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-group row">
                                                        <div class="col-lg-6">
                                                            <p><b>Identitas Pasien</b></p>
                                                            <p>No.Rekam Medis: <?= $row['no_rm']; ?></p>
                                                            <p>Nama Pasien: <?= $row['nama_pasien']; ?></p>
                                                            <p>Kelas: <?= $row['nama_pasien']; ?></p>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <p><b>Dokter</b></p>
                                                            <p>Tanggal Dokter Jaga: <?= $row['tgl_jaga']; ?></p>
                                                            <p>Dokter: <?= $row['dokter_jaga']; ?></p>
                                                            <p>DPJP: <?= $row['DPJP']; ?></p>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div align="center">
                                                        <label><b>SOAP</b></label>
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
                                                                <textarea type="text" class="form-control" name="subject" placeholder="Subject..." readonly><?php echo $row['subject']; ?></textarea>
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
                                                                <textarea type="text" class="form-control" name="object" placeholder="Object..." readonly><?php echo $row['object']; ?></textarea>
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
                                                                <textarea type="text" class="form-control" name="assesment" placeholder="Assesment..." readonly><?php echo $row['assesment']; ?></textarea>
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
                                                                    <img src="<?php echo 'assets/uploads/object/'. $row['berkas'];?>" class="lingkaran" alt="" />
                                                                </div>   
                                                            <?php } ?>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-lg-3 col-form-label">Plan</label>
                                                        <div class="col-lg-9">
                                                            <div class="input-group">
                                                                <textarea type="text" class="form-control" name="plan" placeholder="Plan..." readonly><?php echo $row['plan']; ?></textarea>
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
                                                                <textarea type="text" class="form-control" name="keterangan" placeholder="Keterangan..." readonly><?php echo $row['keterangan']; ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Tutup</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END DETAIL SOAP & KETERANGAN -->
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer text-center text-muted">
    All Rights Reserved by Adminmart. Designed and Developed by <a
    href="https://wrappixel.com">WrapPixel</a>.
</footer>
</div>
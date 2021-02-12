<?php 
if (isset($_POST['submit'])) {
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];

	if (!empty($date1) && !empty($date2)) {
		//PERINTAH TAMPIL BERDASARKAN RANGE TANGGAL
		$q = $db->query("SELECT * FROM tb_soap WHERE tgl_jaga BETWEEN '$date1' and '$date2'"); 
	} else {
		// PERINTAH TAMPILKAN SEMUA DATA
		$q = $db->query("SELECT * FROM tb_soap ORDER BY tgl_jaga DESC LIMIT 10"); 
	}
} else {
        //PERINTAH TAMPILKAN SEMUA DATA
        $q = $db->query("SELECT * FROM tb_soap ORDER BY tgl_jaga DESC LIMIT 10");
}
?>
<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h3><span class="micon dw dw-analytics-5"></span> Serach / Print</h3>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.php">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Serach / Print</li>
							</ol>
                            <hr>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
                                    <h5>
                                        Sreach / Print <?= tanggal_indo(date('Y-m-d'));?>
                                    </h5> 
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
                        <form method="POST" action="">
                            <div class="row">
                                <div class="col-xl-5">
                                    <label>Dari Tanggal Jaga</label>
                                    <input type="date" name="date1" id="date1" class="form-control" name="date1" value="" placeholder="Tanggal Jaga..." required/>
                                </div>
                                <div class="col-xl-5">
                                    <label>Sampai Tanggal Jaga</label>
                                    <input type="date" name="date2" id="date2" class="form-control" name="date2" value="" placeholder="Tanggal Jaga..." required/>
                                </div>
                                <div class="col-xl-2">
                                    <label style="color:#fff">Sampai</label>
                                    <button type="submit" name="submit" class="btn btn-primary btn-block" value="Cari"><i class="icon-copy ion-search"></i> Cari</button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
				<!-- END SEARCH PERIODE -->
			</div>
			<!-- Export Datatable start -->
			<div class="card-box mb-30">
				<div class="pd-20">
					<h4 class="text-blue h4">Data SOAP Buku Catatan Pasien Rawat Inap Berdasarkan Keluruhan Dokter</h4>
				</div>
				<div class="table-responsive">
					<div class="pb-20">
						<table class="table hover">
							<thead>
								<tr>
									<th class="table-plus datatable-nosort">No. RM | Nama Pasien</th>
									<th>Tanggal Jaga</th>
									<th>Dokter Jaga</th>
									<th>Kelas Pelayanan</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<!-- DATA -->
								<?php
								while ($row = $q->fetch_assoc()) {
                                ?>
									<tr>
										<td>
											<div class="dropdown">
												<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
													<?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?>
												</a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#detailsoap<?= $row['id']?>">Data SOAP</a>
													<a class="dropdown-item" href="#">Resume Perawatan</a>
													<a class="dropdown-item" href="#">Riwayat Perawatan</a>
												</div>
											</div>
										</td>
										<td><?= $row['tgl_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : tanggal_indo($row['tgl_jaga']) ?></td>
										<td><?= $row['dokter_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['dokter_jaga'] ?></td>
										<td><?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
										<td>
											<a href="#" data-toggle="modal" data-target="#updatefilelab<?= $row['id']?>"><span class="btn btn-warning btn-sm"><i class="icon-copy ion-android-image"></i> <b>LAB</b> </span></a>
											<a href="#" data-toggle="modal" data-target="#updatefilerontgen<?= $row['id']?>"><span class="btn btn-warning btn-sm"><i class="icon-copy ion-android-image"></i> <b>Rontgent</b> </span></a>
											<a href="#" data-toggle="modal" data-target="#updatefileekg<?= $row['id']?>"><span class="btn btn-warning btn-sm"><i class="icon-copy ion-android-image"></i> <b>EKG</b> </span></a>
										</td>
									</tr>
									<!-- DETAIL SOAP & KETERANGAN -->
									<div class="modal fade" id="detailsoap<?= $row['id']?>" role="dialog">
										<div class="modal-dialog modal-lg modal-dialog-centered">
											<div class="modal-content">
												<div class="modal-header">
													<label class="modal-title">Lihat Data Buku Operan Dokter Jaga Rawat Inap <b><?= $row['nama_pasien']; ?></b></label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col-lg-6">
															<p><b>Identitas Pasien</b></p>
															<p>No.Rekam Medis | Nama Pasien: <br><?= $row['no_rm']; ?></p>
															<p>Kelas: <?= $row['kelas']; ?></p>
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
														<h5>Subject</h5>
													</div>
													<hr>
													<div class="row">
														<div class="col-lg-12">
															<div class="input-group">
																<textarea type="text" class="ckeditor" id="ckedtor" name="subject" placeholder="Subject..." readonly><?= $row['subject']; ?></textarea>
															</div>
														</div>
													</div>
													<hr>
													<div align="center">
														<h5>Object</h5>
													</div>
													<hr>
													<div class="row">
														<div class="col-lg-12">
															<div class="input-group">
																<textarea type="text" class="ckeditor" id="ckedtor" name="object" placeholder="Object..." readonly><?= $row['object']; ?></textarea>
															</div>
														</div>
													</div>
													<hr>
													<div align="center">
														<h5>Assesment</h5>
													</div>
													<hr>
													<div class="row">
														<div class="col-lg-12">
															<div class="input-group">
																<textarea type="text" class="ckeditor" id="ckedtor" name="assesment" placeholder="Assesment..." readonly><?= $row['assesment']; ?></textarea>
															</div>
														</div>
													</div>
													<hr>
													<div align="center">
														<h5>Plan</h5>
													</div>
													<hr>
													<div class="row">
														<div class="col-lg-12">
															<div class="input-group">
																<textarea type="text" class="ckeditor" id="ckedtor" name="plan" placeholder="Plan..." readonly><?= $row['plan']; ?></textarea>
															</div>
														</div>
													</div>
													<hr>
													<div align="center">
														<h5>Keterangan</h5>
													</div>
													<hr>
													<div class="row">
														<div class="col-lg-12">
															<div class="input-group">
																<textarea type="text" class="ckeditor" id="ckedtor" name="keterangan" placeholder="Keterangan..." readonly><?= $row['keterangan']; ?></textarea>
															</div>
														</div>
													</div>
													<hr>
													<div align="center">
														<h5>Upload Berkas LAB, Rontgent & EKG Pasien</h5>
													</div>
													<hr>
													<div class="row">
														<div class="col-lg-4">
															<label>LAB</label>
															<div class="input-group">
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
														<div class="col-lg-4">
															<label>Rontgent</label>
															<div class="input-group">
																<?php
																if ($row['rontgent']==NULL) { ?>
																	<div align="center">
																		<img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
																	</div>
																<?php }else{ ?>
																	<div align="center">
																		<img src="<?= 'assets/uploads/object/'. $row['rontgent'];?>" class="lingkaran" alt="" />
																	</div>   
																<?php } ?>
															</div>
														</div>
														<div class="col-lg-4">
															<label>EKG</label>
															<div class="input-group">
																<?php
																if ($row['ekg']==NULL) { ?>
																	<div align="center">
																		<img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
																	</div>
																<?php }else{ ?>
																	<div align="center">
																		<img src="<?= 'assets/uploads/object/'. $row['ekg'];?>" class="lingkaran" alt="" />
																	</div>   
																<?php } ?>
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- END DETAIL SOAP & KETERANGAN -->
									<!-- DETAIL UPDATE LAB -->
									<div class="modal fade" id="updatefilelab<?= $row['id']?>" role="dialog">
										<div class="modal-dialog modal-md">
											<div class="modal-content">
												<div class="modal-header">
													<label class="modal-title">Update File LAB <br> a.n <?= $row['no_rm']; ?></label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form class="form-horizontal form-bordered" action="pages/MInputBODJ/MInputBODJ_file.php" method="POST" enctype="multipart/form-data">
														<div class="row">
															<label class="col-lg-4 col-form-label">Upload Berkas Digital Sebelumnya</label>
															<div class="col-lg-8">
																<div class="input-group">
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
														</div>
														<hr>
														<div class="form-group">
															<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Tutup</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- END UPDATE LAB -->
									<!-- DETAIL UPDATE RONTGENT -->
									<div class="modal fade" id="updatefilerontgen<?= $row['id']?>" role="dialog">
										<div class="modal-dialog modal-md">
											<div class="modal-content">
												<div class="modal-header">
													<label class="modal-title">Update File Rontgent <br> a.n <?= $row['no_rm']; ?></label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form class="form-horizontal form-bordered" action="pages/MInputBODJ/MInputBODJ_file.php" method="POST" enctype="multipart/form-data">
														<div class="row">
															<label class="col-lg-4 col-form-label">Upload Berkas Digital Sebelumnya</label>
															<div class="col-lg-8">
																<div class="input-group">
																	<?php
																	if ($row['rontgent']==NULL) { ?>
																		<div align="center">
																			<img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
																		</div>
																	<?php }else{ ?>
																		<div align="center">
																			<img src="<?= 'assets/uploads/object/'. $row['rontgent'];?>" class="lingkaran" alt="" />
																		</div>   
																	<?php } ?>
																</div>
															</div>
														</div>
														<hr>
														<div class="form-group">
															<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Tutup</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- END UPDATE RONTGENT -->
									<!-- DETAIL UPDATE EKG -->
									<div class="modal fade" id="updatefileekg<?= $row['id']?>" role="dialog">
										<div class="modal-dialog modal-md">
											<div class="modal-content">
												<div class="modal-header">
													<label class="modal-title">Update File EKG <br> a.n <?= $row['no_rm']; ?></label>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												<div class="modal-body">
													<form class="form-horizontal form-bordered" action="pages/MInputBODJ/MInputBODJ_file.php" method="POST" enctype="multipart/form-data">
														<div class="row">
															<label class="col-lg-4 col-form-label">Upload Berkas Digital Sebelumnya</label>
															<div class="col-lg-8">
																<div class="input-group">
																	<?php
																	if ($row['ekg']==NULL) { ?>
																		<div align="center">
																			<img src="assets/uploads/object/icon/notfound.png" class="lingkaran" alt="" />
																		</div>
																	<?php }else{ ?>
																		<div align="center">
																			<img src="<?= 'assets/uploads/object/'. $row['ekg'];?>" class="lingkaran" alt="" />
																		</div>   
																	<?php } ?>
																</div>
															</div>
														</div>
														<hr>
														<div class="form-group">
															<button type="button" class="btn btn-block btn-warning" data-dismiss="modal">Tutup</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
									<!-- END UPDATE EKG -->
								<?php } ?>
								<!-- END DATA -->
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Export Datatable End -->
		</div>
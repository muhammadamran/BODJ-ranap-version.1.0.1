<?php 
if (isset($_POST['submit'])) {
	$date1 = $_POST['date1'];
	$date2 = $_POST['date2'];
	$inst = $_POST['inst'];

	if (!empty($date1) && !empty($date2) && !empty($inst)) {
		//PERINTAH TAMPIL BERDASARKAN RANGE TANGGAL
		$q = $db->query("SELECT * FROM tb_soap WHERE tgl_jaga BETWEEN '$date1' AND '$date2' AND instalasi='$inst'"); 
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
							<div class="col-xl-3">
								<img src="assets/mode/images/logo-icon.png" alt=""> <h5><b>BODJ</b> <small>RSKG</small></h5>
							</div>
							<div class="col-xl-5">
								<br>
								<h5><b>Cari Per-Periode</b><small> Buku Catatan Dokter RSKG</small></h5>
							</div>
						</div>
						<hr>
						<form method="POST" action="">
							<div class="row">
								<div class="col-xl-3">
									<label>Dari Tanggal Jaga</label>
									<input type="date" name="date1" id="date1" class="form-control" value="<?= $date1 ?>" placeholder="Tanggal Jaga..." required/>
								</div>
								<div class="col-xl-3">
									<label>Sampai Tanggal Jaga</label>
									<input type="date" name="date2" id="date2" class="form-control" value="<?= $date2 ?>" placeholder="Tanggal Jaga..." required/>
								</div>
								<div class="col-xl-4">
									<label>Pilih Instalasi</label>
									<select class="custom-select2 form-control" name="inst" id="inst" style="width: 100%; height: 38px;" required="required">
										<optgroup label="Pilih Instalasi">
											<option value="<?= $inst ?>"><?= $inst ?></option>
											<option value="">Pilih Instalasi</option>
											<option value="IGD">IGD</option>
											<option value="Rawat Jalan">Rawat Jalan</option>
											<option value="Hemodialisa">Hemodialisa</option>
											<option value="Rawat Inap">Rawat Inap</option>
										</optgroup>
									</select>
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
					<h4 class="text-blue h4">Data Pasien Berdasarkan Inputan BODJ Keseluruhan Dokter</h4>
					<hr>
					<button class="btn btn-success"><i class="icon-copy fa fa-file-excel-o" aria-hidden="true"></i> Export MS.Excel<button>
						<button class="btn btn-primary"><i class="icon-copy fa fa-file-word-o" aria-hidden="true"></i> Export MS.Word<button>
							<button class="btn btn-danger"><i class="icon-copy fa fa-file-pdf-o" aria-hidden="true"></i> Export PDF<button>
							</div>
							<div class="table-responsive">
								<div class="pb-20">
									<table class="table hover multiple-select-row data-table-export nowrap">
										<thead>
											<tr align="center">
												<th rowspan="2" class="table-plus datatable-nosort">No. RM | Nama Pasien</th>
												<th rowspan="2">Tanggal Jaga</th>
												<th rowspan="2">Dokter Jaga</th>
												<th rowspan="2">Kelas Pelayanan</th>
												<th rowspan="2">Instalasi</th>
												<th colspan="2">SOAP</th>
												<th rowspan="2">Keterangan</th>
												<th colspan="2">File</th>
											</tr>
											<tr align="center">
												<th>Subject</th>
												<th>Object</th>
												<th>Assesment</th>
												<th>Plan</th>
												<th>LAB</th>
												<th>Rontgent</th>
												<th>EKG</th>
											</tr>
										</thead>
										<tbody>
											<!-- DATA -->
											<?php
											while ($row = $q->fetch_assoc()) {
												?>
												<tr align="center">
													<td><?= $row['no_rm'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['no_rm'] ?></td>
													<td><?= $row['tgl_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : tanggal_indo($row['tgl_jaga']) ?></td>
													<td><?= $row['dokter_jaga'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['dokter_jaga'] ?></td>
													<td><?= $row['kelas'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['kelas'] ?></td>
													<td><?= $row['instalasi'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['instalasi'] ?></td>
													<td><?= $row['subject'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['subject'] ?></td>
													<td><?= $row['object'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['object'] ?></td>
													<td><?= $row['assesment'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['assesment'] ?></td>
													<td><?= $row['plan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['plan'] ?></td>
													<td><?= $row['keterangan'] == NULL ? "<i><font style='color:red;'>Not Found</font></i>" : $row['keterangan'] ?></td>
													<td>
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
													</td>
													<td>
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
													</td>
													<td>
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
													</td>
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
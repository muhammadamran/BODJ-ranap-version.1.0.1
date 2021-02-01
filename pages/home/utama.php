<div class="main-container">
	<div class="pd-ltr-20">
		<div class="card-box pd-20 height-100-p mb-30">
			<div class="row align-items-center">
				<div class="col-md-4">
					<img src="mode/vendors/images/banner-img1.png" alt="">
				</div>
				<div class="col-md-3" align="align-items-center">
					<h4 class="font-20 weight-500 mb-10 text-capitalize">
						<?= 'Selamat&nbsp;'. $salam; ?>,  <div class="weight-600 font-30 text-blue"><?= $_SESSION['nama_lengkap'];?></div>
					</h4>
					<p class="font-18 max-width-600">Sistem Informasi Manajemen Rumah Sakit.</p>
				</div>
				<div class="col-md-5" align="align-items-center">
					<img src="mode/vendors/images/16333-ai.png" alt="">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
				<div class="card-box height-100-p overflow-hidden">
					<div class="profile-tab height-100-p">
						<div class="tab height-100-p">
							<ul class="nav nav-tabs customtab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" href="#timeline" role="tab">Timeline Buku Catatan Dokter Rawat Inap - <?= tanggal_indo(date('Y-m-d'));?></a> 
								</li>
							</ul>
							<div class="tab-content">
								<!-- Timeline Tab start -->
								<div class="tab-pane fade show active" id="timeline" role="tabpanel">
									<div class="pd-20">
										<div class="profile-timeline">
											<div class="profile-timeline-list">
												<ul>
													<?php 
													$sesi= $_SESSION['nama_lengkap'];
													$data = $db->query("SELECT a.kd_soap,a.no_rm,a.nama_pasien,a.kelas,a.dokter_jaga,						b.kd_soap,b.status,b.date_add
														FROM tb_soap a JOIN tb_soaplog b
														ON a.kd_soap=b.kd_soap
														ORDER BY b.kd_soap DESC LIMIT 5", 0);
													while($row = $data->fetch_assoc()) {
														?>
													<?php if ($row['status']=='0') { ?>
													<li>
														<div class="date"><?= tanggal_indo(date('Y-m-d',strtotime($row['date_add']))); ?></div>
														<div class="task-name"><i class="icon-copy ion-clipboard"></i> SOAP Baru dari <?= $row['dokter_jaga']; ?></div>
														<p>Dengan Pasien a.n <?= $row['nama_pasien']; ?><br> <?= $row['no_rm']; ?>.</p>
														<div class="task-time"><?= date('H:i',strtotime($row['date_add'])); ?> WIB</div>
													</li>
													<?php }elseif ($row['status']=='1') { ?>
													<li>
														<div class="date"><?= tanggal_indo(date('Y-m-d',strtotime($row['date_add']))); ?></div>
														<div class="task-name"><i class="icon-copy ion-loop"></i> Update SOAP dari <?= $row['dokter_jaga']; ?></div>
														<p>Dengan Pasien a.n <?= $row['nama_pasien']; ?><br> <?= $row['no_rm']; ?>.</p>
														<div class="task-time"><?= date('H:i',strtotime($row['date_add'])); ?> WIB</div>
													</li>
													<?php } } ?>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-30">
				<div class="pd-20 card-box mb-30">
					<div class="row">
						<div class="col-xl-4">
							<img src="assets/mode/images/logo-icon.png" alt=""> <h5><b>BODJ</b> <small>Rawat Inap</small></h5>
						</div>
						<div class="col-xl-8">
							<h5 align="left">Enter Your Schedule Here </h5>
						</div>
					</div>
					<hr>
					<div class="calendar-wrap">
						<div id='calendar'></div>
					</div>
					<!-- calendar modal -->
					<div id="modal-view-event" class="modal modal-top fade calendar-modal">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<div class="modal-body">
									<h4 class="h4"><span class="event-icon weight-400 mr-3"></span><span class="event-title"></span></h4>
									<div class="event-body"></div>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form id="add-event">
									<div class="modal-body">
										<h4 class="text-blue h4 mb-10">Add Event Detail</h4>
										<div class="form-group">
											<label>Event name</label>
											<input type="text" class="form-control" name="ename">
										</div>
										<div class="form-group">
											<label>Event Date</label>
											<input type='text' class="datetimepicker form-control" name="edate">
										</div>
										<div class="form-group">
											<label>Event Description</label>
											<textarea class="form-control" name="edesc"></textarea>
										</div>
										<div class="form-group">
											<label>Event Color</label>
											<select class="form-control" name="ecolor">
												<option value="fc-bg-default">fc-bg-default</option>
												<option value="fc-bg-blue">fc-bg-blue</option>
												<option value="fc-bg-lightgreen">fc-bg-lightgreen</option>
												<option value="fc-bg-pinkred">fc-bg-pinkred</option>
												<option value="fc-bg-deepskyblue">fc-bg-deepskyblue</option>
											</select>
										</div>
										<div class="form-group">
											<label>Event Icon</label>
											<select class="form-control" name="eicon">
												<option value="circle">circle</option>
												<option value="cog">cog</option>
												<option value="group">group</option>
												<option value="suitcase">suitcase</option>
												<option value="calendar">calendar</option>
											</select>
										</div>
									</div>
									<div class="modal-footer">
										<button type="submit" class="btn btn-primary" >Save</button>
										<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
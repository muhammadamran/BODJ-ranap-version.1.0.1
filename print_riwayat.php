<?php 
  session_start();
  include "db/db.php";
  include "db/pg.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BODJ Rawat Inap - &copy; RS. Khusus Ginjal Ny.R.A. Habibie </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/mode/images/logo-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/mode/images/logo-icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/mode/images/logo-icon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="mode/vendors/styles/core.css">
  <link rel="stylesheet" type="text/css" href="mode/vendors/styles/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="mode/vendors/styles/style.css">

  <link rel="stylesheet" type="text/css" href="mode/src/plugins/datatables/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" type="text/css" href="mode/src/plugins/datatables/css/responsive.bootstrap4.min.css">

  <link rel="stylesheet" type="text/css" href="mode/src/plugins/fullcalendar/fullcalendar.css">

  <script type="text/javascript" src="mode/ckeditor/ckeditor.js"></script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
  </script>
  <script type="text/javascript"> 
    function display_c(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct()',refresh)
  }
  function display_ct() {
    var x = new Date()
    document.getElementById('ct').innerHTML = x;
    display_c();
  }
</script>
</head>
<style type="text/css">
  .lingkaran-print{
    width: 100%;
    height: 100%;
    background: #fff;
    /* border-radius: 100%; */
  }

  .lingkaran-print-detail{
    width: 200px;
    height: 200px;
    background: #fff;
    border-radius: 100%; 
  }
</style>
<script type="text/javascript"> 
  function display_c(){
  var refresh=1000; // Refresh rate in milli seconds
  mytime=setTimeout('display_ct()',refresh)
}
function display_ct() {
  var x = new Date()
  document.getElementById('ct').innerHTML = x;
  display_c();
}
</script>
<?php
function tanggal_indo($tanggal, $cetak_hari = false)
{
  $hari = array ( 1 =>    
    'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu',
    'Minggu'
  );
  $bulan = array (1 =>   
    'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $split    = explode('-', $tanggal);
  $tgl_indo = $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
  
  if ($cetak_hari) {
    $num = date('N', strtotime($tanggal));
    return $hari[$num] . ', ' . $tgl_indo;
  }
  return $tgl_indo;
}
?>
<?php
date_default_timezone_set("Asia/Jakarta");

$jam = date('H:i');

if ($jam > '05:30' && $jam < '10:00') {
  $salam = 'Pagi';
} elseif ($jam >= '10:00' && $jam < '15:00') {
  $salam = 'Siang';
} elseif ($jam < '18:00') {
  $salam = 'Sore';
} else {
  $salam = 'Malam';
}
?>
<body style="background-color:#fff">
<?php
$data2 = $db->query('SELECT * FROM tb_soap WHERE no_rm="'.$_GET['no_rm'].'"');
$row2 = $data2->fetch_assoc()
?>
<div class="min-height-200px">
    <div class="page-header">
        <div class="row">
            <div class="col-md-3 col-sm-12 text-center">
                <img src="assets/img/logo/rskg.png">
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <h4><b>RUMAH SAKIT KHUSUS GINJAL NY.R.A. HABIBIE</b></h4>
                <label><b>BUKU CATATAN DOKTER RAWAT INAP</b></label>
            </div>
            <div class="col-md-3 col-sm-12 text-center">
                <!-- <img src="assets/img/logo/rskg.png"> -->
            </div>
        </div>
        <hr>
    </div>
    <div class="page-header">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="title">
                    <h3><span class="micon dw dw-edit2"></span> Riwayat Pasien a.n <?= $row2['no_rm']; ?></h3>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Riwayat Pasien a.n <?= $row2['no_rm']; ?></li>
                    </ol>
                    <hr>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <label>Print Riwayat Pasien a.n <?= $row2['no_rm']; ?> yang diinput oleh Dokter Jaga Rawat Inap sebelumnya.</label> <br><hr>
                            <input type=button class="btn btn-light" onclick="window.print()" value='Print'>
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 col-sm-12 text-center">
                <img src="mode/vendors/images/02.png">
            </div>
        </div>
    </div>
    <div class="card-box mb-30">
        <div class="responsive">
            <div class="pd-20">

                <!-- IDENTITAS -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <button class="btn btn-block btn-danger"><i class="fas fa-file-alt"></i> IDENTITAS PASIEN</button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6" align="center">
                                        <p><b>Identitas Pasien</b></p>
                                        <p>No.Rekam Medis: <?= $row2['no_rm']; ?></p>
                                        <p>Nama Pasien: <?= $row2['nama_pasien']; ?></p>
                                        <p>Kelas: <?= $row2['nama_pasien']; ?></p>
                                    </div>
                                    <div class="col-lg-6" align="center">
                                        <p><b>Dokter</b></p>
                                        <p>Tanggal Dokter Jaga: <?= $row2['tgl_jaga']; ?></p>
                                        <p>Dokter: <?= $row2['dokter_jaga']; ?></p>
                                        <p>DPJP: <?= $row2['DPJP']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END IDENTITAS -->

                <!-- RIWAYAT -->
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <?php 
                                $data = $db->query('SELECT * FROM tb_soap WHERE no_rm="'.$_GET['no_rm'].'" ORDER BY tgl_jaga DESC');
                                while($row = $data->fetch_assoc()) {
                                    ?>        
                                    <h4 class="card-title"><button class="btn btn-xs btn-danger"><?php echo tanggal_indo($row['tgl_jaga'],true); ?> | Oleh Dokter <?php echo $row['dokter_jaga']; ?></button>
                                    </h4>
                                    <hr>
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Dokter Jaga</label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="dokter_jaga" value="<?= $row['dokter_jaga'];?>" placeholder="Dokter Jaga..." readonly/>
                                                <input type="text" class="form-control" name="date_created" value="<?= $row['date_created'];?>" placeholder="Dokter Jaga..." readonly/>
                                                <input type="hidden" name="kd_soap" value="<?= $row['kd_soap']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Tanggal Jaga</label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <input type="date" class="form-control" name="tgl_jaga" placeholder="Tanggal Jaga..." value="<?= $row['tgl_jaga'];?>" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">No. Rekam Medis / Nama Pasien</label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <select class="custom-select2 form-control" name="no_rm" style="width: 100%; height: 38px;" required="required">
                                                    <optgroup label="Pilih Data No.Rekam Medis / Nama Pasien">
                                                        <option value="<?= $row['no_rm'] ?>"><?= $row['no_rm'] ?></option>
                                                        <?php
                                                        $result_a = pg_query($pg, "SELECT * FROM pasien_m ORDER BY create_time DESC LIMIT 5000");
                                                        while ($row_a = pg_fetch_assoc($result_a)) {
                                                            ?>
                                                            <option value="<?= $row_a['no_rekam_medik'] ?> | <?= $row_a['namadepan'] ?> <?= $row_a['nama_pasien'] ?>"><?= $row_a['no_rekam_medik'] ?> | <?= $row_a['namadepan'] ?> <?= $row_a['nama_pasien'] ?></option>
                                                        <?php } ?>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Kelas</label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <select class="custom-select2 form-control" name="kelas" style="width: 100%; height: 38px;" required="required">
                                                    <optgroup label="Pilih Kelas Pelayanan">
                                                        <option value="<?= $row['kelas'] ?>"><?= $row['kelas'] ?></option>
                                                        <?php
                                                        $result_b = pg_query($pg, "SELECT * FROM kelaspelayanan_m");
                                                        while ($row_b = pg_fetch_assoc($result_b)) {
                                                            ?>
                                                            <option value="<?= $row_b['kelaspelayanan_nama'] ?>"><?= $row_b['kelaspelayanan_nama'] ?></option>
                                                        <?php } ?>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">DPJP</label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <select class="custom-select2 form-control" name="DPJP" style="width: 100%; height: 38px;" required="required">
                                                    <optgroup label="Pilih DPJP">
                                                        <option value="<?= $row['DPJP'] ?>"><?= $row['DPJP'] ?></option>
                                                        <?php
                                                        $data_c = $db->query("SELECT * FROM tb_dpjp WHERE status='Aktif'", 0);
                                                        while($row_c = $data_c->fetch_assoc()) {
                                                            ?>
                                                            <option value="<?= $row_c['gelar_depan'] ?><?= $row_c['nama_dpjp'] ?><?= $row_c['gelar_belakang'] ?>"><?= $row_c['gelar_depan'] ?><?= $row_c['nama_dpjp'] ?><?= $row_c['gelar_belakang'] ?></option>
                                                        <?php } ?>
                                                    </optgroup>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div align="center">
                                        <h5>Subject</h5>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <textarea type="text" class="ckeditor" id="ckedtor" name="subject" placeholder="Subject..." required="required"><?= $row['subject'] ?></textarea>
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
                                                <textarea type="text" class="ckeditor" id="ckedtor" name="object" placeholder="Object..." required="required"><?= $row['object'] ?></textarea>
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
                                                <textarea type="text" class="ckeditor" id="ckedtor" name="assesment" placeholder="Assesment..." required="required"><?= $row['assesment'] ?></textarea>
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
                                                <textarea type="text" class="ckeditor" id="ckedtor" name="plan" placeholder="Plan..." required="required"><?= $row['plan'] ?></textarea>
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
                                                <textarea type="text" class="ckeditor" id="ckedtor" name="keterangan" placeholder="Keterangan..." required="required"><?= $row['keterangan'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div align="center">
                                        <h5>Berkas LAB, Rontgent & EKG Pasien</h5>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- <label>LAB</label> -->
                                            <div class="input-group">
                                                <?php
                                                if ($row['berkas']==NULL) { ?>
                                                    <div align="center">
                                                        <!-- <img src="assets/uploads/object/icon/notfound.png" class="lingkaran-print" alt="" /> -->
                                                    </div>
                                                <?php }else{ ?>
                                                    <div align="center">
                                                        <img src="<?= 'assets/uploads/object/'. $row['berkas'];?>" class="lingkaran-print" alt="" />
                                                    </div>   
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <!-- <label>Rontgent</label> -->
                                            <div class="input-group">
                                                <?php
                                                if ($row['rontgent']==NULL) { ?>
                                                    <div align="center">
                                                        <!-- <img src="assets/uploads/object/icon/notfound.png" class="lingkaran-print" alt="" /> -->
                                                    </div>
                                                <?php }else{ ?>
                                                    <div align="center">
                                                        <img src="<?= 'assets/uploads/object/'. $row['rontgent'];?>" class="lingkaran-print" alt="" />
                                                    </div>   
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <!-- <label>EKG</label> -->
                                            <div class="input-group">
                                                <?php
                                                if ($row['ekg']==NULL) { ?>
                                                    <div align="center">
                                                        <!-- <img src="assets/uploads/object/icon/notfound.png" class="lingkaran-print" alt="" /> -->
                                                    </div>
                                                <?php }else{ ?>
                                                    <div align="center">
                                                        <img src="<?= 'assets/uploads/object/'. $row['ekg'];?>" class="lingkaran-print" alt="" />
                                                    </div>   
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END RIWAYAT -->
            </div>
        </div>
    </div>
</div>
	<script src="mode/vendors/scripts/core.js"></script>
	<script src="mode/vendors/scripts/script.min.js"></script>
	<script src="mode/vendors/scripts/process.js"></script>
	<script src="mode/vendors/scripts/layout-settings.js"></script>
	<script src="mode/src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="mode/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="mode/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="mode/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="mode/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="mode/vendors/scripts/dashboard.js"></script>
	<script src="mode/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
	<script src="mode/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
	<script src="mode/src/plugins/datatables/js/buttons.print.min.js"></script>
	<script src="mode/src/plugins/datatables/js/buttons.html5.min.js"></script>
	<script src="mode/src/plugins/datatables/js/buttons.flash.min.js"></script>
	<script src="mode/src/plugins/datatables/js/pdfmake.min.js"></script>
	<script src="mode/src/plugins/datatables/js/vfs_fonts.js"></script>
	<script src="mode/vendors/scripts/datatable-setting.js"></script>

	<script src="mode/src/plugins/highcharts-6.0.7/code/highcharts.js"></script>
	<script src="https://code.highcharts.com/highcharts-3d.js"></script>
	<script src="mode/src/plugins/highcharts-6.0.7/code/highcharts-more.js"></script>
	<script src="mode/vendors/scripts/highchart-setting.js"></script>

	<script src="mode/src/plugins/jQuery-Knob-master/jquery.knob.min.js"></script>
	<script src="mode/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
	<script src="mode/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="mode/vendors/scripts/dashboard2.js"></script>

	<script src="mode/src/plugins/fullcalendar/fullcalendar.min.js"></script>
	<script src="mode/vendors/scripts/calendar-setting.js"></script>
</body>
</html>
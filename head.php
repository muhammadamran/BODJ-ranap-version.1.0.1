<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>BODJ Rawat Inap- &copy; RS. Khusus Ginjal Ny.R.A. Habibie </title>
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
  .lingkaran{
    width: 200px;
    height: 200px;
    background: #fff;
    /* border-radius: 100%; */
  }

  .lingkaran-detail{
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
<body onload=display_ct();>
  <div class="pre-loader">
    <div class="pre-loader-box">
      <div class="loader-logo" style="color: #000">
        <img src="assets/mode/images/logo-icon.png" alt=""> <h3><b>BODJ</b> <small>Rawat Inap</small></h3>
      </div>
      <div class='loader-progress' id="progress_div">
        <div class='bar' id='bar1'></div>
      </div>
      <div class='percent' id='percent1'>0%</div>
      <div class="loading-text">
        Loading...
      </div>
    </div>
  </div>

<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/mode/images/favicon.png">
    <title>BODJ Rawat Inap | Dashboard</title>
    <link href="assets/mode/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="assets/mode/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/mode/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/mode/dist/css/style.min.css" rel="stylesheet">
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
    <link href="assets/mode/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
</head>
<style type="text/css">
	.lingkaran{
		width: 200px;
		height: 200px;
		background: #fff;
		/* border-radius: 100%; */
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
<body onload=display_ct();>
	<div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
	</div>
	<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
	
<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT
if ($aksi == 'insert') {
    $SIP = $_POST['SIP'];
    $gelar_depan = $_POST['gelar_depan'];
    $nama_dpjp = $_POST['nama_dpjp'];
    $gelar_belakang = $_POST['gelar_belakang'];
    $spesialis = $_POST['spesialis'];
    $status = $_POST['status'];
    $adding_by = $_POST['adding_by'];
    $adding_date  = $_POST['adding_date'];
    
    $insert = $db->query('INSERT INTO tb_dpjp 
        (SIP,gelar_depan,nama_dpjp,gelar_belakang,spesialis,status,adding_by,adding_date) 
        VALUES 
        ("'.$SIP.'","'.$gelar_depan.'","'.$nama_dpjp.'","'.$gelar_belakang.'","'.$spesialis.'","'.$status.'","'.$adding_by.'","'.$adding_date.'")');

    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=Cdpjp&s=Cdpjp"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES DATA UPDATE
} else if ($aksi == 'update') {
    $id = $_GET['id'];
    $SIP = $_POST['SIP'];
    $gelar_depan = $_POST['gelar_depan'];
    $nama_dpjp = $_POST['nama_dpjp'];
    $gelar_belakang = $_POST['gelar_belakang'];
    $spesialis = $_POST['spesialis'];
    $status = $_POST['status'];
    
    $update = $db->query('UPDATE tb_dpjp SET SIP="'.$SIP.'",
        gelar_depan="'.$gelar_depan.'",
        nama_dpjp="'.$nama_dpjp.'",
        gelar_belakang="'.$gelar_belakang.'",
        spesialis="'.$spesialis.'",
        status="'.$status.'"
        WHERE id="'.$id.'"');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=Cdpjp&s=Cdpjp"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }
// HAPUS DATA
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_dpjp WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=Cdpjp&s=Cdpjp"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
}
<?php
include '../../db/db.php';
$aksi = $_GET['aksi'];
// PROSES INPUT RAWAT INAP
if ($aksi == 'insert') {
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    $instalasi = 'Rawat Inap';

    // LAB
    $pathl = $_FILES['berkas']['name'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathl);

    // Rontgent
    $pathr = $_FILES['rontgent']['name'];
    $file_tmp = $_FILES['rontgent']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathr);
    
    // EKG
    $pathe = $_FILES['ekg']['name'];
    $file_tmp = $_FILES['ekg']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathe);
    
    $insert = $db->query('INSERT INTO tb_soap 
        (kd_soap,no_rm,kelas,dokter_jaga,DPJP,subject,object,assesment,plan,keterangan,date_created,tgl_jaga,berkas,rontgent,ekg,instalasi) 
        VALUES 
        ("'.$kd_soap.'","'.$no_rm.'","'.$kelas.'","'.$dokter_jaga.'","'.$DPJP.'","'.$subject.'","'.$object.'","'.$assesment.'","'.$plan.'","'.$keterangan.'","'.$date_created.'","'.$tgl_jaga.'","'.$pathl.'","'.$pathr.'","'.$pathe.'","'.$instalasi.'")');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","0","'.$date_created.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_RI"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES INPUT IGD
} else if ($aksi == 'insert_igd') {
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    $instalasi = 'IGD';

    // LAB
    $pathl = $_FILES['berkas']['name'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathl);

    // Rontgent
    $pathr = $_FILES['rontgent']['name'];
    $file_tmp = $_FILES['rontgent']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathr);
    
    // EKG
    $pathe = $_FILES['ekg']['name'];
    $file_tmp = $_FILES['ekg']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathe);
    
    $insert = $db->query('INSERT INTO tb_soap 
        (kd_soap,no_rm,kelas,dokter_jaga,DPJP,subject,object,assesment,plan,keterangan,date_created,tgl_jaga,berkas,rontgent,ekg,instalasi) 
        VALUES 
        ("'.$kd_soap.'","'.$no_rm.'","'.$kelas.'","'.$dokter_jaga.'","'.$DPJP.'","'.$subject.'","'.$object.'","'.$assesment.'","'.$plan.'","'.$keterangan.'","'.$date_created.'","'.$tgl_jaga.'","'.$pathl.'","'.$pathr.'","'.$pathe.'","'.$instalasi.'")');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","0","'.$date_created.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_IGD"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES INPUT HEMODIALISA
} else if ($aksi == 'insert_hd') {
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    $instalasi = 'Hemodialisa';

    // LAB
    $pathl = $_FILES['berkas']['name'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathl);

    // Rontgent
    $pathr = $_FILES['rontgent']['name'];
    $file_tmp = $_FILES['rontgent']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathr);
    
    // EKG
    $pathe = $_FILES['ekg']['name'];
    $file_tmp = $_FILES['ekg']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathe);
    
    $insert = $db->query('INSERT INTO tb_soap 
        (kd_soap,no_rm,kelas,dokter_jaga,DPJP,subject,object,assesment,plan,keterangan,date_created,tgl_jaga,berkas,rontgent,ekg,instalasi) 
        VALUES 
        ("'.$kd_soap.'","'.$no_rm.'","'.$kelas.'","'.$dokter_jaga.'","'.$DPJP.'","'.$subject.'","'.$object.'","'.$assesment.'","'.$plan.'","'.$keterangan.'","'.$date_created.'","'.$tgl_jaga.'","'.$pathl.'","'.$pathr.'","'.$pathe.'","'.$instalasi.'")');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","0","'.$date_created.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_HD"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }
// PROSES INPUT RAWAT JALAN
} else if ($aksi == 'insert_rj') {
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    $instalasi = 'Rawat Jalan';

    // LAB
    $pathl = $_FILES['berkas']['name'];
    $file_tmp = $_FILES['berkas']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathl);

    // Rontgent
    $pathr = $_FILES['rontgent']['name'];
    $file_tmp = $_FILES['rontgent']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathr);
    
    // EKG
    $pathe = $_FILES['ekg']['name'];
    $file_tmp = $_FILES['ekg']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathe);
    
    $insert = $db->query('INSERT INTO tb_soap 
        (kd_soap,no_rm,kelas,dokter_jaga,DPJP,subject,object,assesment,plan,keterangan,date_created,tgl_jaga,berkas,rontgent,ekg,instalasi) 
        VALUES 
        ("'.$kd_soap.'","'.$no_rm.'","'.$kelas.'","'.$dokter_jaga.'","'.$DPJP.'","'.$subject.'","'.$object.'","'.$assesment.'","'.$plan.'","'.$keterangan.'","'.$date_created.'","'.$tgl_jaga.'","'.$pathl.'","'.$pathr.'","'.$pathe.'","'.$instalasi.'")');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","0","'.$date_created.'")');
    if ($insert) {
        echo '<script>alert("Data berhasil ditambahkan");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_RJ"</script>';
    } else {
        echo '<script>alert("Data gagal ditambahkan");history.go(-1)</script>';
    }


// PROSES DATA UPDATE RAWAT INAP
} else if ($aksi == 'update') {
    $id = $_GET['id'];
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    
    $update = $db->query('UPDATE tb_soap SET no_rm="'.$no_rm.'",
        kelas="'.$kelas.'",
        dokter_jaga="'.$dokter_jaga.'",
        DPJP="'.$DPJP.'",
        subject="'.$subject.'",
        object="'.$object.'",
        assesment="'.$assesment.'",
        plan="'.$plan.'",
        keterangan="'.$keterangan.'",
        date_created="'.$date_created.'",
        tgl_jaga="'.$tgl_jaga.'"
        WHERE id="'.$id.'"');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","1","'.$date_created.'")');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_RI"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }
// PROSES DATA UPDATE IGD
} else if ($aksi == 'update_igd') {
    $id = $_GET['id'];
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    
    $update = $db->query('UPDATE tb_soap SET no_rm="'.$no_rm.'",
        kelas="'.$kelas.'",
        dokter_jaga="'.$dokter_jaga.'",
        DPJP="'.$DPJP.'",
        subject="'.$subject.'",
        object="'.$object.'",
        assesment="'.$assesment.'",
        plan="'.$plan.'",
        keterangan="'.$keterangan.'",
        date_created="'.$date_created.'",
        tgl_jaga="'.$tgl_jaga.'"
        WHERE id="'.$id.'"');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","1","'.$date_created.'")');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_IGD"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }
// PROSES DATA UPDATE RAWAT JALAN
} else if ($aksi == 'update_rj') {
    $id = $_GET['id'];
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    
    $update = $db->query('UPDATE tb_soap SET no_rm="'.$no_rm.'",
        kelas="'.$kelas.'",
        dokter_jaga="'.$dokter_jaga.'",
        DPJP="'.$DPJP.'",
        subject="'.$subject.'",
        object="'.$object.'",
        assesment="'.$assesment.'",
        plan="'.$plan.'",
        keterangan="'.$keterangan.'",
        date_created="'.$date_created.'",
        tgl_jaga="'.$tgl_jaga.'"
        WHERE id="'.$id.'"');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","1","'.$date_created.'")');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_RJ"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }
// PROSES DATA UPDATE HD
} else if ($aksi == 'update_hd') {
    $id = $_GET['id'];
    $kd_soap = $_POST['kd_soap'];
    $no_rm = $_POST['no_rm'];
    $kelas = $_POST['kelas'];
    $dokter_jaga = $_POST['dokter_jaga'];
    $DPJP = $_POST['DPJP'];
    $subject  = $_POST['subject'];
    $object = $_POST['object'];
    $assesment = $_POST['assesment'];
    $plan = $_POST['plan'];
    $keterangan = $_POST['keterangan'];
    $date_created = $_POST['date_created'];
    $tgl_jaga = $_POST['tgl_jaga'];
    
    $update = $db->query('UPDATE tb_soap SET no_rm="'.$no_rm.'",
        kelas="'.$kelas.'",
        dokter_jaga="'.$dokter_jaga.'",
        DPJP="'.$DPJP.'",
        subject="'.$subject.'",
        object="'.$object.'",
        assesment="'.$assesment.'",
        plan="'.$plan.'",
        keterangan="'.$keterangan.'",
        date_created="'.$date_created.'",
        tgl_jaga="'.$tgl_jaga.'"
        WHERE id="'.$id.'"');

    $insert2 = $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","1","'.$date_created.'")');

    if ($update) {
        echo '<script>alert("Data berhasil diUpdate");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_HD"</script>';
    } else {
        echo '<script>alert("Data gagal diUpdate");history.go(-1)</script>';
    }

// HAPUS RAWAT JALAN
} else if ($aksi == 'hapus') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_soap WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_RI"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// HAPUS IGD
} else if ($aksi == 'hapus_igd') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_soap WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_IGD"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// HAPUS RAWAT JALAN
} else if ($aksi == 'hapus_rj') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_soap WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_RJ"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
// HAPUS HEMODIALISA
} else if ($aksi == 'hapus_hd') {
    $id = $_GET['id'];
    $hapus = $db->query('DELETE FROM tb_soap WHERE id="'.$id.'"');

    if ($hapus) {
        echo '<script>alert("Data berhasil dihapus");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ_HD"</script>';
    } else {
        echo '<script>alert("Data gagal dihapus");history.go(-1)</script>';
    }
    
}
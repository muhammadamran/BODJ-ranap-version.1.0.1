<?php
session_start();

include '../../db/db.php';

if(isset($_POST["updatel"]))    
{
    $id      	    = $_POST['id'];
    $kd_soap      	= $_POST['kd_soap'];
    $date_created   = date('Y-m-d H:m:i');

    $pathl           = $_FILES['berkas']['name'];
	$file_tmp       = $_FILES['berkas']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathl);

	$query = $db->query("UPDATE tb_soap SET berkas = '$pathl'
                                        WHERE id ='$id'");

	$query .= $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","2","'.$date_created.'")');
    
	if($query){
    echo '<script>alert("File LAB berhasil diupdate");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ"</script>';
	} else {
		echo "Updated Failed - Please contact your Administrator";
	}
}

if(isset($_POST["updater"]))    
{
    $id      	    = $_POST['id'];
    $kd_soap      	= $_POST['kd_soap'];
    $date_created   = date('Y-m-d H:m:i');

    $pathr           = $_FILES['rontgent']['name'];
	$file_tmp       = $_FILES['rontgent']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathr);

	$query = $db->query("UPDATE tb_soap SET rontgent = '$pathr'
                                        WHERE id ='$id'");

	$query .= $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","3","'.$date_created.'")');
    
	if($query){
    echo '<script>alert("File Rontgent berhasil diupdate");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ"</script>';
	} else {
		echo "Updated Failed - Please contact your Administrator";
	}
}

if(isset($_POST["updatee"]))    
{
    $id      	    = $_POST['id'];
    $kd_soap      	= $_POST['kd_soap'];
    $date_created   = date('Y-m-d H:m:i');

    $pathe           = $_FILES['ekg']['name'];
	$file_tmp       = $_FILES['ekg']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$pathe);

	$query = $db->query("UPDATE tb_soap SET ekg = '$pathe'
                                        WHERE id ='$id'");

	$query .= $db->query('INSERT INTO tb_soaplog
        (kd_soap,status,date_add) 
        VALUES 
        ("'.$kd_soap.'","4","'.$date_created.'")');
    
	if($query){
    echo '<script>alert("File EKG berhasil diupdate");location.href = "../../index.php?m=MInputBODJ&s=MInputBODJ"</script>';
	} else {
		echo "Updated Failed - Please contact your Administrator";
	}
}
?>
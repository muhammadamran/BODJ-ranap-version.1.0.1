<?php
session_start();

include '../../db/db.php';

if(isset($_POST["updatefile"]))    
{
    $id      	    = $_POST['id'];

    $path           = $_FILES['berkas']['name'];
	$file_tmp       = $_FILES['berkas']['tmp_name'];

    move_uploaded_file($file_tmp, "../../assets/uploads/object/".$path);

	$query = $db->query("UPDATE tb_soap SET berkas = '$path'
                                        WHERE id ='$id'");
    
	if($query){
    echo '<script>alert("File berhasil diupdate");location.href = "../../index.php?m=bodj&s=bodj"</script>';
	} else {
		echo "Updated Failed - Please contact your Administrator";
	}
}
?>
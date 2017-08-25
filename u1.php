<head>
	<META HTTP-EQUIV="REFRESH" 
	CONTENT="0; URL='in/d12e.php'">
</head>


<?php
include('config.php');

// keamanan saat mereka input
$pic = mysqli_real_escape_string($link, $_POST['pic']);

 
// memasukan query
$sql = "INSERT INTO item ( 
foto
) VALUES (
'$pic'

)";

$q = "SELECT * FROM folder WHERE id='1'";
$r = mysqli_query ($link,$q);
$rs = mysqli_fetch_array ($r);

$gambar = $rs ['baru'];

if(mysqli_query($link, $sql )){
	echo "Berhasil Menyimpan.";
	
	// FUNGSI UPLOAD OTOMATIS
$allowed = array('png', 'jpg', 'gif', 'xls', 'doc', 'docx', 'xlsx', 'zip');

if(isset($_FILES['foto']) && $_FILES['foto']['error'] == 0){

	$extension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);

	if(!in_array(strtolower($extension), $allowed)){
		echo '{"status":"error"}';
		exit;
	}

	if(move_uploaded_file($_FILES['foto']['tmp_name'], "$gambar/".$_FILES['foto']['name'])){
		echo '{"status":"success"}';
		exit;
	}
}
//move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name']);
	
} else{
    echo "Masalah: Tidak Bisa Mengeksekusi $sql. " . mysqli_error($link);
}

// close connection
mysqli_close($link);



?>
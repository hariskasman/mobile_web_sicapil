<head>
<META HTTP-EQUIV="REFRESH" 
CONTENT="0; URL='../index.php'">
</head>

<?php
include('../config.php');
?>

<?php
// keamanan saat mereka input (standar) : Programmer Code By Haris Saktiawan Kasman
$codx = mysqli_real_escape_string($link, $_POST['codx']);
$tgl = mysqli_real_escape_string($link, $_POST['tgl']);
//------------------------------------------------------------
$fullname = mysqli_real_escape_string($link, $_POST['fullname']);
$des = mysqli_real_escape_string($link, $_POST['des']);
$hp = mysqli_real_escape_string($link, $_POST['hp']);
$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);

 
// memasukan query
$sql = "INSERT INTO pengguna 
( 
codx,
tgl, 
fullname, 
des,
hp,
username,
password
) 

VALUES
( 
'$codx', 
'$tgl',  
'$fullname', 
'$des',
'$hp',
'$username',
'$password'
)";
//"NAMA TABLE DALAM DATABASE" (fname,lname,emaila) ------- (Nama Variable)

if(mysqli_query($link, $sql )){
    echo "Berhasil Menyimpan.";
} else{
    echo "Masalah: Tidak Bisa Mengeksekusi $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>
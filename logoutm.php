<?php
session_start(); //perintah agar file ini membaca/mengenal/memulai session
session_destroy(); // perintah menghapus semua session yg ada
header("location:m.php"); // mengalihkan halaman ke login.php
?>
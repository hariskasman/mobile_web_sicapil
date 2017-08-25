<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m3']))
	{
	header("Location:../logout.php");
	}
?>
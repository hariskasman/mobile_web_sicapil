<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m24']))
	{
	header("Location:../logout.php");
	}
?>
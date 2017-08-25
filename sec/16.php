<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m16']))
	{
	header("Location:../logout.php");
	}
?>
<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m8']))
	{
	header("Location:../logout.php");
	}
?>
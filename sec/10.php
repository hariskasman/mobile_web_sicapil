<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m10']))
	{
	header("Location:../logout.php");
	}
?>
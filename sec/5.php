<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m5']))
	{
	header("Location:../logout.php");
	}
?>
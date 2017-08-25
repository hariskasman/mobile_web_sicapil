<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m2']))
	{
	header("Location:../logout.php");
	}
?>
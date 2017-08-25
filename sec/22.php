<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m22']))
	{
	header("Location:../logout.php");
	}
?>
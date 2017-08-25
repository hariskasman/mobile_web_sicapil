<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m6']))
	{
	header("Location:../logout.php");
	}
?>
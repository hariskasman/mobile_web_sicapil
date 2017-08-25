<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m25']))
	{
	header("Location:../logout.php");
	}
?>
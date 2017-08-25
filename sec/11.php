<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m11']))
	{
	header("Location:../logout.php");
	}
?>
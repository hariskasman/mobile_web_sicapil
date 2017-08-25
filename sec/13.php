<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m13']))
	{
	header("Location:../logout.php");
	}
?>
<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m27']))
	{
	header("Location:../logout.php");
	}
?>
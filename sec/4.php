<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m4']))
	{
	header("Location:../logout.php");
	}
?>
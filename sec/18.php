<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m18']))
	{
	header("Location:../logout.php");
	}
?>
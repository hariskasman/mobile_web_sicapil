<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m26']))
	{
	header("Location:../logout.php");
	}
?>
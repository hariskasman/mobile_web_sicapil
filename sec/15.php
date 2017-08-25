<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m15']))
	{
	header("Location:../logout.php");
	}
?>
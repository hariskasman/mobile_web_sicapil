<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m14']))
	{
	header("Location:../logout.php");
	}
?>
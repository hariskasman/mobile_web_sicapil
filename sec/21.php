<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m21']))
	{
	header("Location:../logout.php");
	}
?>
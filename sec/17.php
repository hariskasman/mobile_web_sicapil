<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m17']))
	{
	header("Location:../logout.php");
	}
?>
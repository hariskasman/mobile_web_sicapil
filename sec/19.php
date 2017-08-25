<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m19']))
	{
	header("Location:../logout.php");
	}
?>
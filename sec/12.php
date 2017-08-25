<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m12']))
	{
	header("Location:../logout.php");
	}
?>
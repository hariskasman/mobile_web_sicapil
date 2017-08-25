<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m23']))
	{
	header("Location:../logout.php");
	}
?>
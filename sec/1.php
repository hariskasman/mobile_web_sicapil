<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m1']))
	{
	header("Location:../logout.php");
	}
?>
<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['log1']))
	{
	header("Location:../logout.php");
	}
?>
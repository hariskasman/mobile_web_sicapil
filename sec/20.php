<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m20']))
	{
	header("Location:../logout.php");
	}
?>
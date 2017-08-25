<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m29']))
	{
	header("Location:../logout.php");
	}
?>
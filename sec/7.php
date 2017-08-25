<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m7']))
	{
	header("Location:../logout.php");
	}
?>
<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m9']))
	{
	header("Location:../logout.php");
	}
?>
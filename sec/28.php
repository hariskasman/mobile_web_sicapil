<?php 
include("../config.php");
session_start();
if(!isset($_SESSION['m28']))
	{
	header("Location:../logout.php");
	}
?>
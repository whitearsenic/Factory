<?php
session_start();
include('include/config.php');
if(strlen($_SESSION['alogin'])==0)
	{
header('location:index.php');
}
else{
}
?>

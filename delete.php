<?php
	include"database.php";
	session_start();
	$c = $_GET["cname"];
	$d = $_GET["csec"];
	echo $_GET["cname"];
	$s="delete from class where CNAME= '$c' and CSEC='$d'";
	$db->query($s);
	echo "<script>window.open('add_class.php?mes=Data Deleted.','_self');</script>"
?>
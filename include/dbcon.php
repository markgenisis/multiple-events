<?php
	date_default_timezone_set("Asia/Manila");
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "events";
	$mysqli = new mysqli($servername, $username, $password,$db);
?>
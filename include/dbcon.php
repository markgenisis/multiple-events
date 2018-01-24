<?php
	date_default_timezone_set("Asia/Manila");
	session_start();
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "events";
	$mysqli = new mysqli($servername, $username, $password,$db);
	function getCourse($x){
		global $mysqli;
		$course=$mysqli->query("select * from course where id='$x'");
		while($row=mysqli_fetch_assoc($course)){
			echo $row['course'];
		}
	}
?>
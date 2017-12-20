<?php
include "dbcon.php";

if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$login=$mysqli->query("select * from accounts");
	while($row=mysqli_fetch_assoc($login)){
		if($username==$row['username'] && $password==$row['password']){
			$_SESSION['ACCESS']=$row['type'];
			echo $row['type']; 
			die();
		}
	}
	echo "ERROR";
}
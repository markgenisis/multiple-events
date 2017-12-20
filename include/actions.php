<?php
include "dbcon.php";
if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$sql=$mysqli->query("select * from accounts");
	while($row=mysqli_fetch_assoc($sql)){
		if($row['username']==$username && $password==$row['password']){
			$_SESSION['ACCESS']=$row['type'];
			echo $row['type'];
			die();
		}
	}
}
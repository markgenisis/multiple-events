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
	function getCourses($x){
		global $mysqli;
		$course=$mysqli->query("select * from course where id='$x'");
		while($row=mysqli_fetch_assoc($course)){
			return $row['dept_id'];
		}
	}
	function getDept($x){
		global $mysqli;
		$course=$mysqli->query("select * from dept where id='$x'");
		while($row=mysqli_fetch_assoc($course)){
			return $row['name'];
		}
	}
	function getStudent($x){
		global $mysqli;
		$student=$mysqli->query("select * from students where student_num='$x'");
		while($row=mysqli_fetch_assoc($student)){
			echo $row['name']." ".$row['m_name']." ".$row['surname'];
		}
	}
	function getStudCourse($x){
		global $mysqli;
		$student=$mysqli->query("select * from students where student_num='$x'");
		while($row=mysqli_fetch_assoc($student)){
			getCourse($row['course_id']);
		}
	}
	function getStudCourseID($x){
		global $mysqli;
		$student=$mysqli->query("select * from students where student_num='$x'");
		while($row=mysqli_fetch_assoc($student)){
			return $row['course_id'];
		}
	}
	function getEventName($x){
		global $mysqli;
		$event = $mysqli->query("select * from events where id='$x'");
		while($row = mysqli_fetch_assoc($event)){
			$eventData = array("title"=>$row['title'],"venue"=>$row['venue']);
		}	
		return $eventData;
	}
	
	function getStudName($x){
		global $mysqli;
		$sql = $mysqli->query("select * from students where student_num='$x'");
		while($row = mysqli_fetch_assoc($sql)){
			$fullName = $row['name'].' '.$row['m_name'].' '.$row['surname'];
		}
		return ucwords($fullName);
	}
	function getRequired($xx){
		global $mysqli;
		$sql = $mysqli->query("select * from required where desciplineId='$xx'") or die(mysqli_error());
		$num=mysqli_num_rows($sql);
		if($num){
		while($row = mysqli_fetch_assoc($sql)){
			echo $number = $row['number'];
		}
		}else echo "0";
		
	}
?>
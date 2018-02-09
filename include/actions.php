<?php
include "dbcon.php";

if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$login=$mysqli->query("select * from accounts where username='$username' and password='$password'");
	$num = mysqli_num_rows($login);
	if($num > 0){
			while($row=mysqli_fetch_assoc($login)){
			if($username==$row['username'] && $password==$row['password']){
				$_SESSION['ACCESS_TYPE']=$row['type'];
				echo $row['type']; 
				die();
			}
		}
	}else{
		$studLog=$mysqli->query("select * from students where student_num='$username' and password='$password' and active='1'");
		$num = mysqli_num_rows($studLog);
		if($num>0){
			while($row = mysqli_fetch_assoc($studLog)){
				$_SESSION['ACCESS_TYPE']=4;
				$_SESSION['STUD_ID']=$row['student_num'];
				echo "4"; 
			}
		}else{
			echo "ERROR";
		}
		
	}
	
}
if(isset($_POST['title'])){
	$title=$_POST['title'];
	$theme=$_POST['theme'];
	$proponents=$_POST['proponents'];
	$cooperation=$_POST['cooperation'];
	$venue=$_POST['venue'];
	$participants=$_POST['participants'];
	$date=strtotime($_POST['date']);
	$source=$_POST['source'];
	
	$insert=$mysqli->query("insert into events values ('NULL','$title','$theme','$proponents','$cooperation','$venue','$participants','$date','$source')") or die();
	if($insert){
		echo "SUCCESS";
	}
}
if(isset($_POST['name'])){
	$name=$_POST['name'];
	$middle=$_POST['middle'];
	$surname=$_POST['surname'];
	$idNum=$_POST['idNum'];
	$course=$_POST['course'];
	$studPass=md5($_POST['studPass']);
	$ins=$mysqli->query("insert into students values ('NULL','$name','$middle','$surname','$course','$idNum','$studPass','0')") or die(mysqli_error());
	
	if($ins){
		echo "SUCCESS";
	}
}
if(isset($_POST['deptID'])){
	$id=$_POST['deptID'];
	$sql=$mysqli->query("select * from course where dept_id='$id'");
	?><select class="w3-input w3-border" name="course" id="course" type="text" placeholder="Participants" required>
	<?php while($row=mysqli_fetch_assoc($sql)){
	?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['course']; ?></option>
    
	<?php } ?>
    </select>
    <?php
}
if(isset($_POST['studSurname'])){
	$surname=$_POST['studSurname'];
	$course=$_POST['courseid'];
	$search=$mysqli->query("select * from students where surname LIKE '$surname%' and active='1' and course_id='$course'");
	?>
     <table class="w3-table w3-striped">
     <tr>
     	<th>STUDENT NAME</th>
        <th>Course</th>
        <Th>ID NUMBER</Th>
        <th width="200"></th>
     </tr>
    <?php
	while($row=mysqli_fetch_assoc($search)){ ?>
	<tr>
	<td><?php echo $row['surname'].", ".$row['name']." ".$row['m_name']; ?></td>
    <td><?php getCourse($row['course_id']); ?></td>
    <td><?php echo $row['student_num']; ?></td>
    <td class="w3-right"><span class="w3-badge w3-green " style="border-radius: 5px; cursor:pointer;" onclick="location='generate.php?id=<?php echo $row['student_num']; ?>'">Barcode</span>&nbsp;<span class="w3-badge w3-blue" style="border-radius: 5px; cursor:pointer;" onclick="location='getAttendance.php?student=<?php echo $row['student_num']; ?>'">View</span></td>
    </tr>
	<?php }?>
     </table>
    <?php
}
if(isset($_POST['studID'])){
	$student=$_POST['studID'];
	$event=$_POST['eventID'];
	$now=time();
	$allowed=0;
	$dept=$mysqli->query("select * from students where student_num='$student'");
	while($row=mysqli_fetch_assoc($dept)){
		$course=getDept(getCourses($row['course_id']));
	}
		$parti=$mysqli->query("select * from events where id='$event'");
		while($part=mysqli_fetch_assoc($parti)){
			if($part['participants']=="General Assembly"){
				$allowed++;
				//die();
				}
			else if($part['participants']==$course){
				$allowed++;
			}else{
				$allowed=0;
				}
		}
	
	if($allowed>0){
		$check=$mysqli->query("select * from attendace where studentId='$student' and eventId='$event'");
		$num=mysqli_num_rows($check);
		if(!$num){
			$insert=$mysqli->query("insert into attendace values ('NULL','$student','$event','$now')") or die(mysqli_error());
			if($insert){
				echo "SUCCESS";
			}
		}else{
			echo "DUPLICATE";
		}
	}else{
	 echo "ERROR";
	}
}

if(isset($_POST['studNum'])){
	$fname=$_POST['fname'];
	$mname=$_POST['mname'];
	$lname=$_POST['lname'];
	$course=$_POST['course'];
	$studNum=$_POST['studNum'];
	$password=$_POST['studPass'];
	$check=$mysqli->query("select * from students where student_num='$studNum'");
	$num=mysqli_num_rows($check);
	if(!$num){
	$ins=$mysqli->query("insert into students values ('NULL','$fname','$mname','$lname','$course','$studNum','$password','0')") or die(mysqli_error());
	
	if($ins){
		echo "SUCCESS";
	}
	}else{
		echo "DUPLICATE";
	}
}
if(isset($_POST['approved'])){
	$id=$mysqli->query("update students set `active`='1' where id='{$_POST['approved']}'") or die(mysqli_error());
	if($id){
		echo "SUCCESS";
	}
}
if(isset($_POST['disapproved'])){
	$id=$mysqli->query("update students set `active`='2' where id='{$_POST['disapproved']}'") or die(mysqli_error());
	if($id){
		echo "SUCCESS";
	}
}
if(isset($_POST['delEvents'])){
	$id=$_POST['delEvents'];
	$sql=$mysqli->query("delete from events where id='$id'") or die(mysqli_error());
	if($sql){
		echo "SUCCESS";
	}
}
if(isset($_POST['attEvents'])){
	$students=array();
	$attdate=array();
	
	$course=$_POST['attcourse'];
	$ids=$mysqli->query("select * from attendace where eventId='{$_POST['attEvents']}'");
	while($r=mysqli_fetch_assoc($ids)){
		$stud=$mysqli->query("select * from students where student_num='{$r['studentId']}' and course_id='$course'") or die(mysqli_error());
		$num=mysqli_num_rows($stud);
		if($num){
		array_push($students,$r['studentId']);
		array_push($attdate,$r['date']);
		}
	}
	?>
    <script>
    
    $(document).ready(function() {
	$('#attendLists').DataTable({
		columnDefs: [
		   { orderable: false, targets: -1 }
		]
	});
	});
    </script>
	<table class="w3-table display dataTable no-footer" id="attendLists" >
    <thead>
    <tr>
    	<th>STUDENT NAME</th>
        <th>COURSE</th>
        <th>DATE</th>
    </tr>
    </thead>
    <tbody>
    <?php
	//print_r($students);
	//while($row=mysqli_fetch_assoc($id)){
		foreach($students as $key => $val){
		?>
	<tr>
    	<td><?php echo getStudent($val); ?></td>
        <td><?php echo getStudCourse($val); ?></td>
        <td><?php echo date("M d, Y h:i A",$attdate[$key]); ?></td>
    </tr>	
	<?php } ?>
    </tbody>
    </table>
    <?php
}
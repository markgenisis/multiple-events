<?php
include "dbcon.php";

if(isset($_POST['username'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	$login=$mysqli->query("select * from accounts");
	while($row=mysqli_fetch_assoc($login)){
		if($username==$row['username'] && $password==$row['password']){
			$_SESSION['ACCESS_TYPE']=$row['type'];
			echo $row['type']; 
			die();
		}
	}
	echo "ERROR";
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
	$ins=$mysqli->query("insert into students values ('NULL','$name','$middle','$surname','$course','$idNum','$studPass')") or die(mysqli_error());
	
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
	$search=$mysqli->query("select * from students where surname LIKE '$surname%'");
	?>
     <table class="w3-table w3-striped">
     <tr>
     	<th>STUDENT NAME</th>
        <th>Course</th>
        <Th>ID NUMBER</Th>
        <th width="100"></th>
     </tr>
    <?php
	while($row=mysqli_fetch_assoc($search)){ ?>
	<tr>
	<td><?php echo $row['surname'].", ".$row['name']." ".$row['m_name']; ?></td>
    <td><?php getCourse($row['course_id']); ?></td>
    <td><?php echo $row['student_num']; ?></td>
    <td class="w3-right"><span class="w3-badge w3-green " style="border-radius: 5px;" onclick="location='generate.php?id=<?php echo $row['student_num']; ?>'">Barcode</span></td>
    </tr>
	<?php }?>
     </table>
    <?php
}
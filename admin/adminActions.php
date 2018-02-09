<?php
include "../include/dbcon.php";

if(isset($_POST['department'])){
	$deptID=$_POST['department'];
	$desc=$mysqli->query("select * from descipline where deptId='$deptID'");
	?>
    <option></option>
    <?php
	while($row=mysqli_fetch_assoc($desc)){
		?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['descipline']; ?></option>
        <?php
	}
}
if(isset($_POST['descipline'])){
	$descID=$_POST['descipline'];
	$course=$mysqli->query("select * from course where descipline='$descID'");
	?>
    <option></option>
    <?php
	while($row=mysqli_fetch_assoc($course)){
	?>
    <option value="<?php echo $row['id']; ?>"><?php echo $row['course']; ?></option>
    <?php
	}
}
if(isset($_POST['course'])){
	?>
    <script>
		$('#regTbl').DataTable({
		columnDefs: [
		   { orderable: false, targets: -1 }
		]
	});
	</script>
    <table class="w3-table w3-bordered w3-striped display dataTable no-footer" id="regTbl" >
                        	<thead>
                            <tr>
                            	<th width="">STUDENT FULL NAME</th>
                                <th>COURSE</th>
                                <th>STUDENT NUMBER</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php //echo $_POST['course'];
								$stud=$mysqli->query("select * from students where course_id='{$_POST['course']}' and active='0'") or die(mysqli_error());
								while($row=mysqli_fetch_assoc($stud)){
							?>
                            <tr>
                            	<td><?php echo $row['surname'].", ".$row['name']." ".$row['m_name']; ?></td>
                                <td><?php  echo getCourse($row['course_id']);?></td>
                                <td><?php  echo $row['student_num'];?></td>
                                <td><span class="w3-badge w3-green" style="cursor:pointer;" onclick="approveStud(<?php echo $row['id']; ?>)"><i class="fa fa-check"></i></span><span class="w3-badge w3-red" style="cursor:pointer;" onclick="disapproveStud(<?php echo $row['id']; ?>)"><i class="fa fa-times"></i></span></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
    <?php
}
if(isset($_POST['albumName'])){
	$album=$_POST['albumName'];
	$now=time();
	$ins=$mysqli->query("insert into album (`name`,`dateCreated`) values ('$album','$now')");
	if($ins){
		echo "SUCCESS";
	}
}
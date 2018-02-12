<div class="w3-container">
<h3><span class="fa fa-search"></span> View Attendance</h3>
<hr>
	
	<div class="w3-row ">
    <div class="w3-panel w3-green w3-round">
    <span onclick="this.parentElement.style.display='none'"
		class="w3-button w3-display-topright">&times;</span>
       <p>Required Attendance: <?php
	   $course=getStudCourseID($_SESSION['STUD_ID']);
	    $ge=$mysqli->query("select * from course where id ='$course'");
		$des=mysqli_fetch_assoc($ge);
		
		$req=$mysqli->query("select * from required where desciplineId='{$des['descipline']}'");
		$num=mysqli_fetch_assoc($req);
		echo $num['number'];
		 ?></p>
    </div>
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
			<th>EVENT NAME</th>
			<th>DATE & TIME</th>
			<th>VENUE</th>
		</tr>
		</thead>
		<tbody>
        <?php
			$studId = $_SESSION['STUD_ID'];
			
			$sql = $mysqli->query("select * from attendace where studentId = '$studId'");
			while($row=mysqli_fetch_assoc($sql)){
				$eventData = getEventName($row['eventId']);
		?>
        <tr>
        	<td><?php echo $eventData['title'];?></td>
            <td><?php echo date('F j, Y @ h:i A',$row['date']);?></td>
            <td><?php echo $eventData['title'];?></td>
        </tr>
        <?php }	?>
        </tbody>
		</table>		
    </div>
    <hr>
    <div class="w3-row" id="eventRes">
    
    </div>
</div>
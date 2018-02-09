<div class="w3-container">
<h3><span class="fa fa-search"></span> View Attendance</h3>
<hr>
	<div class="w3-row ">
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
<?php
include "../include/dbcon.php";
$id=$_GET['student'];
function getEventNames($x){
	global $mysqli;
	$sql = $mysqli->query("select * from events where id='$x'");
	while($row = mysqli_fetch_assoc($sql)){
		return $row['title'];
	}	
}

?>

<table width="400" border="1" style="border-collapse:collapse;">
<tr>
	<th colspan="2"><?php echo getStudent($id); ?></th>
</tr>
	<tr>
    	<th>Event Title</th>
        <th>Date & Time</th>
    </tr>
<?php
$sql=$mysqli->query("select * from attendace where studentId='$id'");
while($row=mysqli_fetch_assoc($sql)){
	?>
	<tr>
    	<td><?php echo ucfirst(getEventNames($row['eventId']))?></td>
        <td align="center"><?php echo date('F j, Y h:i A',$row['date']);?></td>
    </tr>
<?php     
}?>
</table>
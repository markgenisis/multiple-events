<?php
include "../include/dbcon.php";
$eventID=$_POST['eventID'];
$sql=$mysqli->query("select * from attendace where eventId='$eventID' order by date DESC");
?>
<ul class="w3-ul w3-border">
<?php
//echo $eventID;
while($row=mysqli_fetch_assoc($sql)){
?>
<li class="" style="padding-bottom:17px;"><?php getStudent($row['studentId']); ?><br><span class="w3-right w3-small" ><?php echo date("m/d/y h:i A",$row['date']); ?></span></li>
<?php	
}?>

</ul>

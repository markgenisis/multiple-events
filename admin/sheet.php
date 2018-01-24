<div class="w3-container">
<h3><span class="fa fa-search"></span> Attendance Sheet</h3>
<hr>
	<div class="w3-row ">
        <div class="w3-col m8 w3-padding">
        <label>Event:</label>
        <select class="w3-input" id="eventID" >
        <option></option>
        <?php $now=date("M d, Y",time());
			$sql=$mysqli->query("select * from events");
			while($row=mysqli_fetch_assoc($sql)){
				if(date("M d, Y",$row['targetdate'])==$now){
		?>
        	<option value="<?php echo $row['id']; ?>"><?php echo ucwords($row['title']); ?></option>
         <?php }} ?>
        </select>
        </div>
        <div class="w3-col m4 w3-padding">
        	<button class="w3-btn w3-green" style="margin-top:20px;" onclick="goAttend();">GO TO ATTANDANCE SHEET</button>
        </div>
    </div>
    <hr>
    <div class="w3-row">
    
    </div>
</div>
<script>
	function goAttend(){
		var eventID=$("#eventID").val();
		location="attendance_sheet.php?id="+eventID;
	}
</script>
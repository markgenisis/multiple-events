<div class="w3-container">
<h3><span class="fa fa-search"></span> My Profile</h3>
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
		<table class="w3-table w3-border "  >
		<thead>
        <?php
			$sql=$mysqli->query("select * from students where student_num='{$_SESSION['STUD_ID']}'");
			while($row=mysqli_fetch_assoc($sql)){
		?>
		<tr>
			<th>FULL NAME</th>
			<td><?php echo $row['name']." ".$row['m_name']." ".$row['surname']; ?></td> 
		</tr>
        <tr>
			<th>COURSE</th>
			<td><?php getCourse($row['course_id']); ?></td> 
		</tr>
        <tr>
			<th>ID NUMBER</th>
			<td><?php echo $row['student_num']; ?> <a href="generate.php?id=<?php echo $row['student_num']; ?>" target="_new" class="w3-badge w3-green w3-right" style="border-radius:5px; text-decoration:none;">View Barcode</a></td> 
		</tr>
        <?php } ?>
		</thead>
		<tbody>
         
        </tbody>
		</table>		
    </div>
    <hr>
    <div class="w3-row" id="eventRes">
    <div id="passMsg"></div>
    <div class="w3-col m3 "style=" ">
    	&nbsp;
    </div>
    	<div class="w3-col m6 w3-center w3-margin" style=" ">
        	<form style="" id="changeForm" action="javascript:void(0);">
            	<label>OLD PASSWORD</label>
                <input type="password" id="oldpw" class="w3-input w3-border"  />
                <label>NEW PASSWORD</label>
                <input type="password" id="newpw" class="w3-input w3-border"  />
                <label>REPEAT PASSWORD</label>
                <input type="password" id="newpw1" class="w3-input w3-border"  />
                <button type="button" class="w3-btn w3-green w3-margin-top" onclick="changePass()">CHANGE PASSWORD</button>
            </form>
        </div>
    </div>
</div>
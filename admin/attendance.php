<div class="w3-container">
<h3><span class="fa fa-search"></span> View Attendance</h3>
<hr>
	<div class="w3-row ">
        <div class="w3-col s8 w3-padding">
        <label>Event:</label>
        <select class="w3-input" id="eventID">
        	<option></option>
            <?php
				$event=$mysqli->query("select * from events");
				while($row=mysqli_fetch_assoc($event)){
			?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
            <?php } ?>
        </select>
        </div><div class="w3-col m4 w3-padding">
                        <label>Department:</label>	
                        <select class="w3-input" id="department" onchange="getDescipline2();">
                        	<option></option>
                            <?php
								$dept=$mysqli->query("select * from dept");
								while($row=mysqli_fetch_assoc($dept)){
							?>
                            	<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                       </div>
                       <div class="w3-col m6 w3-padding">
                        <label>Descipline:</label>	
                        <select class="w3-input" id="descipline" onchange="getCourse();"></select>
                       </div>
                       <div class="w3-col m6 w3-padding">
                        <label>Course:</label>	
                        <select class="w3-input" id="course" ></select>
                       </div>
        <div class="ww3-col s5 w3-padding">
        <button class="w3-btn w3-green w3-block w3-margin-top" onclick="getResult()"> Search</button>
        </div>
    </div>
    <hr>
    <div class="w3-row" id="eventRes">
    
    </div>
    <br />
</div>
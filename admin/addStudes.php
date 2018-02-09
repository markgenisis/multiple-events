<h3><span class="fa fa-plus"></span> Pending Student Registration</h3>
                    <hr>
                <div class="w3-container" style="">
                	<div class="" id="eventMsg"></div>
					<div class="w3-row"  style="min-width:250px;   " >
                    	<div class="w3-col m4 w3-padding">
                        <label>Department:</label>	
                        <select class="w3-input" id="department" onchange="getDescipline();">
                        	<option></option>
                            <?php
								$dept=$mysqli->query("select * from dept");
								while($row=mysqli_fetch_assoc($dept)){
							?>
                            	<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                            <?php } ?>
                        </select>
                       </div>
                       <div class="w3-col m4 w3-padding">
                        <label>Descipline:</label>	
                        <select class="w3-input" id="descipline" onchange="getCourse();"></select>
                       </div>
                       <div class="w3-col m4 w3-padding">
                        <label>Course:</label>	
                        <select class="w3-input" id="course" onchange="getStudentPending()"></select>
                       </div>
                    </div>
                    <hr />
                    <div class="" id="eventMsg"></div>
                    <div class="w3-row" id="studList">
                    
                    </div>
                    <br />
				</div>
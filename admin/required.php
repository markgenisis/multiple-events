<h3><span class="fa fa-plus"></span> Set Required Attendance</h3>
                    <hr>
                <div class="w3-container" style="">
                	<div class="" id="requiredMsg"></div>
					<div class="w3-row"  style="min-width:250px;   " >
                    	<div class="w3-col m6 w3-padding">
                        <label>Department:</label>	
                        <select class="w3-input" id="department" onchange="getDescipline1();">
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
                        <select class="w3-input" id="descipline" onchange="getCourses1();"></select>
                       </div>
                        
                    </div>
                    <hr />
                    <div class="" id="eventMsg"></div>
                    <div class="w3-row" id="courses">
                    	
                    </div>
                    <br />
				</div>
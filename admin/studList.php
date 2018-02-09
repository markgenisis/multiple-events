<h3><span class="fa fa-plus"></span> Student Lists</h3>
                    <hr>
                <div class="w3-container" style="">
                	<div class="" id="eventMsg"></div>
					
                     <div class="w3-row ">
                        <div class="w3-half w3-padding">
                        <label>Surname:</label>
                        <input type="text" class="w3-input" id="studSurname" onkeydown="findStudent()" />
                        </div>
                        <div class="w3-half w3-padding">
                        <label>Course:</label>
                        <select class="w3-input" onchange="findStudent()" id="courseID" >
                        <option></option>
                            <?php 
								$course=$mysqli->query("select * from course");
								while($row=mysqli_fetch_assoc($course)){
							?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['course']; ?></option>
                            <?php } ?>
                        </select>
                        </div>
                    </div>
                    <div class="w3-row ">
                    <hr />
                    	<div id="studentResult" class="w3-padding"></div>
                    </div>
	</div>
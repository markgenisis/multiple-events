<h3><span class="fa fa-list"></span> ALBUM LIST</h3>
                    <hr>
                <div class="w3-container" style="">
                	<div class="" id="albumMsg"></div>
					
                     <div class="w3-row ">
                     <ul class="w3-ul w3-hoverable w3-border" >
                     <?php
					
						$list=$mysqli->query("select * from album");
						while($row=mysqli_fetch_assoc($list)){
                    ?>
                        <li >
                        	 <?php echo $row['name']; ?> 
                             <a href="?addPhotos=<?php echo $row['id']; ?>" class="w3-badge w3-green w3-right" style="border-radius:5px; cursor:pointer; text-decoration:none;"><i class="fa fa-add"></i>Add Photos</a>
                        </li>
                      <?php } ?>
                      </ul>
                    </div>
                    
                    <div class="w3-row ">
                    <hr />
                    	<div id="studentResult" class="w3-padding"></div>
                    </div>
	</div>
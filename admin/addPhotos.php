<h3><span class="fa fa-list"></span> Photos</h3><hr>
	<div class="w3-container" style="">
		<div class="" id="albumMsg"></div>
		 <div class="w3-row ">
				<form action="javascript:void(0);" id="addImagesToAlbum" onsubmit="return addPhotos(<?php echo $_GET['addPhotos'];?>)" enctype="multipart/form-data">
					<label>Add Images</label>
					<input type="file" multiple="multiple" name="galleryImages" id="galleryImages" required /> 
					<input type="hidden" name="albumIdImages" id="albumIdImages" value="<?php echo $_GET['addPhotos']?>" required /> 
					<input type="submit" class="w3-button w3-green" value="Upload">
				</form>
		 </div>
		 <div>
		 <?php
		
			$list=$mysqli->query("select * from gallery where albumId='{$_GET['addPhotos']}'");
			while($row=mysqli_fetch_assoc($list)){
		?>
				<div class="w3-quarter">
					<div class="w3-display-container" style="width:100%;height:200px; overflow:hidden;margin:0px;padding:2px;">
						<img src='../gallery/<?php echo $row['imageName']?>' width="300" height="200"/>
						<div class="w3-display-bottomright w3-container" style="right:-20px !important;"><a href="javascript:void(0);" onclick="deleteImgae(<?php echo $row['id']?>)" class="w3-button w3-red w3-tiny"><i class="fa fa-trash"></i></a></div>
					</div>
				</div>
		  <?php } ?>
		</div>
		
		<div class="w3-row ">
		<hr />
			<div id="studentResult" class="w3-padding"></div>
		</div>
	</div>
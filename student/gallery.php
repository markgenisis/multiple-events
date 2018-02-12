<div class="w3-container">
<h3><span class="fa fa-camera"></span> Gallery</h3>
<hr>
	<?php
		if(!isset($_GET['album'])){
	?>
	<div class="w3-row ">
    	<?php
			$albums=$mysqli->query("select * from album order by dateCreated ASC");
			while($row=mysqli_fetch_assoc($albums)){
		?>	
        <div class="w3-col w3-card-4 w3-dark-grey s3 w3-margin" style="cursor:pointer;" onClick="location='?gallery=true&album=<?php echo $row['id'];?>'"> 
            <div class="w3-container w3-center"> 
              <img src="../img/album.png" alt="Avatar" style="width:80%">
              <h5><?php echo $row['name']; ?></h5> 
            </div> 
        </div>
        <?php } ?>
    </div>
    <?php }else{ ?>
    <div class="w3-row ">
    	<?php
			$albums=$mysqli->query("select * from gallery where albumId ='{$_GET['album']}'");
			$num=mysqli_num_rows($albums);
			if($num){
			while($row=mysqli_fetch_assoc($albums)){
		?>	
        <div class="w3-col w3-card-4 w3-hover-opacity s3 w3-margin"   style="cursor:pointer;"  > 
            <div class="w3-container w3-center"> 
              <img src="../gallery/<?php echo $row['imageName']; ?>" alt="Avatar" style="width:80%" onclick="onClick(this)">
               
            </div> 
             
        </div>
        <?php }} ?>
        <div id="modal01" class="w3-modal w3-animate-zoom" onclick="this.style.display='none'">
          <img class="w3-modal-content" id="img01" width="100"   src="../gallery/" style="left:20%;">
        </div>
    </div>
    <?php } ?>
</div>
<script>
function onClick(element) {
  console.log(document.getElementById("img01").src = element.src);
  document.getElementById("modal01").style.display = "block";
}
</script>
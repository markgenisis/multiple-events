<?php
	include("../include/dbcon.php");
	
	if(!isset($_SESSION['ACCESS_TYPE'])){
		header("location:../");
		die();
	}else if($_SESSION['ACCESS_TYPE'] !=4){
		header("location:../");
		die(); 
	} 
?>

<!DOCTYPE html>
<html>
<title>Student</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../images/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../google/fafa.css">
<link href="../dist/css/select2.min.css" rel="stylesheet" />
<link href='../css/fullcalendar.min.css' rel='stylesheet' />
<link href='../css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link href='../css/dataTables.jqueryui.min.css' rel='stylesheet'/>
<link href='../css/jquery-ui.css' rel='stylesheet'  />
<link rel="stylesheet" href="../css/w3.css">
<script src='../js/moment.min.js'></script>
<script src='../js/jquery.min.js'></script>
<script src='../js/fullcalendar.min.js'></script>
<script src='../js/datatables.min.js'></script>
<script src='../js/dataTables.jqueryui.min.js'></script>
<link href="../research/summernote.css" rel="stylesheet">
<script src="../research/summernote.min.js"></script>
<script src='../js/actions.js'></script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
.w3-bar-item{
	padding:12px !important;
}
#calendar {
	max-width:95%;
	margin: 0 auto;
}
.fc-widget-header{
	font-size:1.1em !important;
}
.fc-day-number{
	font-size:1.1em !important;
}
.itemSideBar{
	font-size:1.0em !important;
	font-weight:bold;
	text-shadow:0px 0px 2px #fff;
	margin-top:6px;
	border-top:1px solid #fff !important;
	border-bottom:1px solid #fff !important;
}
</style>
<script>

</script>
<body class="w3-light-grey">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-animate-left" style="z-index:3;width:240px;background-color:#a9b52f !important;" id="mySidebar">
	<div class="w3-hide-small w3-bar-item w3-lime w3-text-white w3-bottombar" style="text-align:center;font-weight:bold;text-shadow:0px 0px 5px #909090;">
		<a href="../admin/" style="text-decoration:none;"><i class="fa fa-ticket" style="border:2px dotted #fff;padding:5px;border-radius:50px;" aria-hidden="true"></i> Events Monitoring</a>
	</div>
  <div class="w3-container w3-padding-16 w3-bottombar w3-row w3-white">
    <div class="w3-col s4">
      <img src="../img/csc logo.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span><strong><?php echo getStudName($_SESSION['STUD_ID']);?></strong></span><br>
	  <hr style="margin:0px;"/>
	  <small>Student</small>
    </div>
  </div>
  <br/>
  <div class="w3-bar-block w3-text-white" >  
    <a href="../student" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a> 
	
    <div class="w3-dropdown-hover" style="display:block !important;">
		 <a href="javascript:void(0);" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-ticket fa-fw w3-margin-right"></i> PROFILE <i class="fa fa-caret-down fa-fw w3-right"></i></a>
		<div class="w3-dropdown-content w3-bar-block w3-lime w3-card-4">
		  
		  
		  <a href="?attendance" class="w3-bar-item w3-button"><i class="fa fa-list-ol fa-fw"></i> VIEW ATTENDANCE</a>
          <a href="?myprofile" class="w3-bar-item w3-button"><i class="fa fa-list-ol fa-fw"></i> MY PROFILE</a>
		</div>
	</div>
     <a href="?gallery" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-camera fa-fw w3-margin-right"></i> GALLERY</a> 
      <!--<a href="" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-info-circle fa-fw w3-margin-right"></i> ABOUT</a> -->
	 <a href="./logout.php" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-sign-out fa-fw w3-margin-right"></i>LOGOUT</a> 
  </div>
</nav>

<nav class="w3-sidebar w3-bar-block w3-col m3 w3-hide-small w3-hide-medium w3-card-4" style="max-width:275px;right:0">
  <div class="w3-hide-small w3-bar-item w3-lime w3-text-white" style="text-align:center;font-weight:bold;text-shadow:0px 0px 5px #909090;border-width:2px;border-style:dashed none;border-color:#fff;margin-top:10px;">
		<a href="../admin/" style="text-decoration:none;">Upcoming Events <i class="fa fa-calendar" style="border:2px dotted #fff;padding:5px;border-radius:50px;" aria-hidden="true"></i> </a>
        
	</div>
    <hr>
    <ul class="w3-ul">
    	<?php  $now=time();
			$events=$mysqli->query("select * from events order by targetdate");
			while($row=mysqli_fetch_assoc($events)){
				if($row['targetdate']>=$now){
		?>
        <li class="w3-hover-blue"><?php echo ucwords($row['title']); ?>
        	<span class="w3-right" style="font-size:10px; margin-top:15px; position:relative;"><?php echo date("M d, Y @ h:i A",$row['targetdate']); ?></span>
        </li>
        
        <?php } } ?>
    </ul>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-padding " style="margin-left:240px">
	<div class="w3-col m9">
    <div class="w3-container w3-card w3-white">
    
		<?php
			if(!$_GET){
				require("home.php");
			}else{
				if(isset($_GET['event_lists'])){
					?>
                    <h3><span class="fa fa-list"></span> Event Lists</h3>
                    <hr>
				<div class="w3-container w3-padding">
                    <table id="userListTbl" class="w3-table w3-text-black display dataTable no-footer">
					<thead>
						<tr>
							<th class="w3-center">Title</th>
							<th class="w3-center">Venue</th>
							<th class="w3-center">Participants</th>
							<th class="w3-center">Date</th>
                            <th class="w3-center"></th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = $mysqli->query("SELECT * FROM `events` order by `targetdate` DESC");
							while($row = mysqli_fetch_assoc($sql)){
						?>
						<tr>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['venue']; ?></td> 
							<td><?php echo $row['participants'];?></td>
							<td><?php echo date("m/d/Y @ h:i A",$row['targetdate']); ?></td> 
							<td>
								<button class="w3-button w3-red w3-small"><span class="fa fa-times fa-fx"></span> Delete</button>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
                </div>
				<?php
				}
				if(isset($_GET['add_events'])){?>
				<h3><span class="fa fa-plus"></span> Create New Events</h3>
                    <hr>
                <div class="w3-container" style="">
                	<div class="" id="eventMsg"></div>
					<div class="w3-row"  style="min-width:250px; max-width:600px; " >
                    	<form action="javascript:void(0);" onsubmit="return addEvents()" id="formEvents" class="w3-container w3-margin">
							<div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Event Title:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Title:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="title" id="title" type="text" placeholder="Event Title" required />
								</div>
							</div>
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Event Theme:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Theme:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="theme" id="theme" type="text" placeholder="Theme" required />
								</div>
							</div>
                            
                           
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Proponents:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Proponents:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="proponents" id="proponents" type="text" placeholder="Proponents" required />
								</div>
							</div>
                             
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large">  In Cooperation with:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large">  In Cooperation with::</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="cooperation" id="cooperation" type="text" placeholder="In Cooperation with:" required />
								</div>
							</div>
                            
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Venue:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Venue:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="venue" id="venue" type="text" placeholder="Venue" required />
								</div>
							</div>
                            
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Participants:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Participants:</b></div>
								<div class="w3-col s12 l7 m7">
								  <select class="w3-input w3-border" name="participants" id="participants" type="text" placeholder="Participants" required>
                                  	<option></option>
                                    <option>General Assembly</option>
                                    
                                    <option>CESD</option>
                                    <option>TeED</option>
                                    <option>TED</option>
                                    <option>NHSD</option>
                                  </select> 
								</div>
							</div>
                            
                             <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Target Date:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Target Date:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="date" id="date" type="datetime-local" placeholder="Target Date" required />
								</div>
							</div>
                            
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Fund Source:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Fund Source:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="source" id="source" type="text" placeholder="Fund Source" required />
								</div>
							</div>
                            
                            <button class="w3-button w3-right w3-section w3-blue w3-ripple w3-padding">Submit</button>
                            
                         </form>
                    </div>
				</div>
				<?php
                }else if(isset($_GET['add_students'])){
					require("addStudes.php");
				}else if(isset($_GET['student_lists'])){
					require("studList.php");
				}else if(isset($_GET['attendance'])){
					require("attendance.php");
				}else if(isset($_GET['attendance_sheet'])){
					require("sheet.php");
				}
				else if(isset($_GET['myprofile'])){
					require("profile.php");
				}else if(isset($_GET['gallery'])){
					require("gallery.php");
				}
			}
		?>
        </div>
	</div>
</div>

<script type="text/javascript" src="../js/jquery-ui.js" ></script>  
<script type="text/javascript" src="../js/actions.js"></script>
<script src="../dist/js/select2.min.js"></script>
<script>
$('#calendar').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,listWeek'
		},
		editable: false,
		eventLimit: true, // allow "more" link when too many events
		events: [
           <?php
		   	$events=$mysqli->query("select * from events");
			while($row=mysqli_fetch_assoc($events)){
		   ?>
		    {
                title: '<?php echo ucwords($row['title'])." (".date("h:i A",$row['targetdate']).")"; ?>',
                start: '<?php echo date("Y-m-d",$row['targetdate']); ?>'
            },
           <?php } ?>
        ]
	});
</script>

</body>
</html>

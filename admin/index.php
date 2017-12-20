<?php
	include("../include/dbcon.php");
	if(!isset($_SESSION['ACCESS_TYPE'])){
		header("location:../");
		die();
	}else if($_SESSION['ACCESS_TYPE'] != 1){
		header("location:../");
		die();
	}
?>

<!DOCTYPE html>
<html>
<title>Administration</title>
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
<script src='adminActions.js'></script>
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
</style>
<script>

</script>
<body class="w3-light-grey">
<!-- Top container -->
<div class=" w3-row w3-bar w3-top w3-white w3-large" style="z-index:9999;box-shadow:2px 2px 6px #eee;">
	<div class="w3-hide-small w3-bar-item w3-blue" style="width:230px;text-align:center;text-shadow:2px 2px 1px #000;font-weight:bold;">
		<a href="../admin/" style="text-decoration:none;"> <!-- <img src="../images/logo.png" class="w3-white w3-circle w3-card-4" width="25" height="25" />  --> Events Monitoring</a>
	</div>
	<button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i></button>
	<div class="w3-hide-small">
	<span class="fa fa-search w3-bar-item fa-lg" style="padding-top:15px !important;"></span>
	<input class="w3-input w3-bar-item w3-block w3-rest" type="text" placeholder="Search" style="padding-left:10px !important; min-width:50%;">
	<span class="w3-bar-item w3-right">
		<a href="logout.php" class="w3-small "style="text-decoration:none;"><i class="fa fa-sign-out fa-fx"></i> Logout</a>
	</span>
	</div>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:230px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../images/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span><strong>CSC Officer</strong></span><br>
	  <hr style="margin:0px;"/>
	  <small>Administrator</small>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Administration</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
	 <div class="w3-bar-item w3-button w3-padding w3-hover-blue" onclick="open_nav_accord('a1')">
		<i class="fa fa-users fa-fw"></i> <b>Events</b> <i class="fa fa-caret-down w3-right fa-lg" style="position:relative;top:5px;"></i>
	 </div>
	  <div id="a1" class="w3-hide w3-white w3-animate-opacity w3-rightbar w3-border-blue" style="padding-left:20px;">
		<a href="?new_events=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-plus fa-fx"></i>  New Event </a>
		<a href="?list=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-list-ul fa-fx"></i>  Event List </a>
	  </div>
	 <div class="w3-bar-item w3-button w3-padding w3-hover-blue" onclick="open_nav_accord('a2')">
		<i class="fa fa-users fa-fw"></i> <b>Courses</b> <i class="fa fa-caret-down w3-right fa-lg" style="position:relative;top:5px;"></i>
	 </div>
	  <div id="a2" class="w3-hide w3-white w3-animate-opacity w3-rightbar w3-border-blue" style="padding-left:20px;">
		<a href="?listRes=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-list-ul fa-fx"></i>  Researches List </a>
	  </div>
   <!-- 
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Views</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Traffic</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Geo</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a>
	-->
	<br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:230px;margin-top:43px;">

	<div class="w3-container">
		<div class="w3-white w3-card-2" id="calendar_container"  style="margin-top:2%;padding-bottom:20px;border:1px solid #ddd">
			<?php
				if(!$_GET){
			?>
				<header class="w3-container" style="padding-top:22px">
					<h5><b><i class="fa fa-dashboard"></i> Calendar of Events</b><hr style="margin:0px" /></h5>
				</header>
				<div id="calendar"></div>
			<?php }?>
			<?php if(isset($_GET['new_events'])){?>
				<header class="w3-container" style="padding-top:22px">
					<h5><b><i class="fa fa-user fa-fx"></i> New Event</b><hr style="margin:0px" /></h5>
				</header>
				<div class="w3-container" style="">
					<div class="w3-row"  style="min-width:250px; max-width:600px;margin:0px auto;" >
						<form action="javascript:void(0);" onsubmit="return addNewUserFromAdmin()" class="w3-container w3-margin">
							<div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Event Title:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Event Title:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="f_name" id="f_name" type="text" placeholder="Event Title" required />
								</div>
							</div>
							<div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Theme:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"><span class="w3-text-red">*</span> Theme:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="l_name" id="l_name" type="text" placeholder="Theme" required />
								</div>
							</div>
							<div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"> Proponents:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"> Proponents</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="m_name" id="m_name" type="text" placeholder="Proponents" required />
								</div>
							</div>
							<div class="w3-row">
							  <div class="w3-col  m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> In Cooperating With:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> In Cooperating With:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="user_name" id="user_name" type="text" placeholder="In cooperating with" required />
								</div>
							</div>
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"> Venue:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"> Venue:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="m_name" id="m_name" type="text" placeholder="Venue" required />
								</div>
							</div>
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"> Participants:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"> Participants:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="m_name" id="m_name" type="text" placeholder="Participants" required />
								</div>
							</div>
							 <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"> Target Date:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"> Target Date:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="m_name" id="m_name" type="text" placeholder="Date" required />
								</div>
							</div>
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"> Fund Source:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"> Fund Source:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="m_name" id="m_name" type="text" placeholder="Fund Source" required />
								</div>
							</div>

							<button class="w3-button w3-right w3-section w3-blue w3-ripple w3-padding">Submit</button>

							</form>
					</div>
				</div>
			<?php }?>
			<?php
				if(isset($_GET['list'])){
			?>
			<header class="w3-container" style="padding-top:22px">
				<h5><b><i class="fa fa-list-ol fa-fx"></i> Event Lists</b><hr style="margin:0px" /></h5>
			</header>
			<div class="w3-container">
				<table id="userListTbl" class="w3-table w3-text-black display dataTable no-footer">
					<thead>
						<tr>
							<th>Event Title</th>
							<th>Venue</th>
							<th>Participants</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sql = $mysqli->query("SELECT * FROM events");
							while($row = mysqli_fetch_assoc($sql)){
						?>
						<tr>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['venue'];?></td>
							<td><?php echo $row['participants'];
							?></td>
							<td>
								<?php
									echo $row['targetdate'];
								?>
							</td>
						</tr>
						<?php }?>
					</tbody>
				</table>
			</div>
			<?php }?>
			
			<?php
				if(isset($_GET['listRes'])){
			?>
				<header class="w3-container" style="padding-top:22px">
				<h5><b><i class="fa fa-list-ol fa-fx"></i> Users Lists</b><hr style="margin:0px" /></h5>
			</header>
			<div class="w3-container">
				<table id="researchTbl" class="w3-table w3-text-black display dataTable no-footer">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Proponents</th>
							<th>Recommendations</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php
						
						?>
						<tr>
							<td>1</td>
							<td>AWP 2.0</td>
							<td>Franky Samaniego, </td>
							<td>ashdaks dhalkshdla kshd alksdj</td>
							<td>
								<button class="w3-button w3-green w3-small"><span class="fa fa-edit fa-fx"></span> Edit</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php }?>
		</div>
	</div>
  <!-- Header -->
 

  <!-- End page content -->
</div>
<script type="text/javascript" src="../js/jquery-ui.js" ></script>  
<script type="text/javascript" src="../js/actions.js"></script>
<script src="../dist/js/select2.min.js"></script>
<script>

</script>

</body>
</html>

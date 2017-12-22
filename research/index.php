<?php
	include("../include/dbcon.php");
	if($_SESSION['ACCESS_TYPE'] != 2){
		header("location:../redirecter.php");
	}else{
		
	}
?>

<!DOCTYPE html>
<html>
<title>Research Professor</title>
<meta charset="UTF-8">
<link rel="shortcut icon" href="../images/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
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
<link rel="stylesheet" href="../js/bootstrap.min.css" />
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<link href="summernote.css" rel="stylesheet">
<script src="summernote.min.js"></script>
<script src="../js/selectize.js"></script>
<script src="../js/index.js"></script>
<script type="text/javascript" src="../js/jquery.simple-dtpicker.js"></script>
<link type="text/css" href="../css/bootstrap-datetimepicker.min.css" rel="stylesheet" />

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
function new_research (){
	var prop_content = $('#proponents').val();
	console.log(prop_content);
}
</script>
<body class="w3-light-grey">
<!-- Top container -->
<div class=" w3-row w3-bar w3-top w3-white w3-large" style="z-index:9999;box-shadow:2px 2px 6px #eee;">
	<div class="w3-hide-small w3-bar-item w3-blue" style="width:230px;text-align:center;text-shadow:2px 2px 1px #000;font-weight:bold;">
		<a href="../research/" style="text-decoration:none;"> <img src="../images/logo.png" class="w3-white w3-circle w3-card-4" width="25" height="25" />   Research Repository</a>
	</div>
	<button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i></button>
	<div class="w3-hide-small">
	<span class="fa fa-search w3-bar-item fa-lg" style="padding-top:15px !important;"></span>
	<input class="w3-input w3-bar-item w3-block w3-rest" type="text" placeholder="Search" style="padding-left:10px !important; min-width:50%;">
	<span class="w3-bar-item w3-right">
		<a href="../logout.php" class="w3-small w3-text-black "style="text-decoration:none;"><i class="fa fa-sign-out fa-fx"></i> Logout</a>
	</span>
	</div>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-card-2 w3-collapse w3-white w3-animate-left" style="z-index:3;width:230px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../images/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
	<?php
		$user_id = $_SESSION['logged_in_id'];
		$sql = mysql_query("select * from users where id='$user_id' LIMIT 1");
		while($row = mysql_fetch_array($sql)){
	?>
		<div class="w3-col s8 w3-bar">
		  <span><strong><?php echo ucwords($row['first_name'].' '.$row['middle_name'].' '.$row['last_name'])?></strong></span><br>
		  <hr style="margin:0px;"/>
		  <small>Research Professor</small>
		</div>
	<?php }?>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Administration</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
	 <div class="w3-bar-item w3-button w3-padding w3-hover-blue" onclick="open_nav_accord('a1')">
		<i class="fa fa-users fa-fw"></i> <b>Users</b> <i class="fa fa-caret-down w3-right fa-lg" style="position:relative;top:5px;"></i>
	 </div>
	  <div id="a1" class="w3-hide w3-white w3-animate-opacity w3-rightbar w3-border-blue" style="padding-left:20px;">
		<a href="?new_user=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-plus fa-fx"></i>  New User </a>
		<a href="?list=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-list-ul fa-fx"></i>  User List </a>
	  </div>
	  <div class="w3-bar-item w3-button w3-padding w3-hover-blue" onclick="open_nav_accord('a3')">
		<i class="fa fa-code-fork fa-fw"></i> <b>Rubrics</b> <i class="fa fa-caret-down w3-right fa-lg" style="position:relative;top:5px;"></i>
	 </div>
	  <div id="a3" class="w3-hide w3-white w3-animate-opacity w3-rightbar w3-border-blue" style="padding-left:20px;">
		<a href="?newRub=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-plus fa-fx"></i>  New Rubric </a>
		<a href="?listRub=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-list-ul fa-fx"></i>  Rubric List </a>
	  </div>
	 <div class="w3-bar-item w3-button w3-padding w3-hover-blue" onclick="open_nav_accord('a2')">
		<i class="fa fa-graduation-cap fa-fw"></i> <b>Researches</b> <i class="fa fa-caret-down w3-right fa-lg" style="position:relative;top:5px;"></i>
	 </div>
	  <div id="a2" class="w3-hide w3-white w3-animate-opacity w3-rightbar w3-border-blue" style="padding-left:20px;">
		<a href="?newRes=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-plus fa-fx"></i>  New Research </a>
		<a href="?listRes=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-list-ul fa-fx"></i>  Researches List </a>
	  </div>
	 <div class="w3-bar-item w3-button w3-padding w3-hover-blue" onclick="open_nav_accord('a4')">
		<i class="fa fa-calendar fa-fw"></i> <b>Scheduling</b> <i class="fa fa-caret-down w3-right fa-lg" style="position:relative;top:5px;"></i>
	 </div>
	  <div id="a4" class="w3-hide w3-white w3-animate-opacity w3-rightbar w3-border-blue" style="padding-left:20px;">
		<a href="?newSched=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-plus fa-fx"></i>  New Schedule </a>
		<a href="?listSched=true" class="w3-bar-item w3-button w3-small"><i class="fa fa-list-ul fa-fx"></i>  Schedule List </a>
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
		<div class="w3-white" id="calendar_container"  style="margin-top:2%;padding-bottom:20px;border:1px solid #ddd">
			<?php
				if(!$_GET){
			?>
				<header class="w3-container" style="padding-top:22px">
					<h5><b><i class="fa fa-dashboard"></i> Defense Calendar Schedules</b><hr style="margin:0px" /></h5>
				</header>
				<div id="calendar"></div>
			<?php }?>
			<?php if(isset($_GET['new_user'])){
					require('newUser.php');
				}else if(isset($_GET['list'])){
					require('userList.php');
				}else if(isset($_GET['newRes'])){
					require('newRes.php'); 
				}else if(isset($_GET['listRes'])){
					require('listRes.php'); 
				}else if(isset($_GET['newSched'])){
					require('newSched.php'); 
				}?>
		</div>
	</div>
  <!-- Header -->
  <!-- End page content -->
</div>
<!--<script type="text/javascript" src="../js/jquery-ui.js" ></script>  -->
<script type="text/javascript" src="../js/bootstrap-datetimepicker.js" ></script>  
<script type="text/javascript" src="../js/actions.js"></script>
<script type="text/javascript" src="researchActions.js"></script>
<script src="../dist/js/select2.min.js"></script>
<script>

</script>

</body>
</html>

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
      <img src="../images/avatar.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span><strong>CSC Officer</strong></span><br>
	  <hr style="margin:0px;"/>
	  <small>Administrator</small>
    </div>
  </div>
  <br/>
  <div class="w3-bar-block w3-text-white" >
    <a href="#" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-home fa-fw w3-margin-right"></i>HOME</a> 
	<div class="w3-dropdown-hover">
		 <a href="javascript:void(0);" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-group fa-fw w3-margin-right"></i> STUDENTS <i class="fa fa-caret-down fa-fw w3-right"></i></a>
		<div class="w3-dropdown-content w3-bar-block w3-lime">
		  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user fa-fw"></i> NEW STUDENT</a>
		  <hr style="margin:0px;"/>
		  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-th fa-fw"></i> STUDENT LIST</a>
		</div>
	</div>
	<div class="w3-dropdown-hover" style="display:block !important;">
		 <a href="javascript:void(0);" class="w3-bar-item w3-button w3-padding w3-lime itemSideBar"><i class="fa fa-ticket fa-fw w3-margin-right"></i> EVENTS <i class="fa fa-caret-down fa-fw w3-right"></i></a>
		<div class="w3-dropdown-content w3-bar-block w3-lime">
		  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-plus fa-fw"></i> NEW EVENT</a>
		  <hr style="margin:0px;"/>
		  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-list-ol fa-fw"></i> EVENTS LIST</a>
		</div>
	</div>

  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main w3-padding" style="margin-left:240px">
	<div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Front End Developer / w3schools.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p>Lorem ipsum dolor sit amet. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Web Developer / something.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Consectetur adipisicing elit. Praesentium magnam consectetur vel in deserunt aspernatur est reprehenderit sunt hic. Nulla tempora soluta ea et odio, unde doloremque repellendus iure, iste.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graphic Designer / designsomething.com</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
	</div>
</div>
<script type="text/javascript" src="../js/jquery-ui.js" ></script>  
<script type="text/javascript" src="../js/actions.js"></script>
<script src="../dist/js/select2.min.js"></script>
<script>

</script>

</body>
</html>

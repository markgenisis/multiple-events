<!DOCTYPE html>
<html>
<title>Multiple Events</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="google/fafa.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1{
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/bg.jpg');
    min-height: 100%;
	padding:5% 10%;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1{
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-card-2">
	<span class="w3-bar-item w3-center w3-text-white w3-right" style="text-shadow:1px 2px 0px #909090;font-size:1.2em"><strong>Multiple Events Monitoring System</strong></span>
   <!-- <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>-->
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1" id="home" >
  <div class="" style="white-space:nowrap;">
		<div class="w3-row">
			<div class="w3-row-padding">
				<div class="w3-half w3-padding " >
					 <div class="w3-container  w3-padding-32 w3-round w3-card-2" id="loginFormCon" style="max-width:350px;margin:15% auto;background-image:url('img/login.png');background-attachment: fixed;background-position: center;background-repeat: no-repeat;background-size: cover;" >
							<div class="w3-row" id="loginFormCon">
								<div class="w3-row-padding">
									<h4><i class="fa fa-lock fa-lg  w3-circle" style="padding:7px 10px;border:2px dashed #909090;color:#ccc;text-shadow:1px 2px 1px #000;"></i>
									<span style="">Login</span> 
									</h4>
									<hr style="margin:5px"/>
								</div>
							</div>		
                            <div id="loading_on_login"></div>				
						<form class="w3-form w3-center w3-text-black" id="login_form" method="post" action="javascript:void(0);">
							<div class="w3-padding-16" style="position:relative;">
								<span class="fa fa-user fa-lg w3-text-black "style="position:absolute;left:10px;top:40%;z-index:99999;"></span>
								<input class="w3-input w3-small w3-border" style="padding-left: 30px;" type="text" id="usName" name="usName" placeholder="Username" required>
							</div>
							<div class="w3-padding-16" style="position:relative;">
								<span class="fa fa-lock fa-lg w3-text-black "style="position:absolute;left:10px;top:40%;z-index:99999;"></span>
								<input class="w3-input w3-small w3-border" style="padding-left: 30px;" type="password" id="pword" name="pword" placeholder="Password" required>
							</div>
								<button class="w3-block w3-button w3-btn-small w3-blue w3-round w3-text-bold"  onClick="logmein()"> <span class="w3-wide"> Login</span> <i class="fa fa-sign-in fa-lg"></i></button>
						</form>
					</div>
				</div>
				<div class="w3-half w3-text-white w3-round w3-padding w3-card-2" style="background-image:url('img/reg.png');text-shadow:0px 0px 5px #000;">
					<div class="w3-row">
						<h3 style="margin-bottom:0px;"><i class="fa fa-user fa-fx"></i> Sign Up</h3><hr style="margin-top:0px;"/>
						<form action="javascript:void(0)" method="post">
							<div class="w3-container">
								<label>First Name</label>
								<input type="text" name="firstName" id="firstName" class="w3-input w3-small w3-border" required /> 
							</div>
							<div class="w3-container">
								<label>Middle Name</label>
								<input type="text" name="middleName" id="middleName" class="w3-input w3-small w3-border" required /> 
							</div>
							<div class="w3-container">
								<label>Last Name</label>
								<input type="text" name="lastName" id="lastName" class="w3-input w3-small w3-border" required /> 
							</div>
							<div class="w3-container">
								<label>Student Number</label>
								<input type="text" name="lastName" id="lastName" class="w3-input w3-small w3-border" required /> 
							</div>
							<div class="w3-container">
								<label>Course</label>
								<input type="text" name="lastName" id="lastName" class="w3-input w3-small w3-border" required /> 
							</div><br/>
							<div class="w3-container">
								<button class="w3-button w3-blue w3-round w3-hover-blue w3-block"><strong class="w3-wide">SUBMIT</strong></button>
							</div>
							<br/>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/jquery-ui.js" ></script>
<script type="application/javascript" src="js/actions.js"></script>
</html>

<header class="w3-container" style="padding-top:22px">
	<h5><b><i class="fa fa-user fa-fx"></i> New User</b><hr style="margin:0px" /></h5>
</header>
<div class="w3-container" style="">
	<div class="w3-row"  style="min-width:250px; max-width:600px;margin:0px auto;" >
		<form action="javascript:void(0);" onsubmit="return research_users()" class="w3-container w3-margin">
			<div class="w3-row">
			  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> First Name:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> First Name:</b></div>
				<div class="w3-col s12 l7 m7">
				  <input class="w3-input w3-border" name="f_name" id="f_name" type="text" placeholder="First Name" required />
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Last Name:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"><span class="w3-text-red">*</span> Last Name:</b></div>
				<div class="w3-col s12 l7 m7">
				  <input class="w3-input w3-border" name="l_name" id="l_name" type="text" placeholder="Last Name" required />
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"> Middle Name:</b><b class="w3-left w3-hide-medium w3-hide-large w3-large"> Middle Name:</b></div>
				<div class="w3-col s12 l7 m7">
				  <input class="w3-input w3-border" name="m_name" id="m_name" type="text" placeholder="Middle Name"/>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col  m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Username:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Username:</b></div>
				<div class="w3-col s12 l7 m7">
				  <input class="w3-input w3-border" name="user_name" id="user_name" type="text" placeholder="Username" required />
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> User Type:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> User Type:</b></div>
				<div class="w3-col s12 l7 m7">
					<select class="w3-select w3-border" name="user_type" id="user_type" required />
					  <option value="" disabled selected>Choose user type</option>
					  <option value="3">Panel</option>
					  <option value="4">Adviser</option>
					</select>
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Password:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Password:</b></div>
				<div class="w3-col s12 l7 m7">
				  <input class="w3-input w3-border" name="user_pw" id="user_pw" type="password" placeholder="Password" required />
				</div>
			</div>
			<div class="w3-row">
			  <div class="w3-col m5 l5 w3-padding"><b class=" w3-hide-small w3-right w3-large"><span class="w3-text-red">*</span> Confirm Password:</b><b class="w3-left w3-large w3-hide-large w3-hide-medium"><span class="w3-text-red">*</span> Confirm Password:</b></div>
				<div class="w3-col s12 l7 m7">
				  <input class="w3-input w3-border" name="user_pw_c" id="user_pw_c" type="password" placeholder="Confirm Password" required />
				</div>
			</div>

			<button class="w3-button w3-right w3-section w3-blue w3-ripple w3-padding">Submit</button>

			</form>
	</div>
</div>
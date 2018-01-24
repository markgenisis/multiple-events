<h3><span class="fa fa-plus"></span> Add New Student</h3>
                    <hr>
                <div class="w3-container" style="">
                	<div class="" id="eventMsg"></div>
					<div class="w3-row"  style="min-width:250px; max-width:600px; " >
                    	<form action="javascript:void(0);" onsubmit="return addStudents()" id="formEvents" class="w3-container w3-margin">
							<div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Name:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Name:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="name" id="name" type="text" placeholder="First Name" required />
								</div>
							</div>
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Middle Name:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Middle Name:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="middlename" id="middlename" type="text" placeholder="Middle Name" required />
								</div>
							</div>
                            
                           
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Surname:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Surname:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="surname" id="surname" type="text" placeholder="Surname" required />
								</div>
							</div>
                             
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span>  ID No.:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large">  ID No.:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="idNum" id="idNum" type="text" placeholder="ID Number" required />
								</div>
							</div>
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span>  Password:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large">  Password:</b></div>
								<div class="w3-col s12 l7 m7">
								  <input class="w3-input w3-border" name="studPass" id="studPass" type="password" placeholder="Password" required />
								</div>
							</div>
                             
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Department:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Department:</b></div>
								<div class="w3-col s12 l7 m7">
								  <select class="w3-input w3-border" name="department" id="department" type="text" onChange="getCourse()" required>
                                  	<option></option>  
                                    <option value="1">CESD</option>
                                    <option value="2">TeED</option>
                                    <option value="3">TED</option>
                                    <option value="4">NHSD</option>
                                  </select> 
								</div>
							</div>
                            <div class="w3-row">
							  <div class="w3-col m5 l5 w3-padding"><b class="w3-right w3-hide-small w3-large"><span class="w3-text-red">*</span> Course:</b><b class="w3-left w3-hide-large w3-hide-medium w3-large"><span class="w3-text-red">*</span> Course:</b></div>
								<div class="w3-col s12 l7 m7" id="selectCourse">
								  <select class="w3-input w3-border" name="course" id="course" type="text" placeholder="Participants" required>
                                  	<option></option> 
                                    
                                    <option>CESD</option>
                                    <option>TeED</option>
                                    <option>TED</option>
                                    <option>NHSD</option>
                                  </select> 
								</div>
							</div>
                            
                              
                            
                            <button class="w3-button w3-right w3-section w3-blue w3-ripple w3-padding">Submit</button>
                            
                         </form>
                    </div>
				</div>
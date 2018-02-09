// JavaScript Document
function logmein(){
	var username=$("#usName").val();
	var password=$("#pword").val();
	
	if(username ==""){
		$("#loginFormCon").effect("shake");
		$("#loading_on_login").show().html("<div class='w3-panel w3-red w3-padding'>Enter a Username.</div>");
		setTimeout(function(){$("#loading_on_login").hide("slow");},2000);
		document.getElementById("usName").focus();
		return false;
	}else if(password==""){
		$("#loginFormCon").effect("shake");
		$("#loading_on_login").show().html("<div class='w3-panel w3-red w3-padding'>Enter a Password.</div>");
		setTimeout(function(){$("#loading_on_login").hide("slow");},2000);
		document.getElementById("pword").focus();
		return false;
	}else{
		var data="username="+username+"&password="+password;
		$.ajax({
			type: "POST",
			url: "include/actions.php",
			data: data,
			success: function(data){
				console.log(data);
				if(data == "1"){
					location="admin/";
				}else if(data == "2"){
					location="imo/";
				}else if(data == "4"){
					location="student/";
				}
				else if(data=="ERROR"){
					$("#loginFormCon").effect("shake");
					$("#loading_on_login").show().html("<div class='w3-panel w3-red w3-padding'>ACCESS DENIED!</div>");
					setTimeout(function(){$("#loading_on_login").hide("slow");},2000);
					document.getElementById("password").focus();
				}
			}
		});
	}
}

// Toggle between showing and hiding the sidebar, and add overlay effect
	function w3_open() {
		if (mySidebar.style.display === 'block') {
			mySidebar.style.display = 'none';
			overlayBg.style.display = "none";
		} else {
			mySidebar.style.display = 'block';
			overlayBg.style.display = "block";
		}
	}

	// Close the sidebar with the close button
	function w3_close() {
		mySidebar.style.display = "none";
		overlayBg.style.display = "none";
	}


	function open_nav_accord(y) {
		var x = document.getElementById(y);
		if (x.className.indexOf("w3-show") == -1) {
			x.className += " w3-show";
			x.previousElementSibling.className += " w3-blue";
		} else { 
			x.className = x.className.replace(" w3-show", "");
			x.previousElementSibling.className = 
			x.previousElementSibling.className.replace(" w3-blue", "");
		}
	}

// JavaScript Document
$(document).ready(function() {
	$.ajax({
		url : "../data.php",
		type : "GET",
		success : function(data){
			console.log($.parseJSON(data));
			$('#calendar').fullCalendar({
				header: {
					left: 'prev,next today',
					center: 'title',
					right: 'month,listWeek'
				},
				editable: false,
				eventLimit: true, // allow "more" link when too many events
				events: $.parseJSON(data),
				eventClick: function(event) {
						if (event.url) {
							window.open(event.url,"_self");
							return false;
						}
					}
			});
		}
	});
	$('#userListTbl').DataTable({
		columnDefs: [
		   { orderable: false, targets: -1 }
		]
	});
	
	$('#regTbl').DataTable({
		columnDefs: [
		   { orderable: false, targets: -1 }
		]
	});
	$('#researchTbl').DataTable({
		columnDefs: [
		   { orderable: false, targets: [-2,-1] }
		]
	});
	$('#res_desc').summernote({
		height: 200,
		 toolbar: [
		  ['style', ['bold', 'italic', 'underline', 'clear']],
		  ['font', ['strikethrough']],
		  ['fontsize', ['fontsize']],
		  ['para', ['ul', 'ol', 'paragraph']],
		  ['height', ['height']],
		  ['view', ['codeview']]
		]
	});
});
function addEvents(){
	var title=$("#title").val();
	var theme=$("#theme").val();
	var proponents=$("#proponents").val();
	var cooperation=$("#cooperation").val();
	var venue=$("#venue").val();
	var participants=$("#participants").val();
	var date=$("#date").val();
	var source=$("#source").val();
	
	$.ajax({
		type: "POST",
		url:"../include/actions.php",
		data: "title="+title+"&theme="+theme+"&proponents="+proponents+"&cooperation="+cooperation+"&venue="+venue+"&participants="+participants+"&date="+date+"&source="+source,
		success: function(data){
			console.log();
			if(data=="SUCCESS"){
				$("#eventMsg").show().html("<div class='w3-panel w3-green w3-padding'>Event has been created!</div>");
				setTimeout(function(){$("#eventMsg").hide();},1500);
				document.getElementById("formEvents").reset();
			}
		}
	});
}
function getCourses(){
	var deptID=$("#department").val();
	$.ajax({
		type: "POST",
		url: "include/actions.php",
		data: "deptID="+deptID,
		success: function(data){
			console.log(data);
			$("#course").html(data);
		}
	});
}
function addStudents(){
	var name=$("#name").val();
	var middle=$("#middlename").val();
	var surname=$("#surname").val();
	var idNum=$("#idNum").val();
	var course=$("#course").val();
	var studPass=$("#studPass").val();
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "name="+name+"&middle="+middle+"&surname="+surname+"&idNum="+idNum+"&course="+course+"&studPass="+studPass,
		success: function(data){
			console.log();
			if(data=="SUCCESS"){
				$("#eventMsg").show().html("<div class='w3-panel w3-green w3-padding'>Student has been added!</div>");
				setTimeout(function(){$("#eventMsg").hide();},1500);
				document.getElementById("formEvents").reset();
			}else{
				$("#eventMsg").show().html("<div class='w3-panel w3-red w3-padding'>Student was already in database!</div>");
				setTimeout(function(){$("#eventMsg").hide();},1500);
			}
		}
	});
}
function findStudent(){
	var surname=$("#studSurname").val();
	var course=$("#courseID").val();
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "studSurname="+surname+"&courseid="+course,
		success: function(data){
			console.log();
			$("#studentResult").html(data);
		}
	});
}
function attendance(){
	var studId=$("#studID").val();
	var eventId=$("#eventID").val();
	$.ajax({
			type: "POST",
			url: "../include/actions.php",
			data: "studID="+studId+"&eventID="+eventId,
			success: function(data){
				console.log(data);
				if(data=="SUCCESS"){
					document.getElementById("attendanceForm").reset();
				}else if(data =="DUPLICATE"){
					$("#alertMsg").show().html("<div class='w3-panel w3-red w3-padding'>Student was already on the list.</div>");
					setTimeout(function(){$("#alertMsg").hide('slow');},2000)
					document.getElementById("attendanceForm").reset();
				}else if(data=='ERROR'){
					$("#alertMsg").show().html("<div class='w3-panel w3-red w3-padding'>Student is not required to attend the event.</div>");
					setTimeout(function(){$("#alertMsg").hide('slow');},2000)
					document.getElementById("attendanceForm").reset();
				}
			}
		});
	
}
function registerNow(){
	var fname=$("#firstName").val();
	var mname=$("#middleName").val();
	var lname=$("#lastName").val();
	var course=$("#course").val();
	var studNum=$("#studentNum").val();
	var password=$("#studpassword").val();
	
	$.ajax({
		type: "POST",
		url: "include/actions.php",
		data: "fname="+fname+"&mname="+mname+"&lname="+lname+"&course="+course+"&studNum="+studNum+"&studPass="+password,
		success: function(data){
			if(data=="SUCCESS"){
				$("#regMsg").show().html("<div class='w3-panel w3-green w3-padding'>Registration Complete!</div>");
				setTimeout(function(){$("#regMsg").hide('slow'); document.getElementById("regForm").reset();},2000);
			}else if(data =="DUPLICATE"){
				$("#regMsg").show().html("<div class='w3-panel w3-red w3-padding'>Student was already registered!</div>");
				setTimeout(function(){$("#regMsg").hide('slow'); document.getElementById("regForm").reset();},2000);
			}
		}
	
	});
}
function approveStud(x){
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "approved="+x,
		success: function(data){
			if(data=="SUCCESS"){
				$("#eventMsg").show().html("<div class='w3-panel w3-green w3-padding'>Approved!</div>");
				setTimeout(function(){$("#eventMsg").hide('slow');},2000)
			}
		}
	});
}
function disapproveStud(x){
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "disapproved="+x,
		success: function(data){
			console.log(data);
			if(data=="SUCCESS"){
				$("#eventMsg").show().html("<div class='w3-panel w3-green w3-padding'>Disapproved!</div>");
				setTimeout(function(){$("#eventMsg").hide('slow');},2000)
			}
		}
	});
}
function deleteEvent(x){
	var deleventID=x;
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "delEvents="+x,
		success: function (data){
			//$("#eventRes").html(data);
			if(data=="SUCCESS")location.reload();
		}
	});
}
function getResult(){
	var eventID=$("#eventID").val();
	var courseID=$("#course").val();
	console.log(courseID);
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "attEvents="+eventID+"&attcourse="+courseID,
		success: function (data){
			
			$("#eventRes").html(data);
		}
	});
}
function getDescipline(){
	var dept=$("#department").val();
	$.ajax({
		type: "POST",
		url: "adminActions.php",
		data: "department="+dept,
		success: function(data){
			console.log(data);
			$("#descipline").html(data);
			
		}
	});
}
function getCourse(){
	var desc=$("#descipline").val();
	$.ajax({
		type: "POST",
		url: "adminActions.php",
		data: "descipline="+desc,
		success: function(data){
			console.log(data);
			$("#course").html(data);
			
		}
	});
}
function getStudentPending(){
	var dept=$("#course").val();
	$.ajax({
		type: "POST",
		url: "adminActions.php",
		data: "course="+dept,
		success: function(data){
			console.log(data);
			$("#studList").html(data);
		}
	});
}
function addAlbum(){
	var albumName=$("#albumName").val();
	if(albumName==""){
		document.getElementById("albumName").focus();
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: "adminActions.php",
			data: "albumName="+albumName,
			success: function(data){
				if(data=="SUCCESS"){
					$("#albumMsg").show().html("<div class='w3-panel w3-green w3-padding'>Album successfully added!</div>");
					setTimeout(function(){$("#albumMsg").hide('slow');},2000);
					setTimeout(function(){location.reload()},3000);
				}
			}
		});
	}
}
function changePass(){
	var oldpw=$("#oldpw").val();
	var newpw=$("#newpw").val();
	var newpw1=$("#newpw1").val();
	if(newpw!=newpw1){
		$("#passMsg").show().html("<div class='w3-panel w3-red'>Password do not match!</div>");
		setTimeout(function(){$("#passMsg").hide('slow');},2000);
		return false;
	}else{
		$.ajax({
			type: "POST",
			url: "../include/actions.php",
			data: "oldpw="+oldpw+"&newpw="+newpw,
			success: function(data){
				if(data=="SUCCESS"){
					$("#passMsg").show().html("<div class='w3-panel w3-green'>Password was successfully changed!</div>");
					setTimeout(function(){$("#passMsg").hide('slow');},2000);
				}else{
					$("#passMsg").show().html("<div class='w3-panel w3-red'>Password do not match!</div>");
					setTimeout(function(){$("#passMsg").hide('slow');},2000);
				}
			}
		});
	}
}
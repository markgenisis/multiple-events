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
					location="cashier/";
				}else if(data == "3"){
					location="cook/";
				}else if(data == "4"){
					location="waiter/";
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
function getCourse(){
	var deptID=$("#department").val();
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "deptID="+deptID,
		success: function(data){
			console.log(data);
			$("#selectCourse").html(data);
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
	$.ajax({
		type: "POST",
		url: "../include/actions.php",
		data: "studSurname="+surname,
		success: function(data){
			console.log();
			$("#studentResult").html(data);
		}
	});
}
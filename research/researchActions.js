function research_users(){
	var fname = $('#f_name').val();
	var lname = $('#l_name').val();
	var mname = $('#m_name').val();
	var username = $('#user_name').val();
	var usertype = $('#user_type').val();
	var password = $('#user_pw').val();
	var password_c = $('#user_pw_c').val();
	
	if(password != password_c){
		alert('Password not match!');
	}else{
		$.ajax({
			url:'researchProcess.php',
			type:'post',
			cache:false,
			data:'fname='+fname+'&lname='+lname+'&mname='+mname+'&username='+username+'&usertype='+usertype+'&password='+password+'&addFromResearch=true',
			beforeSend:function(){
				console.log("Adding");
			},
			success:function(data){
				console.log(data);
			}
		});
	}
}


/*
function excludeSelected(){
	var selected = $("#panelChair").val();
	$.ajax({
			url:'researchProcess.php',
			type:'post',
			cache:false,
			data:'excludeId='+selected,
			beforeSend:function(){
				console.log("Excluding");
			},
			success:function(data){
				console.log(data);
			}
		});
}*/
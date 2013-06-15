function validate(){
	var txtUserName = document.getElementById('username');
	var txtUserPassword = document.getElementById('user_password');
	
	if(txtUserName.value=="" || txtUserPassword.value==""){
		alert('Kindly fill username and password!');
		return false;
	}
	else{
		return true;
	}
}

function logout(){
	 alert('asdasd');
	 window.location = "conf/controller.php?mode=logout";	
	 
}


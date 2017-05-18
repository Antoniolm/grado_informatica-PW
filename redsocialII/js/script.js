function checkLogin(){ 
	var correcto=true;
	
	////User////
   	if (document.loginForm.user.value.length==0){ 
		document.loginForm.user.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.loginForm.user.style.border="none";
	}

	////Password////
	if (document.loginForm.password.value.length==0){ 
		document.loginForm.password.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.loginForm.password.style.border="none";
	}
	
	return correcto;
}

function checkRegister(){
	var correcto=true;

	////Name////
   	if (document.registerForm.name.value.length==0){ 
		document.registerForm.name.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.registerForm.name.style.border="none";
	}

	////Lastname////
	if (document.registerForm.lastname.value.length==0){ 
		document.registerForm.lastname.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.registerForm.lastname.style.border="none";
	}

	////Nickname////
	if (document.registerForm.nickname.value.length==0){ 
		document.registerForm.nickname.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.registerForm.nickname.style.border="none";
	}

	////Password////
	if (document.registerForm.password.value.length==0){ 
		document.registerForm.password.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.registerForm.password.style.border="none";
	}

	////Re-password////
	if (document.registerForm.rePass.value.length==0){ 
		document.registerForm.rePass.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.registerForm.rePass.style.border="none";
	}

	if(document.registerForm.rePass.value!=document.registerForm.password.value){
		document.registerForm.rePass.style.border="1px solid red";
		document.registerForm.password.style.border="1px solid red";
		correcto=false;
	}
	else{
		document.registerForm.rePass.style.border="none";
		document.registerForm.password.style.border="none";
	}

	return correcto;
}

function checkEntry(){ 
	var correcto=true;
	
	////Title////
   	if (document.entryForm.title.value.length==0){ 
		document.entryForm.title.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.entryForm.title.style.border="none";
	}

	////Descripcion////
	if (document.entryForm.description.value.length==0){ 
		document.entryForm.description.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.entryForm.description.style.border="none";
	}
	
	return correcto;
}

function checkCommentary(){ 
	var correcto=true;
	////Descrpition////
	var content = document.getElementById("textAreaCommentary").value;
	
	if (content==""){ 
		document.getElementById("textAreaCommentary").style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.getElementById("textAreaCommentary").style.border="none";
	}
	
	return correcto;
}



function checkInfo(){ 
	var correcto=true;
	
	////User////
   	if (document.infoForm.nameUser.value.length==0){ 
		document.infoForm.nameUser.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.infoForm.nameUser.style.border="none";
	}

	////Password////
	if (document.infoForm.password.value.length==0){ 
		document.infoForm.password.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.infoForm.password.style.border="none";
	}

	////Password////
	if (document.infoForm.rePassword.value.length==0){ 
		document.infoForm.rePassword.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.infoForm.rePassword.style.border="none";
	}

	////Lastname////
	if (document.infoForm.lastname.value.length==0){ 
		document.infoForm.lastname.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.infoForm.lastname.style.border="none";
	}

	////Nickname////
	if (document.infoForm.nickname.value.length==0){ 
		document.infoForm.nickname.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.infoForm.nickname.style.border="none";
	}

	return correcto;
}

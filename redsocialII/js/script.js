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

	return correcto;
}

function checkEntry(){ 
	var correcto=true;
	
	////User////
   	if (document.entryForm.title.value.length==0){ 
		document.entryForm.title.style.border="1px solid red";
      	correcto=false; 
   	} 
	else{
			document.entryForm.title.style.border="none";
	}

	////Password////
	if (document.entryForm.description.value.length==0){ 
		document.entryForm.description.style.border="1px solid red";
		correcto=false;
	} 
	else{
		document.entryForm.description.style.border="none";
	}
	
	return correcto;
}
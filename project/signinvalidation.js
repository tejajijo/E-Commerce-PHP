function validation(){

	var fname=document.signin.fname.value;
	var lname=document.signin.lname.value;
	var uname=document.signin.uname.value;
	var pswd=document.signin.pswd.value;
	var rpswd=document.signin.rpswd.value;

	if(fname==""){
		window.alert("ENTER YOUR FIRST NAME");
		fname.focus();
		return false;
	}

	if(lname==""){
		window.alert("ENTER YOUR LAST NAME");
		return false;
	}

	if(email==""){
		window.alert("ENTER YOUR EMAIL ADDRESS");
		return false;
	}
	else if(!email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
	{
		window.alert("ENTER VALID EMAIL ADDRESS");
		return false;
	}

	if(uname==""){
		window.alert("ENTER YOUR USER NAME");
		return false;
	}
	else if(uname.length<5 || uname.length>10){
		window.alert("USER NAME SHOULD HAVE 5 TO 10 CHARACTERS");
		return false;
	}
	if(pswd==""){
		window.alert("ENTER YOUR PASSWORD");
		return false;
	}
	else if(!pswd.match( /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/)){
		window.alert("password should have at least ONE NUMBER, ONE LOWERCAE and ONE UPPERCASE letter at least SIX CHARACTERS");
		return false;
	}

	if(rpswd==""){
		window.alert("CONFORM YOUR PASSWORD");
		return false;
	}
	else if(rpswd!=pswd){
			window.alert("PASSWORD DONOT MATCH");
			return false;
		}
	}


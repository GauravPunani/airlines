console.log("file called");

function validateForm() {
	let name=document.getElementById("name");
	let	u_name= document.getElementById("username");
	let pass=document.getElementById("pass");
	let repass=document.getElementById("repass");
	let email=document.getElementById("email");
	if(pass.value==repass.value)
	{	
		return true;
	}
	else
	{
		alert("password did't matched");
		document.getElementById("pass").focus();
		return false;
	}
	
}
console.log(name)
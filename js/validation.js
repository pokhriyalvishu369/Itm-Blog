function validation(){
	var pass = document.getElementById("Enter-Password").value;
    var user = document.getElementById("User").value;
     var email = document.getElementById("email").value;
     var enroll=document.getElementById("enroll").value
var firstname=document.getElementById("firstname").value
var lastname=document.getElementById("lastname").value
var mobile=document.getElementById("mobile").value
var cpass=document.getElementById("Confirm-Password").value
var sec=document.getElementById("security").value
var ans=document.getElementById("answer").value
var file=document.getElementById("fileToUpload").value



	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	var userReg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{4,10}$/;
	var passReg = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,8}$/;
	
	

if( pass ==='' || email ==='' || user ==='' || firstname ==='' || lastname ==='' || mobile ==='' || cpass ==='' || sec ===''|| ans ===''|| file ==='')
	   {
		alert("Please fill  all fields...!!!!!!");
		return false;
	   }

	else if(!(email).match(emailReg))
	   {
		 alert("Invalid Email...!!!!!!");
		 return false;
	   }
	else if(!(user).match(userReg))
	   {
	     alert("Check instructions for Username...!!!!!!");
		 return false;
	   } 
	else if(!(pass).match(passReg))
	   {
	   	 alert("Check instructions for Password...!!!!!!");
		 return false;
	   } 
	   else 
	   {
	     return true;
	   }  




	   







}
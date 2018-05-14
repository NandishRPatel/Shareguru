			function test(){
				var pattern = /^\w+\@[a-zA-Z_.]+\.\w{2,5}$/;
				var notstart = /^[^0-9][a-z0-9]+$/;
				var m_pattern = /^9[0-9]+$/;
				var u_pattern=/^[A-Z][a-z]+$/;
				var uname=document.getElementById("uname").value;
				var firstname = document.getElementById("firstname").value;
				var lastname = document.getElementById("lastname").value;
				var phoneno = document.getElementById("phoneno").value;
				var email = document.getElementById("email").value;
				var pwd = document.getElementById("pwd").value;
				var cpwd = document.getElementById("cpwd").value;
				var sex = document.getElementById("gender").checked;
				
				if(firstname==""){
					alert("Please enter your firstname");
					document.getElementById("firstname").focus();
					
					return false;
				}
				if(lastname==""){
					alert("Please enter your lastname");
					document.getElementById("lastname").focus();
					
					return false;
				}
				if(u_pattern.test(firstname)==false){
					alert("Firstname can not start from digits and small letters");
					document.getElementById("firstname").focus();
					
					return false;
				}
				if(u_pattern.test(lastname)==false){
					alert("Lastname can not start from digits and small letters");
					document.getElementById("lastname").focus();
					
					return false;
				}
				else if(phoneno==""){
					alert("Please enter your Phone No");
					document.getElementById("phoneno").focus();
				
					return false;
					
				}
				else if(isNaN(phoneno)){
					alert("Phone No must contain numbers");
					document.getElementById("phoneno").focus();
				
					return false;
				}
				else if(m_pattern.test(phoneno)==false){
					alert("Phone No must start from 9");
					document.getElementById("phoneno").focus();
				
					return false;
				}
				
				else if(phoneno.length!=10)
				{
					alert("Phone No must be of 10 digits");
					document.getElementById("phoneno").focus();
				
					return false;
				}
				else if(email==""){
					alert("Please enter your Email Id");
					document.getElementById("email").focus();
				
					return false;
					
				}
				else if(pattern.test(email)==""){
					alert("Please enter valid Email Id");
					document.getElementById("email").focus();
				
					return false;
					
				}
				if(uname==""){
					alert("Please enter your Username");
					document.getElementById("uname").focus();
				
					return false;
				}
				if(notstart.test(uname)==false){
					alert("Username can not start from digits");
					document.getElementById("uname").focus();
				
					return false;
				}
				
				
				else if(pwd==""){
					alert("Please enter your Password");
					document.getElementById("pwd").focus();
				
					return false;
					
				}
				else if(cpwd==""){
					alert("Please confirm your Password");
					document.getElementById("cpwd").focus();
				
					return false;
					
				}
				if(cpwd!=pwd){
					alert("Password and ConfirmPassword must be same");
					document.getElementById("cpwd").focus();
				
					return false;
				}
				document.signup.submit();
			}
function change()
{
	document.signup.reset();
	}


			function testb(){
				var pattern = /^\w+\@[a-zA-Z_.]+\.\w{2,5}$/;
				var notstart = /^[^0-9][a-z0-9]+$/;
				var m_pattern = /^9[0-9]+$/;
				var u_pattern=/^[A-Z][a-z]+$/;
				var bname=document.getElementById("bname").value;
				var bfirstname = document.getElementById("bfirstname").value;
				var blastname = document.getElementById("blastname").value;
				var bphoneno = document.getElementById("bphoneno").value;
				var bemail = document.getElementById("bemail").value;
				var bpwd = document.getElementById("bpwd").value;
				var bcpwd = document.getElementById("bcpwd").value;
				var bsex = document.getElementById("bgender").checked;
				
				if(bfirstname==""){
					alert("Please enter your firstname");
					document.getElementById("bfirstname").focus();
				
					return false;
				}
				if(blastname==""){
					alert("Please enter your lastname");
					document.getElementById("blastname").focus();
				
					return false;
				}
				if(u_pattern.test(bfirstname)==false){
					alert("Firstname can not start from digits and small letters");
					document.getElementById("bfirstname").focus();
				
					return false;
				}
				if(u_pattern.test(blastname)==false){
					alert("Lastname can not start from digits and small letters");
					document.getElementById("blastname").focus();
				
					return false;
				}
				else if(bphoneno==""){
					alert("Please enter your Phone No");
					document.getElementById("bphoneno").focus();
				
					return false;
					
				}
				else if(isNaN(bphoneno)){
					alert("Phone No must contain numbers");
					document.getElementById("bphoneno").focus();
				
					return false;
				}
				else if(m_pattern.test(bphoneno)==false){
					alert("Phone No must start from 9");
					document.getElementById("bphoneno").focus();
				
					return false;
				}
				
				else if(bphoneno.length!=10)
				{
					alert("Phone No must be of 10 digits");
					document.getElementById("bphoneno").focus();
				
					return false;
				}
				else if(bemail==""){
					alert("Please enter your Email Id");
					document.getElementById("bemail").focus();
				
					return false;
					
				}
				else if(pattern.test(bemail)==""){
					alert("Please enter valid Email Id");
					document.getElementById("bemail").focus();
				
					return false;
					
				}
				if(bname==""){
					alert("Please enter your Username");
					document.getElementById("bname").focus();
				
					return false;
				}
				if(notstart.test(bname)==false){
					alert("Username can not start from digits");
					document.getElementById("bname").focus();
				
					return false;
				}
				else if(bpwd==""){
					alert("Please enter your Password");
					document.getElementById("bpwd").focus();
				return false;
					}
				else if(bcpwd==""){
					alert("Please confirm your Password");
					document.getElementById("bcpwd").focus();
				
					return false;
					
				}
				if(bcpwd!=bpwd){
					alert("Password and ConfirmPassword must be same");
					document.getElementById("bcpwd").focus();
					return false;

				}
				document.bsignup.submit();
			}

function changeb()
{
	document.bsignup.reset();
	document.loginpage.reset();
	document.blogin.reset();
	}
	

	i=1;
	function star(){
	
		setInterval("star2();",2000);}
		
		
		function star2()
	
		{
		document.getElementById("xxx").src="view/"+i+".png";
		i++;
		if(i==7)
		i=0;
		}
		
function ValidateEmail(email) 
{
 return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}
function ValidateMobile(mobile) 
{
 return /^\(\d{3}\)\d{3}-\d{4}$|^\d{3}-\d{3}-\d{4}$/.test(mobile) 
}


function abc()
{
var Name = document.getElementById("Name").value;
var address = document.getElementById("address").value;
var city = document.getElementById("city").value;
var mobile = document.getElementById("mobile").value;
var email = document.getElementById("email").value;
var make = document.getElementById("make").value;
var model = document.getElementById("model").value;
var year = document.getElementById("year").value;	

var flag;
Boolean(flag);
if (Name == "")
{
	document.getElementById('Name').style.borderColor = "red";
	flag = false;
}
else if (/^[0-9]+$/.test(Name)) 
{
alert("Name cannot Contains Numbers!");
document.getElementById('Name').style.borderColor = "red";
flag = false;
}
else if(Name.length <=2)
{
alert('Name is To Short!');
document.getElementById('Name').style.borderColor = "red";
flag = false;
}else{document.getElementById('Name').style.borderColor = "black";}

if (address == "")
{
	document.getElementById('address').style.borderColor = "red";
	flag = false;
}else{document.getElementById('address').style.borderColor = "black";}


if (city == "")
{
	document.getElementById('city').style.borderColor = "red";
	flag = false;
}
else if (/^[0-9]+$/.test(city)) 
{
alert("City Name cannot Contains Numbers!");
document.getElementById('city').style.borderColor = "red";
flag = false;
}
else if(city.length <=2)
{
alert('City Name is too short! Please input a valid city name');
document.getElementById('city').style.borderColor = "red";
flag = false;
}else{document.getElementById('city').style.borderColor = "black";}


if (mobile == "")
{
	document.getElementById('mobile').style.borderColor = "red";	
	flag = false;
}

else if(!ValidateMobile(mobile))
{
	document.getElementById('mobile').style.borderColor = "red";
	flag=false;	
}
else{document.getElementById('mobile').style.borderColor = "black";}

if (email== "")
{
	document.getElementById('email').style.borderColor = "red";
	flag = false;
}
else if(ValidateEmail(email))
{
	document.getElementById('email').style.borderColor = "black";
	flag=true;
}
else
{
alert('Please Enter a valid Email Address');
document.getElementById('email').style.borderColor = "red";
flag=false;
} 



if (make == "")
{
	document.getElementById('make').style.borderColor = "red";
	flag = false;
}
if (model == "")
{
	document.getElementById('model').style.borderColor = "red";
	flag = false;
}else{document.getElementById('model').style.borderColor = "black";}

if (year == "")
{
	document.getElementById('year').style.borderColor = "red";
	flag = false;
}
else if(isNaN(year))
{
	document.getElementById('year').style.borderColor = "red";	
	flag = false;
}
else if(year.length<4)
{
	document.getElementById('year').style.borderColor = "red";	
	flag = false;
}
else if(year.length>4)
{
	document.getElementById('year').style.borderColor = "red";	
	flag = false;
}
else{document.getElementById('year').style.borderColor = "black";}



if (flag == false)
{
	alert('Please Enter valid data');
}
return flag
}
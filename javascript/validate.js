function checkform()
{
    var firstname=document.form.firstname.value;
	var lastname=document.form.lastname.value;
	var email=document.form.email.value;
	var username=document.form.username.value;
	var password=document.form.pwd.value;
	var cpassword=document.form.pwdcon.value;
	var address1=document.form.add1.value;
	var address2=document.form.add2.value;
	var city=document.form.city.value;
    var country=document.country.phone.value;
    
    //check password confirmation
	
	if (password!=cpassword)
	{
		alert("Passwords do not match");
    }

    
}
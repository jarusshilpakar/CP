
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>sign up</title>
<script>
//Validation
function check() {
	var password=document.form1.password.value;
	var repassword=document.form1.repassword.value;
    if(password===repassword) {
        document.getElementById('message').innerHTML = "correct password";
    } else {
        document.getElementById('message').innerHTML = "InCorrect password";
    }
}
function frmVal()
{



var phone = document.form1.no.value;
var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
    

if(phone.match(phoneNum)) {
	                       document.getElementById('msg').innerHTML = "";

                return true;
            }
            else {
                       document.getElementById('msg').innerHTML = "invalid phone number_format";
 
            }
}

</script>
</head>

<body >
<form name="form1" action="<?php echo base_url();?>customerdetails/updateIt" method="post">
	
		<center>
	Id:<input type="text" size="15" name="id" title="id"   /><br /><br />

		Name:<input type="text" size="15" name="name" title="namebox"   /><br /><br />
		Username:<input type="text" size="15" name="username" title="unamebox"   /><br /><br />
		password:<input type="password" size="15" name="password" /><br /><br />
		Re-password:<input type="password" size="15" name="repassword" onchange="check();"/>
		<span id="message"> </span><br /><br />
		Address:<input type="text" size="15" name="address" title="adressbox"  /><br /><br />
		Gender:<input type="radio" name="gnd" value="male" />male
		<input type="radio" name="gnd"  value="female" />female<br /><br />
		
		Contact no.: <input type="text" size="20" name="no" onkeypress="frmVal();" />	<span id="msg"> </span><br /><br />

		Email: <input type="email" size="20" name="email" placeholder="email"  /><br /><br />
		
		<input type="submit" name="update" value="update" />
		
		<center>
	
</form>
<h1>Delete user</h1>
<form name="form1" action="<?php echo base_url();?>customerdetails/deleteIt" method="post">
			Username:<input type="text" size="15" name="username" title="unamebox"   /><br /><br />
		<input type="submit" name="delete" value="delete" />

</form>

</body>
</html>

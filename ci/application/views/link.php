<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>link</title>
</head>

<body>

<h2 ><font style="background-color:#0000FF" color="#FFFFFF">Admin Dashboard</font></h2>
<a href="<?php echo site_url('Welcome/addProduct')?>" target="abc"> <button type="submit">Add product</button></a><br><br><br>
<a href="<?php echo site_url('user/updateProductdetails')?>" target="abc"> <button type="submit">Edit product</button></a><br><br><br>
<a href="<?php echo site_url('user/updateUserdetails')?>?id=1" target="abc"> <button type="submit">Edit profile</button></a><br><br><br>
<a href="ismt.html" target="abc"> <button type="submit">view customer</button></a><br><br><br>
<a href="<?php echo site_url('Welcome/home')?>" target="abc"> <button type="submit">Logout</button></a><br><br><br>


</body>
</html>

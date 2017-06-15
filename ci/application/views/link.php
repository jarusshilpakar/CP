<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">

<title>link</title>
</head>

<body>

<h2 ><font style="background-color:#0000FF" color="#FFFFFF">Admin Dashboard</font></h2>
<a href="<?php echo site_url('Welcome/addProduct')?>" target="abc"> <button type="submit" class="btn btn-primary">Add product</button></a><br><br><br>
<a href="<?php echo site_url('user/updateProductdetails')?>" target="abc"> <button type="submit" class="btn btn-primary">Edit product</button></a><br><br><br>
<a href="<?php echo site_url('user/updateMyprofile')?>?id=1" target="abc"> <button type="submit" class="btn btn-primary">Edit profile</button></a><br><br><br>
<a href="<?php echo site_url('user/userList')?>" target="abc"> <button type="submit" class="btn btn-primary">view customer</button></a><br><br><br>


</body>
</html>

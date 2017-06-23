<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>frame</title>
</head>

<frameset rows="10%,*">
	<frame name="ja" src="<?php echo site_url('Welcome/heading')?>" /><a href="<?php echo site_url('welcome/login')?>"> <button type="submit" class="btn btn-primary">logout</button></a><br><br><br>

	<frameset cols="20%,*">
		<frame name="banner" src="<?php echo site_url('Welcome/link')?>" />
		<frame src="<?php echo site_url('Welcome/dashboard')?>" name="abc" />
	</frameset>

</frameset>



</html>

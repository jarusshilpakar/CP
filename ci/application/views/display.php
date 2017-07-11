<?php
//echo $modelmsg;
?>
<table border="1">
<tr>
	<th>Name</th>
	<th>Username</th>
	<th>password</th>
	<th>gender</th>
	<th>contact</th>
	<th>email</th>
</tr>
<?php
foreach ($select->result() as $mydata){
?>
<tr>
	<td><?php echo $mydata->name;?></td>
	<td><?php echo $mydata->username;?></td>
	<td><?php echo $mydata->password;?></td>
	<td><?php echo $mydata->gender;?></td>
	<td><?php echo $mydata->contact;?></td>
	<td><?php echo $mydata->email;?></td>
		
</tr>
<?php
}
?>

</table>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>

		<TITLE>Customer details</TITLE>
			  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
	 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/view list.css">
	</head>
	<body>
		<?php echo $this->session->flashdata("delete");?>
		<table id="table" class="table table-hover table-mc-light-blue">
			<tr>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Address</td>
				<td>Phone</td>
				<td>Email</td>
				<td>Username</td>
				<td>Password</td>
				<td>Action</td>
		
			</tr>
		
				<?php 
					//if ($productlist->num_rows() > 0){
						foreach ($customerlist as $row){
				?>
			<tr>
				<td><?php echo $row->firstname?></td>
				<td><?php echo $row->lastname ?></td>
				<td><?php echo $row->address ?></td>
				<td><?php echo $row->phone ?></td>
				<td><?php echo $row->email ?></td>
				<td><?php echo $row->username ?></td>
				<td><?php echo $row->password ?></td>
				<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>user/deleteUser?id=<?php echo $row->user_id; ?>">
				<button type="submit" name="delete" class="btn btn-primary">delete</button></a></td>
			</tr>
				
			<?php 
						}
//					}
					
			?>
		</table>
	</body>
</html>
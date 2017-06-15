<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
<head>
  <meta charset="UTF-8">
  <title>Product</title>
  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
	 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/view list.css">

  
</head>


	
	<body>
	
	  <div id="demo">
		<h1>Surya Wood Carving and Furniture center</h1>
			<h2>Available product</h2>
  	<a href="<?php echo site_url('user/updateMyprofile')?>" ><button type="submit" name="My profile" class="btn btn-primary">My profile</button>
	
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
	<div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  
		<table id="table" class="table table-hover table-mc-light-blue">
		
			<thead>
				<tr>
					<th>Name</th>
					<th>Type</th>
					 <th>Size</th>
					 <th>Price</th>
					 <th>image</th>

				</tr>
			</thead>
		
		
				<?php 
					//if ($productlist->num_rows() > 0){
						foreach ($productlist as $row){
				?>
			 

			<tr>
				<td><?php echo $row->product_name?></td>
				<td><?php echo $row->product_type ?></td>
				<td><?php echo $row->size ?></td>
				<td><?php echo $row->price ?></td>
				<td><img src="<?php echo base_url();?>assets/img/<?php echo $row->image ?>" height="100" width="100"></td>
				<td><button type="submit" name="order" class="btn btn-primary">order</button></td>

			</tr>
				
			<?php 
						}
//					}
					
			?>
			
			</table>
		</div>
	</div>
	<a href="<?php echo site_url('user/logout')?>" ><button type="submit" name="logout" class="btn btn-warning">logout</button></a>
	
	</body>
</html>
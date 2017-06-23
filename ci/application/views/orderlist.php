<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>

		<TITLE>product details</TITLE>
		  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
	 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/view list.css">
	</head>
	<body>
	<div id="demo">
		
  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
	<div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
	<form action="<?php echo base_url();?>Order/orderList"  method="post">

		<table id="table" class="table table-hover table-mc-light-blue">
		
				
			<thead>
				<tr>
					<th>User_id</th>
					<th>Product_id</th>
					 <th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
		
				<?php 
					//if ($productlist->num_rows() > 0){
						foreach ($orderlist as $row){
				?>
			<tr>
				<td><?php echo $row->user_id?></td>
				<td><?php echo $row->product_id ?></td>
				<td><?php echo $row->price ?></td>
				<td><a onclick="return confirm('Do you want to cancel order?')" href="<?php echo base_url();?>Order/deleteOrder?id=<?php echo $row->order_id; ?>">
				<button type="submit" name="cancel" class="btn btn-primary">cancel order</button></a></td>

			</tr>
				
			<?php 
						}
//					}
					
			?>
		</table>
			</div>
		</div>
		</form>
	</body>
</html>
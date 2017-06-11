<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>

		<TITLE>product details</TITLE>
	</head>
	<body>
		
		<form action="<?php echo base_url();?>User/updateDetails"  method="post">
		<table border="1">
			<tr>
				<td>Product Name</td>
				<td>Product Type</td>
				<td>Product Size</td>
				<td>Price</td>
				<td>image</td>
				<td>Action</td>
		
			</tr>
		
				<?php 
					//if ($productlist->num_rows() > 0){
						foreach ($productlist as $row){
				?>
			<tr>
				<td><?php echo $row->product_name?></td>
				<td><?php echo $row->product_type ?></td>
				<td><?php echo $row->size ?></td>
				<td><?php echo $row->price ?></td>
				<td><?php echo $row->image ?></td>
				<td><?php echo anchor("User/editdetails/{$row->product_id}",'edit')?></td>
				<td><a onclick="return confirm('Do you want to delete?')" href="<?php echo base_url();?>user/deleteProduct?id=<?php echo $row->product_id; ?>">delete</a></td>

			</tr>
				
			<?php 
						}
//					}
					
			?>
		</table>
		</form>
	</body>
</html>
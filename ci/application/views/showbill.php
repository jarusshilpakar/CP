<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
	<head>

		<TITLE>bill details</TITLE>
			  <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>

 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/bootstrap/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
	 <link rel = "stylesheet" href = "<?php echo base_url();?>assets/css/view list.css">
	</head>
	<body>
			  <div id="demo">
		<h1>Surya Wood Carving and Furniture center</h1>
			<h2>Sallaghari,Bhaktapur</h1>
		
		
			
		<form action="<?php echo base_url();?>order/showBill"  method="post">
		<table id="table" class="table table-hover table-mc-light-blue">
			<tr>
				<td>Product Name</td>
				<td>Price</td>
				
		
			</tr>
			<?php $total_sum=0; ?>
				<?php 
						foreach ($bill as $row){
				?>
			<tr>
				<td><?php echo $row['product_name']?></td>
				<td><?php echo $row['price'] ?></td>
				<?php $total_sum+=$row['price'];?>
			</tr>
			
				
			<?php 
						}
			?>
			<tr>
				<td>Gross Amount</td>
				<td><?php echo $total_sum;?></td>

			</tr>
			<tr>
				<td>Discount</td>
				<td>20%<td>
			</tr>
			<tr>
				<td>Net Amount</td>
				<td><?php echo ($total_sum-((20/100)*$total_sum));?></td>
			</tr>
			
		</table>
		
		</form>
			<a href="<?php echo site_url('user/productDetails')?>" ><button type="submit" name="back" class="btn btn-warning">Back</button></a>

	</div>
	</body>
</html>
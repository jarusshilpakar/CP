<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Add product</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

   
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/register.css">

  
</head>

<body>

    <body>

      <form action="<?php echo base_url();?>customer/getRegister/" method="post">
      
        <h1>Add Product Details</h1>
        
        <fieldset>
		<label>Product Name</label>
          <input type="text" id="name" name="name"  required>
		  
		  Product type<select name="type">
						<option>Wood Carving</option>
						<option>Furniture</option>
					</select>
		  <label>Product size</label>
	     <input type="text" id="size" name="size" required>
		  
         <label>Price</label>
         <input type="text" id="price" name="price" required>
		 
          
        </fieldset>
        
      
        <button type="submit">ADD</button>
      </form>
      
    </body>
</html>
  
  


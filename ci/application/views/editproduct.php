<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Edit product</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

   
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/register.css">

  
</head>

<body>


    <body>
			<?PHP 
foreach ($productlist as $data){
	?>
		<?php echo form_open_multipart(base_url()."user/editProduct/");?>
      
        <h1>Edit Product Details</h1>
        
        <fieldset>

		  <input type="hidden" id="id" name="id" value="<?php echo $data->product_id;?>" >
		<label>Product Name</label>
          <input type="text" id="name" name="name"  value="<?php echo $data->product_name; ?>">
		  
		  Product type<select name="type">
						<option>Wood Carving</option>
						<option>Furniture</option>
					</select>
		  <label>Product size</label>
	     <input type="text" id="size" name="size" value="<?php echo $data->size; ?>"required>
		  
         <label>Price</label>
         <input type="text" id="price" name="price" value="<?php echo $data->price; ?>" required>
		 <label>image</label>
		 <input type="file" id="image" name="file" value="<?php echo $data->image; ?>"required>
          
        </fieldset>
        
      
        <button type="submit">update</button>
      </form>

<?php
}
?>
      
    </body>
</html>
  
  


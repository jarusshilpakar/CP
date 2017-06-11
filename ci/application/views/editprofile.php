         <link rel="stylesheet" href="<?php echo base_url();?>assets/css/register.css">

   <body>
	<?php 
		foreach ($record as $data){
			
		
	?>
      <form action="<?php echo base_url();?>user/updateUser/" method="post">
      
        <h1>Edit Profile</h1>
        
        <fieldset>
			<input type="hidden" name="id" value="<?php echo $data->user_id; ?>"  >      
			
			<input type="text" id="fname" name="fname" value="<?php echo $data->firstname; ?>" >
		  
          <input type="text" id="lname" name="lname" value="<?php echo $data->lastname; ?>">
		  
	     <input type="text" id="address" name="address" value="<?php echo $data->address; ?>">
		  
         
         <input type="email" id="mail" name="email" value="<?php echo $data->email; ?>">
		  
		 
          <input type="text" id="phone" name="phone" value="<?php echo $data->phone; ?>">
		  
          <input type="text" id="uname" name="uname" value="<?php echo $data->username; ?>">
          
         
          <input type="password" id="password" name="password" value="<?php echo $data->password; ?>">
          
        </fieldset>
        
      
        <button type="submit">Update</button>
      </form>
     <?php 
		}
	 ?> 
    </body>
         <link rel="stylesheet" href="<?php echo base_url();?>assets/css/register.css">

   <body>

      <form action="<?php echo base_url();?>user/getRegister/" method="post">
      
        <h1>Edit Profile</h1>
        
        <fieldset>
			<input type="hidden" name="idafteredit" value="<?php echo $data['user_id']; ?>"          <input type="text" id="fname" name="fname" placeholder="Enter firstname" required>
		  
          <input type="text" id="lname" name="lname" placeholder="Enter lastname"required>
		  
	     <input type="text" id="address" name="address" placeholder="Enter Address"required>
		  
         
         <input type="email" id="mail" name="email" placeholder="Enter email"required>
		  
		 
          <input type="text" id="phone" name="phone" placeholder="Enter phone number"required>
		  
          <input type="text" id="uname" name="uname" placeholder="username"required>
          
         
          <input type="password" id="password" name="password" placeholder="password" required>
          
        </fieldset>
        
      
        <button type="submit">Update</button>
      </form>
      
    </body>
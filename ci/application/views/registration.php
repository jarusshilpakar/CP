<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->

        <!-- THEME STYLES -->
        <link href="<?php echo base_url();?>assets/css/layout.min.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/register.css">

  
</head>

<body>
<!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="navbar-logo">
						
                            <a class="navbar-logo-wrap" href="index.html">
                                <img class="navbar-logo-img" src="<?php echo base_url();?>assets/img/woodhouse.jpg">
                            </a>
							
                        </div>
                        <!-- End Logo -->
						<font size=6><b><i>SURYA WOOD CARVING AND FURNITUER CENTER</i></b></font>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse nav-collapse">
                        <div class="menu-container">
                            <ul class="navbar-nav navbar-nav-right">
                                <!-- Home -->
                                <li class="nav-item">
                                    <a class="nav-item-child active" href="<?php echo site_url('Welcome/home')?>">
                                        Home
                                    </a>
                                </li>
                                <!-- End Home -->

                                <!-- Contact -->
                                <li class="nav-item">
                                    <a class="nav-item-child" href="<?php echo site_url('Welcome/contact')?>">
                                        Contact
                                    </a>
                                </li>
                                <!-- End Contact -->
								<li class="nav-item">
                                    <a class="nav-item-child" href="<?php echo site_url('Welcome/login')?>">
                                        login
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
   
    <body>

      <form action="<?php echo base_url();?>user/getRegister/" method="post">
      
        <h1>Registration Form</h1>
        
        <fieldset>
          
          <input type="text" id="fname" name="fname" placeholder="Enter firstname" required>
		  
          <input type="text" id="lname" name="lname" placeholder="Enter lastname"required>
		  
	     <input type="text" id="address" name="address" placeholder="Enter Address"required>
		  
         
         <input type="email" id="mail" name="email" placeholder="Enter email"required>
		  
		 
          <input type="text" id="phone" name="phone" placeholder="Enter phone number"required>
		  
          <input type="text" id="uname" name="uname" placeholder="username"required>
          
         
          <input type="password" id="password" name="password" placeholder="password" required>
          
        </fieldset>
        
      
        <button type="submit">Register</button>
      </form>
      
    </body>
</html>
  
  
</body>
</html>

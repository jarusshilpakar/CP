<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Log-in</title>
  
  
  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/vendor/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->

        <!-- THEME STYLES -->
        <link href="<?php echo base_url();?>assets/css/layout.min.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="<?php echo base_url();?>assets/css/login.css">

  
</head>

<body>


   <!--========== HEADER ==========-->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                       

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
                                    <a class="nav-item-child" href="contact.html">
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
  <div class="login-card">
    <h1>Log-in</h1><br>
  <form action="<?php echo base_url();?>user/login" method="post">
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>
    
  <div class="login-help">
    <a href="<?php echo site_url('Welcome/registration')?>">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>

  
</body>
</html>

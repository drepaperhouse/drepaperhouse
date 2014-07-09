<!DOCTYPE html>
<html lang="en">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <title>Login Page</title>
   
   

    <!-- Bootstrap -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" /> 
    

</head>

  <body>
   <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
      
      
<div class="container">
 <?php echo validation_errors(); ?>
   <?php echo form_open('verifylogin'); ?>
    <br></br>
    
    <div class="jumbotron">
        <p>Welcome, please log in..</p>
    </div>
    <div class="well">
    
    <div class="form-group">
     <label for="username">Username:</label>
     <input type="text" size="20" id="username"  class="form-control" name="username"/>
     
    </div>
    
    <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" size="20" id="password" class="form-control" name="password"/>
     </div>
    
     <input type="submit" class="btn btn-primary" value="Login"/>
    </div> <!--/well -->
    
</div> <!-- /container -->

</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script> 
</html>

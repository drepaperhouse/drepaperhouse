<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Drepaperhouse</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Parallax Content Slider with CSS3 and jQuery" />
        <meta name="keywords" content="slider, animations, parallax, delayed, easing, jquery, css3, kendo UI" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/demo.css' ?>" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/style.css' ?>" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/app.css' ?>" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>" /> 
   
        <script type="text/javascript" src="<?php echo base_url().'assets/js/modernizr.custom.28468.js' ?>"/></script>
	<link href='http://fonts.googleapis.com/css?family=Economica:700,400italic' rel='stylesheet' type='text/css'>
                
      
      
      
	 
		<noscript>
			<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/nojs.css' ?>" /> 
		</noscript>
    </head>
    <body>
        
        <?php include_once('navbar.php'); ?>
        <div class="slider-inner">   
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2>Welcome!</h2>
					<p>My name is Andre and welcome to my website. This website is just for kicks!</p>
					<a href="#" class="da-link">About Me</a>
					<div class="da-img"><img src="<?php echo base_url().'assets/images/home.png' ?>" alt="image01" /></div> 
				</div>
				<div class="da-slide">
					<h2>Gallery</h2>
					<p>Pictures I have took, while out and about.</p>
					<a href="#" class="da-link">Click</a>
					<div class="da-img"><img src="<?php echo base_url().'assets/images/gallery.png' ?>" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Code</h2>
					<p>I'm Computer Science graduate. So here is some code that can be usefull</p>
					<a href="#" class="da-link">Click</a>
					<div class="da-img"><img src="<?php echo base_url().'assets/images/code.png' ?>" alt="image01" /></div>
				</div>
				<div class="da-slide">
					<h2>Critic</h2>
					<p>I have passion for film and music. I'll note my opinions here. </p>
					<a href="<?php echo base_url().'index.php/film_controller' ?>" class="da-link">Click</a>
					<div class="da-img"><img src="<?php echo base_url().'assets/images/film.png' ?>" alt="image01" /></div>
				</div>
				<nav class="da-arrows">
                                    <span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</nav>
			</div>
        </div>
        <div class="container" >   
            <div class="row">
        <div class="col-md-6"align="left">
            <h3>Welcome! My mind on the web.</h3>
            <p>"My name is Andre. I graduated from the University of Texas at El Paso. This website
            will contain my opinions on films I've seen (past or present). I will also have some code snippets since I'm a computer scientist. And I will throw in 
            pictures of crap I've been in. Enjoy!"</p>
        </div>
                      <div class="headline"><h2>Contact Information</h2></div>
        <address class="md-margin-bottom-40">
            Phone: 915 412 6037 <br />
            Email: <a href="mailto:dre.paperhouse.com" class="">dre.paperhouse@gmail.com</a>
        </address>
        </div> 
            
         <embed name="lostmojo" src="/web_design/lostmojo.wav" loop="false" hidden="true" autostart="true">   
            
        <?php include_once('recent_stuff.php'); ?>
         
        </div>
         <?php include_once('footer.php'); ?>
        
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.cslider.js' ?>"></script> 
                <script type="text/javascript" src="<?php echo base_url().'assets/js/app.js' ?>"></script>             
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider();
				
			});
		</script>	
       
         
                
                
    </body>
</html>
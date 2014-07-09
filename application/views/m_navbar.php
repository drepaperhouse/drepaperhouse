<!doctype html>
<html>
<head>  
    <meta charset="utf-8"/>
        <title>Drepaperhouse</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url() . 'assets/css/mobilemenu.css' ?>"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
 
	<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
	</script>
</head>

<body>
    
    
    <button class="nav-button">Menu</button>
    
    <ul class="primary-nav">
        
      <li><a href="<?php echo base_url().'index.php' ?>"><i class="fa fa-home fa-2x"> Home</i></a></li>   
      <li class="parent">
                    <a href="#"><i class="fa fa-picture-o fa-2x"> Gallery</i></a>
                    <ul>
                        <li><a href="<?php echo base_url().'index.php/m_gallery_controller/getGallery/4' ?>">Acapulco</a></li>
                        <li><a href="<?php echo base_url().'index.php/m_gallery_controller/getGallery/1' ?>" >San Francisco</a></li>
                        <li><a href="<?php echo base_url().'index.php/m_gallery_controller/getGallery/2' ?>" >San Diego</a></li>
                         <li><a href="<?php echo base_url().'index.php/m_gallery_controller/getGallery/3' ?>">San Antonio</a></li>
                    </ul>
      </li>
                    <li><a href=" <?php echo base_url().'index.php/m_film_controller' ?>"><i class="fa fa-film fa-2x"> Critic</i></a></li>  
                <li><a href="http://www.drepaperhouse.wordpress.com"><i class="fa fa-pencil-square-o fa-2x"> Blog</i></a>
                </li>
               <li><a href="#" onclick="notice()">Code</a></li>
               <li><a href="#" onclick="notice()">About Me</a></li>    
    
    </ul>
    
    
</body>
</html>

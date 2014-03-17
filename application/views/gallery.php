<!DOCTYPE HTML>

<!--
/*
 * Photobox
 *
 * Copyright 2012, Yair Even Or
 * https://dropthebit.com
 *
 * Licensed under the MIT license:
 * http://www.opensource.org/licenses/MIT
 */
-->


<html lang="en">
    <head>
        <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
        <meta charset="utf-8">
        <title>My Gallery!</title>
        <meta name="description" content="A lightweight CSS3 image gallery that is pretty to look and and easy to use">
        <meta name="viewport" content="width=device-width">
        <link rel="shortcut icon" href="favicon.ico"/>
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/gallery.css' ?>"> 
        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/photobox.css' ?>"> 

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src='<?php echo base_url() . 'assets/js/photobox.js' ?>'></script> 
    </head>
    
    <?php
    foreach ($latest as $rec) {
        
         $g_title = $rec->g_title;
         $g_story = $rec->g_story; 
         $numberOfpics = $rec->count; 
         $images = $rec->images; 
    }
    
    ?>
    
    
    
    
    <body>
        <div id='wrap'>
            <div class='main'>
                <h1><?php echo $g_title ?></h1>
                <h2><?php echo $g_story ?></h2>
                  <a href="<?php echo base_url() . 'index.php' ?>" class='btn'>Back Home</a>
                 <?php foreach ($list as $row): ?>
                  <p><a href = "<?php echo site_url("film_controller/getFilmReview/" . $row->gallery_id); ?>"> <?php echo $row->g_title ?> </a> </p> 
                   <?php endforeach; ?>   
   
            </div>
            <ul id='gallery'>
                
             
                <?php $count = 1;  
                      $max = intval($numberOfpics); 
                       
                ?>
                
                <?php for($count=1; $count < $max; $count++): ?> 
                <li class='loaded'>
                 <a href="<?php echo base_url() .'assets/images/'.$images.$count.'.JPG' ?>">
                 <img src="<?php echo base_url() .'assets/images/'.$images.$count.'.JPG' ?>" alt="<?php echo $count; ?>">
                 </a>
                </li>
                <?php endfor; ?>
               
                
    
            </ul>

        </div>
        
     <!--   <script src='<?php echo base_url() . 'assets/js/main.js' ?>'></script> -->
        <script>
                  
          
           $('#gallery').photobox('a', { thumbs:true }, callback);
		// using setTimeout to make sure all images were in the DOM, before the history.load() function is looking them up to match the url hash
		setTimeout(window._photobox.history.load, 1000);
		function callback(){
			console.log('callback for loaded content:', this);
		};
        </script>
    </body> 
</html>


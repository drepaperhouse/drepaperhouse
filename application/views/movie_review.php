
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I love movies</title>

        <!-- Bootstrap 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/demo.css' ?>" /> 
        -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/film_style.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" /> 

        <script>
       
        </script>
    </head>
    
        <?php
    foreach ($review as $rec) {
        $title = $rec->title;
        $genre = $rec->genre;
        $director = $rec->director;
        $actors = $rec->actors;
        $yr = $rec->yr;
        $summary = $rec->summary;
        $image = $rec->image_src;
        $theLink =$rec->link; 
        $youtube = $rec->youtube; 
    }
    ?>
    
    <body>
<div class="container">
   <a href ="<?php echo base_url().'index.php/film_controller' ?>"><h1><i class="fa fa-list" align="center"> Return to List</i></h1></a> 
   <h1>My opinion</h1>
  
   
    <div class="service-details">
    <img src="<?php echo base_url() . 'assets/images/' . $image ?>" alt="realm">
  
    <div class="service-hover-text">
        <h4><?php echo $title ?>  , <?php echo $yr ?></h4>
       
      <p> Genre: <?php echo $genre ?></p>
      <p> Director: <?php echo $director ?></p>
      <p> Cast: <?php echo $actors ?></p>
     
      <a href="<?php echo $theLink ?>" ><i class="fa fa-film"></i></a>
       <iframe width="356" height="220" src="<?php echo $youtube ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="service-white service-text">
          <h4><?php echo $title ?></h4>
          
          <p><?php echo $summary ?> </p>
  
     
    </div>
  </div>
 
  
</div>
         
</body>
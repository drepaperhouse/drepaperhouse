<!DOCTYPE html>
<html lang="en">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <title>My Gallery</title>
   
   

    <!-- Bootstrap -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" /> 
  
</head>

    <!-----------PHP CODE--------->
    <?php
    foreach ($latest as $rec) {

        $g_title = $rec->g_title;
        $g_story = $rec->g_story;
        $numberOfpics = $rec->count;
        $images = $rec->images;
    }
    ?>
    <!-----------PHP CODE---------> 

<body>
   <?php include_once("m_navbar.php"); ?> 
 
    <div class="list-group">
        <a href="#" class="list-group-item active"><h1> <?php echo $g_title; ?> Photos</h1></a> 
    
   
    <?php foreach ($list as $row): ?>
       <a href="<?php echo site_url("m_gallery_controller/getGallery/" . $row->gallery_id); ?>"  class="list-group-item"> <?php echo $row->g_title ?></a>
        <?php endforeach; ?>
    
    </div>
    
    <div class="row">
        <?php $count = 1; 
         $max = intval($numberOfpics); ?>
        
        <?php for ($count = 1; $count < $max; $count++): ?>
         <div class="col-xs-6 col-md-4">
             <div class="thumbnail">
             <a href="<?php echo base_url() . 'assets/images/'. $images . $count . '.jpg' ?>">
             <img src="<?php echo base_url() . 'assets/images/small/' . $images . $count . '.jpg' ?>" alt="<?php echo $count ?>">
             </a> 
             </div>
            </div>
         <?php endfor; ?>  
             
    </div>
    
  

      
</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script> 

</html>

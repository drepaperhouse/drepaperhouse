
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <title>At the Movies</title>
   
   

    <!-- Bootstrap -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" /> 
  
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
            $theLink = $rec->link;
            $youtube = $rec->youtube;
            $special = $rec->special;
        }
    ?>
  <body>
    <?php include_once("m_navbar.php"); ?>
  <h1><?php echo $title ?></h1>
  
  <div class="panel-group" id="accordion">
      
      <div class="panel panel-default">
          
          <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">More Information</a></h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse">
              
              <div class="panel-body">
                  <p>Year: <?php echo $yr ?></p>
                  <p>Director: <?php echo $director ?></p>
                  <p>Cast: <?php echo $actors ?></p>
                  <p>Genre: <?php echo $genre ?></p>
                  <a href="<?php echo $theLink ?>"><p>IMDB </p></a>
              </div>
             
          </div>
      </div>  
      
            <div class="panel panel-default">
          
          <div class="panel-heading">
              <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Trailer</a></h4>
          </div>
          <div id="collapseTwo" class="panel-collapse collapse">
              
              <div class="panel-body">
             <iframe width="400" height="225" src="<?php echo $youtube ?>" frameborder="0" allowfullscreen></iframe>
              </div>
             
          </div>
      </div> 
      
      
      <div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Review  <?php echo $special ?> </h3>
  </div>
  <div class="panel-body">
  <p style="text-indent: 45px"><?php echo $summary ?></p>
  </div>
</div>
      <div class="btn-group btn-group-justified">
          
          <div class="btn-group">
              <button type="button" class="btn btn-default btn-lg"><a href="<?php echo base_url().'index.php/m_film_controller' ?>" class="more">Back to List</a></button>
          </div>
      </div>   
        
  </div>
    
    
</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script> 
</html>
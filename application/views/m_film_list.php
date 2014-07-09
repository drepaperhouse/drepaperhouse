<!DOCTYPE html>
<html lang="en">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <title>My Movie List</title>
   
   

    <!-- Bootstrap -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" /> 
  
</head>
        <?php
        foreach ($review as $rec) {
        $title = $rec->title;
        $film_id = $rec->film_id; 
        $genre = $rec->genre;
        $director = $rec->director;
        $actors = $rec->actors;
        $yr = $rec->yr;
        $summary = $rec->summary;
        $image = $rec->image_src;
    }
    ?>
  <body>
    <?php include_once("m_navbar.php"); ?>
  <h1>The Film List</h1>
     <marquee bgcolor=\"#cccccc\" loop=\"-1"\ scrollamount=\"2"\ width=\"100%"\>
                     <a href="<?php echo site_url("m_film_controller/getFilmReview/" . $film_id); ?>">Latest Review is " <?php echo $title ?> "</a></marquee>
                 <br></br>
      <table class="table table-striped">
          <thead>
              </tr>
              <th>#</th>
              <th>Title</th>
              <th>Year</th>
              <th>Genre</th>
              </tr>
          </thead>   
          <tbody>
             <?php $count = 1; ?>
             <?php foreach($results as $row): ?>    
              <tr>
                  <td><?php echo $count ?></td>
                  <td><a href="<?php echo site_url("m_film_controller/getFilmReview/" . $row->film_id); ?>" ><?php echo $row->title ?></a></td>
                  <td><?php echo $row->yr ?></td>
                  <td><?php echo $row->genre ?></td>
              </tr>
               <?php $count++; ?>
              <?php endforeach; ?>  
              
          
          </tbody>
      </table>  
    
    
</body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script> 
</html>
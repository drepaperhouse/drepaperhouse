<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>I love movies</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/demo.css' ?>" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>" />
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
    }
    ?>
    <body>

        <?php include_once('navbar.php'); ?>
        <div class="container">
  <marquee bgcolor=\"#cccccc\" loop=\"-1"\ scrollamount=\"2"\ width=\"50%"\>
      Latest Review is " <?php echo $title ?> "</marquee>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Film List</h3>
                </div>
                <div clas="panel-body">
                    
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><h3>#</h3></th>
                            <th><h3>Title</h3></th>
                            <th><h3>Year</h3></th>
                            <th><h3>Genre</h3></th>
                        </tr>
                         </thead>
                         
                         <tbody>
                        <?php $count = 1; ?>     
                        <?php foreach ($results as $row): ?>
                         <tr align="left">
                         <td><?php echo $count++; ?></td>    
                        <td><a href = "<?php echo site_url("film_controller/getFilmReview/" . $row->film_id); ?>"> <?php echo $row->title ?> </a> </td>
                        <td><?php echo $row->yr ?></td>
                         <td><?php echo $row->genre ?></td>
                         </tr>
                        <?php endforeach; ?>    
                    
                        </tbody>
                    </table>
                
                </div>


            </div>   



        </div>

    </body>
</html>
<!DOCTYPE html>
<html lang="en">
  <head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
     <meta name="viewport" content="width=device-width, initial-scale=1"/>
     <title>Film Review Entry </title>
   
   

    <!-- Bootstrap -->
    <link href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" /> 
    
  </head>
  
  <body>
      

      
      
      <div class="container">
          <div class="row ">
              
              <br></br>
              <div class="col-md-9 col-md-push-3 well">
                  
                  <?php //echo form_open('review_controller/input'); 
                 // echo "<p>Input<p>";
                //  echo form_input('caca'); 
                //  echo form_close(); ?>
          <form action="<?php echo base_url().'index.php/review_controller/input' ?>" method="post" accept-charset="utf-8" class="form-horizontal">
              <fieldset>
                  
                  <legend>Add film review</legend>
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Title</label>
                 <div class="col-sm-10">
                  <input type="text" class="form-control" name="title">
                 </div>
                  </div>
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">Genre</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="genre">
                  </div>
                  </div>
                  
                    <div class="form-group">
                  <label class="col-sm-2 control-label">Year</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="yr">
                  </div>
                  </div>
                  
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Director</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="director">
                  </div>
                  </div>
                  
                    <div class="form-group">
                  <label class="col-sm-2 control-label">Casts</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="actors">
                  </div>
                  </div> 
                  
                  <div class="form-group">
                  <label class="col-sm-2 control-label">IMD Link</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="link">
                  </div>
                  </div>
                  
                    <div class="form-group">
                  <label class="col-sm-2 control-label">Video</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="youtube">
                  </div>
                  </div>
                  
                    <div class="form-group">
                  <label class="col-sm-2 control-label">Date</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control" name="special">
                  </div>
                  </div>
                  
                  
                   <div class="form-group">
                  <label class="col-sm-2 control-label">Review</label>
                  <div class="col-sm-10">
                  <textarea type="text" name="summary" class="form-control"style="height:250px"></textarea>
                  </div>
                  </div>
                  <div class="col-sm-2 control-label">
                      
                      
               
                 <input type="submit" name="input" value="Submit">
                  </div>
              </fieldset>   
              
          </form>
                  
              </div>
          <div class="col-md-3 col-md-pull-9"></div>
          </div>
      </div>
      
      
 </body>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script> 
</html>
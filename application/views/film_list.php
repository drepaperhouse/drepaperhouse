<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>My Film List</title>
        <meta name="keywords" content="universe gallery, black, website template, templatemo" />
        <meta name="description" content="Universe, Gallery, Portfolio, free website template" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/templatemo_style.css' ?>" />  

        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-1.6.3.min.js' ?>" ></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/ddsmoothmenu.css' ?>" />

        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/ddsmoothmenu.js' ?>" >

            /***********************************************
             * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
             * This notice MUST stay intact for legal use
             * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
             ***********************************************/

        </script>

        <script type="text/javascript">

            ddsmoothmenu.init({
                mainmenuid: "templatemo_menu", //menu DIV id
                orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
                classname: 'ddsmoothmenu', //class added to menu's outer DIV
                //customtheme: ["#1c5a80", "#18374a"],
                contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
            })

        </script>

        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/slimbox2.css' ?>" type="text/css" media="screen" /> 
        <script type="text/JavaScript" src="<?php echo base_url() . 'assets/js/slimbox2.js' ?>"></script> 


    </head>
    
        <?php
        foreach ($review as $rec) {
        
        $film_id = $rec->film_id; 
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
        <div id="templatemo_wrapper">
            
         <?php include_once('navbar.php'); ?>   
             <div id="templatemo_main_content">
            <div id="templatemo_sidebar">
              
                
                <div class="sidebar_content_box">
                    <h3>The Film List</h3>  
                </div> 
            </div>
            
         
           
           
             <div id="templatemo_content">
                 <marquee bgcolor=\"#cccccc\" loop=\"-1"\ scrollamount=\"2"\ width=\"100%"\>
                     <a href="<?php echo site_url("film_controller/getFilmReview/" . $film_id); ?>">Latest Review is " <?php echo $title ?> "</a></marquee>
                 <br></br>
                 
             <?php $count = 1; ?>
             <?php foreach($results as $row): ?>   
              <div>
	    
                <div class="post_meta">
                    <span> # <?php echo $count ?></span>
                    <span><strong><a href="<?php echo site_url("film_controller/getFilmReview/" . $row->film_id); ?>"><?php echo $row->title ?></a></strong></span>
                    <span class="date"><a href="#"><?php echo $row->yr ?></a></span>
                    <span class="tag"><a href="#" ><?php echo $row->genre ?></a></span>
                    <?php $count++; ?>
		</div>
	     </div>   
              <?php endforeach; ?>  
                
           </div>
             <div class="clear"></div>
        </div> <!--END of templatemo_main_content -->
            
         <?php  include_once("footer.php"); ?>
         </div> <!-- END of templatemo_wrapper -->
    </body>    
        
        
         
</html>
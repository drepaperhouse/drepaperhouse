
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
            <div id="templatemo_wrapper">

                <?php include_once('navbar.php'); ?>   
                <div id="templatemo_main_content">
                    <div id="templatemo_sidebar">
                        
                        <div class="sidebar_content_box">
                            <h3>Information</h3>  
                            <ul class="sidebar_link">
                            <li> Year: <?php echo $yr ?> </li>
                            <li> Director: <?php echo $director ?> </li>
                            <li> Cast: <?php echo $actors ?> </li>
                            <li> Genre: <?php echo $genre ?> </li>
                            <li><a href="<?php echo $theLink ?>"><i class="fa fa-film fa-2x"></i></a></li>
                            </ul>
                        </div> 
                        
                    </div>

                    <div id="templatemo_content">      
                        <div class="post">
                            <h2><a><?php echo $title; ?></a></h2>
                            <div class="post_meta">
                                <span><?php echo $special; ?></span>
                            </div> 
                            
                            <p style="text-indent: 45px"><?php echo $summary; ?></p>
                            
                              <a href="<?php echo base_url().'index.php/film_controller' ?>" class="more">Back to List</a>
                              <br></br>
                              <div class="comment_box" >
                                  <div class="comment_content" >
                              <iframe width="560" height="315" src="<?php echo $youtube ?>" frameborder="0" allowfullscreen></iframe>
                              </div>
                              </div>
                        </div>   



                        
                    </div>
                    <div class="clear"></div>
                    </div> <!--END of templatemo_main_content -->

                    <?php include_once("footer.php"); ?>
                </div> <!-- END of templatemo_wrapper -->
                
        </body>    
    </html>

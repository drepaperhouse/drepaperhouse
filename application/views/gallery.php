<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>My Gallery</title>
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


        <script type="text/JavaScript">
            $(document).ready(function() {
                $('#gallery li').hover(
                function(){$('span',this).slideToggle('slow');},
                function(){$('span',this).slideToggle('slow');
                });
            });
        </script>

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
        <div id="templatemo_wrapper">

            <?php include_once("navbar.php"); ?>

            <div id="templatemo_main_content">
                <div id="templatemo_sidebar">
                 
                    <div class="sidebar_content_box">
                        <h3><a class="sidebar_content_box_right" ></a><?php echo $g_title ?> Photos</h3>
                        <ul class="sidebar_gallery">


                        </ul>
                        <div class="clear"></div>
                    </div>
                    
                       <div class="sidebar_content_box">
                        <h3>Galleries</h3>
                        <ul class="sidebar_link">


                            <?php foreach ($list as $row): ?>

                                <li><a rel="nofollow" href="<?php echo site_url("gallery_controller/getGallery/" . $row->gallery_id); ?>"> <?php echo $row->g_title ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

                <div id="templatemo_content">

                    <ul id="gallery" class="nobullet">
                        <?php
                        $count = 1;
                        $max = intval($numberOfpics);
                        ?>
                        <?php for ($count = 1; $count < $max; $count++): ?>
                            <li>
                                <a href="<?php echo base_url() . 'assets/images/' . $images . $count . '.jpg' ?>" title="<?php echo $count ?>" rel="lightbox[gallery]">
                                    <img src="<?php echo base_url() . 'assets/images/small/' . $images . $count . '.jpg' ?>" alt="<?php echo 'template' . $count ?>" class="img_border img_border_b" />
                                    <span>
                                        <b>By Drepaperhouse  <?php echo $g_title ?> </b><br />
                                    </span>
                                </a>
                            </li>   

                        <?php endfor; ?>   
                    </ul>

                    <div class="clear"></div>

                    <div class="templatemo_paging">

                        <div class="clear"></div>
                    </div>
                   
                </div> <!-- END of templatemo_content -->
                <div class="clear"></div>
            </div> <!-- END of templatemo_main_content -->

         <?php  include_once("footer.php"); ?>
        </div> <!-- END of templatemo_wrapper -->
    </body>
    <script type='text/javascript' src='<?php echo base_url() . 'assets/js/logging.js' ?>'></script>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Drepaperhouse Website</title>
        <meta name="keywords" content="universe, black, website template, templatemo" />
        <meta name="description" content="Universe is free website template by templatemo.com for everyone." />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/font-awesome.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/templatemo_style.css' ?>" />  


        <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/nivo-slider.css' ?>" type="text/css" media="screen" />

        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-1.6.3.min.js' ?>" ></script>
        <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-ui.min.js' ?>" ></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
            });
        </script>

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

    <body>
        <div id="templatemo_wrapper">

            <?php include_once('navbar.php'); ?>


            <div id="templatemo_slider" >
                <div class="slider-wrapper theme-default">
                    <div class="ribbon"></div>
                    <div id="slider" class="nivoSlider">
                        <a href="#"><img src="<?php echo base_url() . 'assets/images/slider/01.jpg' ?>" alt="Slider Image 1" title="#caption1" /></a>
                        <a href="#"><img src="<?php echo base_url() . 'assets/images/slider/02.jpg' ?>" alt="Slider Image 2" title="#caption2" /></a>
                        <a href="#"><img src="<?php echo base_url() . 'assets/images/slider/03.jpg' ?>" alt="Slider Image 3" title="#caption3" /></a>
                        <a href="#"><img src="assets/images/slider/04.jpg" alt="Slider Image 4" title="#caption4" /></a>
                    </div>
                    <div id="caption1" class="nivo-html-caption">
                        <h2>Welcome</h2>
                        <p><p>My name is Andre and welcome to my website. This website is just for kicks!</p>"</p>
                        <a href="#" class="slider_more_button">More</a>
                    </div>
                    <div id="caption2" class="nivo-html-caption">
                        <h2>Gallery</h2>
                        <p>Pictures of our adventures.</p>
                        <a href="<?php echo base_url() . 'index.php/gallery_controller' ?>" class="slider_more_button">Enjoy</a>
                    </div>
                    <div id="caption3" class="nivo-html-caption">
                        <h2>Film</h2>
                        <p>I love watching movies. Some of my favorite films is Muholland Drive and Pulp Fiction. Please visit this section to see my opinions. </p>
                        <a href=" <?php echo base_url() . 'index.php/film_controller' ?>" class="slider_more_button">Enjoy</a>
                    </div>
                    <div id="caption4" class="nivo-html-caption">
                        <h2>Code Snippets</h2>
                        <p>I'm Computer Science Graduate from UTEP. I will add code of some of the projects I have worked on that can be usefull for new students.</p>
                        <a href="#" class="slider_more_button">Explore</a>
                    </div>
                </div>
                <script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.nivo.slider.pack.js' ?>"></script> 
                <script type="text/javascript">
                    $(window).load(function() {
                        $('#slider').nivoSlider({
                            effect: 'random',
                            captionOpacity: 1,			
                            controlNav: true, // 1,2,3... navigation
                            directionNavHide: false,
                            directionNav: true,
                            animSpeed: 700, // Slide transition speed
                            pauseTime: 5000, // How long each slide will show
                        });
                    });
                </script>
            </div> <!-- END of slider -->

            <div id="templatemo_main_content">

                <?php include_once('side_bar_content.php'); ?>

                <div id="templatemo_content">
                    <div class="col_2">
                        <div class="content_wrapper content_mb_30">
                            <img src="<?php echo base_url() . 'assets/images/me_home_1.jpg' ?>" alt="me" class="img_border img_nom" />
                            <h2 class="post_title"><i class="fa fa-user" class="img_border img_nom"></i> About me</h2> 

                            <p>"My name is Andre. I graduated from the University of Texas at El Paso with a degree in Computer Science. This website
                               is just for kicks and to have fun with it. I have in interest in film making and I hope to make one in the near future. I have wonderfull
                               family that keep me busy. I will also have some code snippets since I'm a computer scientist. And I will throw in 
                                pictures of our small adventures. Enjoy!"</p>
                            <div class="clear"></div>

                        </div>
                        <div class="content_wrapper">                    
                            <h2 class="post_title">Contact Information</h2>
                            <address class="md-margin-bottom-40">
                                Phone: 915 412 6037 <br />
                                Email: <a href="mailto:dre.paperhouse.com" class=""><i class="fa fa-envelope-o"></i></a>
                            </address>
                            <div class="clear"></div>

                        </div>
                        <div class="content_wrapper">
                            
                        </div>
                        
                    </div>
                    <div class="col_2 no_margin_right">
                        <?php include_once('recent_stuff.php'); ?>
                    </div>	
                </div>

                <div class="clear"></div>
            </div> <!-- END of templatemo_main_content -->

          <?php include_once("footer.php"); ?>
            
        </div> <!-- END of templatemo_wrapper -->
    </body>
    <script type='text/javascript' src="<?php echo base_url() . 'assets/js/logging.js' ?>"</script>
</html>
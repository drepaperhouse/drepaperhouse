<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>S Gallery: Responsive jQuery Gallery Plugin with CSS3 Animations</title>

  <link rel="stylesheet" href="<?php echo base_url().'assets/css/demo-styles.css' ?>" />
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/stylesg.css' ?>" />

</head>


          
        
<body>

<div class="demo-wrapper">

  <!--// Gallery Markup: A container that the plugin is called upon, and two lists for the images (use images with same aspect ratio) //-->
  <div id="gallery-container">
    
    <ul class="items--small">
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_1.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_2.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_3.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_4.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_5.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_6.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_7.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_8.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_9.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_10.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_11.jpg' ?>" alt="" /></a></li>
      <li class="item"><a href="#"><img src="<?php echo base_url().'assets/images/san_fran/small_12.jpg' ?>" alt="" /></a></li>
    </ul>
    <ul class="items--big">
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_1.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              The bridge from a boat I took. 
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_2.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Seals on FIsherman's Warf. 
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_3.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Science
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_4.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Bridge
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_5.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Another photo of the brigde. 
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_6.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Me
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_7.jpg' ?>" alt="" />
            <figcaption class="img-caption">
           Me again 
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_8.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Some sushi place. I had the teriyaki. 
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_9.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Another view of the Golden State Bridge. 
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_10.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Alcatraz
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_11.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              At the Financial District 
            </figcaption>
          </figure>
          </a>
      </li>
      <li class="item--big">
        <a href="#">
          <figure>
            <img src="<?php echo base_url().'assets/images/san_fran/big_2.jpg' ?>" alt="" />
            <figcaption class="img-caption">
              Going home
            </figcaption>
          </figure>
          </a>
      </li>
    </ul>
    <div class="controls">
      <span class="control icon-arrow-left" data-direction="previous"></span> 
      <span class="control icon-arrow-right" data-direction="next"></span> 
      <span class="grid icon-grid"></span>
      <span class="fs-toggle icon-fullscreen"></span>
    </div>
    
  </div>
  <p class="credit">  <a href="<?php echo base_url().'index.php' ?>">Home</a></p>
  <p class="tips"> You can use the arrow keys to navigate between images in the slideshow view, and the shift key to switch back from slideshow to Grid view</p>


  

</div><!--end demo-wrapper-->

  <script src="<?php echo base_url().'assets/js/jquery-1.8.2.min.js' ?>"></script> 
  <script src="<?php echo base_url().'assets/js/plugins.js' ?>"></script>
  <script src="<?php echo base_url().'assets/js/scripts.js' ?>"></script>
  <script>
    $(document).ready(function(){
     $('#gallery-container').sGallery({
        fullScreenEnabled: true
      });
    });
  </script>

</body>
</html>
        
        
        
  
    
    
    
    
</html>

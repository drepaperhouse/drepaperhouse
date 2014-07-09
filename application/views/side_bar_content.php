
<script type="text/javascript" src="<?php echo base_url().'assets/js/instafeed.min.js' ?>"/></script>


 




<script type="text/javascript">
    var userFeed = new Instafeed({
        get: 'user',
        userId: 22981621,
        accessToken: '22981621.467ede5.76876abf76444c5f9ce3fd1e1cd6f87d'
       // template: '<div class="sidebar_gallery"><li><a href="{{link}}" rel="lightbox[portfolio]"><img src="{{image}}"></a>{{ul}}</li></div>'
    });
    userFeed.run();

</script>

<div id="templatemo_sidebar">
            <!---NO NEED JUST THERE TO SEE THE CODE
            <div class="sidebar_content_box">
            	<h3>Categories</h3>
                <ul class="sidebar_link">
                    <li><a href="#">Consectetur adipiscing</a></li>
                    <li><a href="#">Nullam vulputate est</a></li>
                    <li><a href="#">Fusce at leo at ipsum</a></li>
                    <li><a href="#">Donec in risus ed ante</a></li>
                    <li><a href="#">Vestibulum ante ipsum</a></li>
                </ul>
            </div> --END OF COMMENTS-->
            
            <div  class="sidebar_content_box">
                <h3>Instagram Photos<a class="sidebar_content_box_right"></a></h3>
              
                <ul class="sidebar_gallery">
                    <div id="instafeed"></div>
                   
                   <!-- <li><a href="#" title="template 1" rel="lightbox[portfolio]"><img src="images/gallery/10_s.jpg" alt="template 1" /></a></li>
                    -->
                </ul>
                <div class="clear"></div>
          </div>
            <!--end of home gallery-->
        </div>
        <!--end of side bar-->
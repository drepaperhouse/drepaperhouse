<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.js"
type="text/javascript"></script>


<style type="text/css">
@import url("http://www.google.com/uds/solutions/dynamicfeed/gfdynamicfeedcontrol.css");

#feedControl {
margin-top : 10px;
margin-left: auto;
margin-right: auto;
width : 440px;
font-size: 12px;
color: #9CADD0;
}
</style>

<script>


function load() {
// var feed ="http://rss.cnn.com/rss/cnn_topstories.rss.xml";
var feed = "http://dvd.netflix.com/QueueRSS?id=P8838832620882622056002663476899883"; 
new GFdynamicFeedControl(feed, "feedControl");

}
google.load("feeds", "1");
google.setOnLoadCallback(load);

    $(document).ready(function() {
        var colorOrig=$(".thumbnail").css('background');
        $(".thumbnail").hover(
        function() {
            //mouse over
            $(this).css('background', '#acd3bf')
        }, function() {
            //mouse out
            $(this).css('background', colorOrig)
        });
    });
</script>


                        <h2>Latest Stuff</h2>
                        <div class="news_list">
                            <img src="<?php echo base_url() . 'assets/images/recent/01.jpg' ?>" alt="1"  class="img_fl img_border img_border_s" />
                            <a href="<?php echo base_url().'index.php/gallery_controller' ?>">My latest gallery</a>
                            <p> San Antonio </p>
                            <div class="clear"></div>
                        </div>           
                       
                        <div class="news_list">
                            <img src="<?php echo base_url() . 'assets/images/recent/02.jpg' ?>" alt="Flower 3" class="img_fl img_border img_border_s" />
                            <a href="#">Upcoming projects</a>
                            <p>Comming Soon!</p>
                            <div class="clear"></div>
                        </div>
                        <div class="news_list" id="feedControl">
                            <img src="images/templatemo_image_04.jpg" alt="Flower 4" class="img_fl img_border img_border_s" />
 
                            <div class="clear"></div>
                        </div>   

                        <div class="clear"></div>
                      




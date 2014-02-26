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





<div class="headline" align="left"><h3>Latest Stuff</h3></div>
<div row>  

    <!--Me Section-->
    <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
            <img class="img-responsive"  src="<?php echo base_url() . 'assets/images/me_home.jpg' ?>" alt width="250" height="182" />
            <div class="caption" align="left">
                <h4><a href="#">Latest and Greatest</a></h4>
                <p>What's happening now.....</p>
            </div>
        </div>           
    </div>

    <!--Latest Gallery Section-->
    <div class="col-xs-6 col-sm-3">
        <div class="thumbnail">
            <img class="img-responsive"  src="<?php echo base_url() . 'assets/images/seals.jpg' ?>" alt width="250" height="182" />
            <div class="caption" align="left">
                <h4><a href="#">Latest Gallery</a></h4>
                <p>This is my first gallery. Pictures from San Francisco. I had a Sony(Point and Shoot) camera. </p>
            </div>
        </div> 
    </div>
    
     <div class="col-xs-6 col-sm-3">
         
         <div id="body">
             <div id="feedControl">Loading...</div>  
             
         </div>  
         
         
         
     </div>

    <!--Contact Information-->
    <div class="col-xs-6 col-sm-3" align="left">

    </div>
</div>
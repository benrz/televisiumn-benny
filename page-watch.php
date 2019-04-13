<?php get_header(); ?>
    
<?php ## STREAM CONTENT ## ?>
<div id="stream-content" class="container-fluid">

    <?php ## TOP BACKGROUND ## ?>
    <div class="skewed_top_left d-none d-md-block">
        <!--<span></span>
            <span></span> -->
    </div>

    <div class="skewed_top_left d-md-none">
        <!--<span></span>
            <span></span> -->
    </div>
    <?php ## END OF TOP BACKGROUND ## ?>

    <div class="container" style="margin-top:3%;">
        <div class="row justify-content-center" id="contentTitle">
            <div class="col-12  align-self-center m-2 mt-3 mt-md-2">
                <h1 class="streamtitle">Stream Now</h1>
            </div>

            <div class="col-10 align-self-center embed-responsive embed-responsive-16by9 m-md-2 m-1">
                <iframe class="latestVideoEmbed embed-responsive-item" cid="UC2I_6GJyyXHzVzuXvp9IsfA" width=100% height=100% frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
<?php ## END OF STREAM CONTENT ## ?>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
    function loadVideo(iframe){
        $.getJSON( reqURL + iframe.getAttribute('cid'),
            function(data) {
                var videoNumber = (iframe.getAttribute('vnum')?Number(iframe.getAttribute('vnum')):0);
                //console.log(videoNumber);
                var link = data.items[videoNumber].link;
                id = link.substr(link.indexOf("=") + 1);  
                iframe.setAttribute("src","https://youtube.com/embed/"+id + "?controls=0&autoplay=1");
            }
        );
    }
    var iframes = $('.latestVideoEmbed');
    for (var i = 0, len = iframes.length; i < len; i++){
        loadVideo(iframes[i]);
    }
    let a=1;
</script>


<?php if(a==1) get_footer(); ?>
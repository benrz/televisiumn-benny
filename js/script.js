/* Custom Scroller */
$(document).ready(function () {

    $(window).on("scroll", function () {

        var whiteLogo = theme_directory + '/../../uploads/logo/logoPutih.png'
        var logo = theme_directory + '/../../uploads/logo/logo.png'

        if ($(window).scrollTop() >= 50) {
            $(".navbar").addClass("compressed");
            $("#sidebarCollapse").addClass("compressed");
            $(".navbar").removeClass("navbar-dark").addClass("navbar-light");
            $('.navbar-brand img').attr('src', logo);
        } else {
            $(".navbar").removeClass("compressed");
            $("#sidebarCollapse").removeClass("compressed");
            $(".navbar").removeClass("navbar-light").addClass("navbar-dark");
            $('.navbar-brand img').attr('src', whiteLogo);
        }
    });
});

/* Custom Sidebar */
$(document).ready(function () {
    $("#sidebar").mCustomScrollbar({
        theme: "minimal"
    });

    $('#dismiss, .overlay').on('click', function () {
        $('#sidebar').removeClass('active');
        $('.overlay').removeClass('active');
    });

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').addClass('active');
        $('.overlay').addClass('active');
        $('.collapse.in').toggleClass('in');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
});

/* JS Particle */
particlesJS.load('particles-js', theme_directory + '/assets/particlesjs-config.json', function () {
    console.log('callback - particles.js config loaded');
});

/* Live Player */
$(document).ready(function() {
    var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
    function loadVideo(iframe){
        $.getJSON( reqURL + iframe.getAttribute('cid'),
            function(data) {
                var videoNumber = (iframe.getAttribute('vnum')?Number(iframe.getAttribute('vnum')):0);
                //console.log(videoNumber);
                var link = data.items[videoNumber].link;
                id = link.substr(link.indexOf("=") + 1);  
                iframe.setAttribute("src","https://youtube.com/embed/"+id + "?controls=1&autoplay=1");
            }
        );
    }
    var iframes = $('.latestVideoEmbed');
    for (var i = 0, len = iframes.length; i < len; i++){
        loadVideo(iframes[i]);
    }
});
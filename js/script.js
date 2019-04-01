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
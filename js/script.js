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
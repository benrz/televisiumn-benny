<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php wp_head(); ?>
    <script>
        var theme_directory = "<?php echo get_template_directory_uri() ?>";
    </script>

    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
</head>

<body <?php body_class(); ?>>

    <?php ## SIDEBAR ## ?>
    <nav id="sidebar">
        <div id="dismiss">
            <i class="fas fa-window-close"></i>
        </div>
        <div class="sidebar-header">
            <img src="<?php echo get_bloginfo('template_directory'); ?>/../../uploads/logo/logoPutih.png"
                alt="UMN TV LOGO" class="img-fluid" style="max-width: 150px; height: auto;">
        </div>
        <?php wp_nav_menu( array(
                'theme_location' => 'header-menu',
                'menu_class' => 'nav navbar-nav ml-auto',
                'add_li_class' => 'nav-item'
            )
        ); ?>
    </nav>
    <?php ## END OF SIDEBAR ## ?>


    <?php ## NAVBAR ## ?>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><img
                    src="<?php echo get_bloginfo('template_directory'); ?>/../../uploads/logo/logoPutih.png"
                    alt="UMN TV LOGO" class="img-fluid" style="max-width: 150px; height: auto;"></a>

            <button type="button" id="sidebarCollapse" class="btn btn-blue d-lg-none compressed">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse">
                <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'ml-auto', 'menu_class' => 'nav navbar-nav ml-auto', 'add_li_class' => 'nav-item' ) ); ?>
            </div>
        </div>
    </nav>
    <?php ## END OF NAVBAR ## ?>
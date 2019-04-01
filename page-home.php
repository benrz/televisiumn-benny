<?php get_header(); ?>

<?php ## MAIN CONTENT ## ?>
<div id="main-content" class="container-fluid">

    <div class="skewed_top_left">
        <!--<span></span>
            <span></span> -->
    </div>

    <div class="container">
        <div id="headline" class="row justify-content-center align-items-center">
            <div class="col-12">

                <h4>Welcome to UMN TV Official Website.</h4>
                <div class="col-12 col-md-6 px-0">
                    <p>
                        UMN TV merupakan lembaga pers yang diresmikan pada 31 Maret 2015. UMN TV melakukan
                        produksi program - program unggulan berbasis streaming. UMN TV menjadi wadah dan
                        pengaplikasian ilmu bagi mahasiswa di bangku perkuliahan.
                    </p>
                </div>

                <?php
                // <div class="row justify-content-center justify-content-md-start">
                //     <div class="col-12 text-center col-md-auto">
                //         <a href="#"><button type="button" class="btn btn-danger"
                //                 style="margin: 5% 1% 0 0;">STREAM</button></a>
                //     </div>

                //         <div class="col-12 text-center col-md-auto">
                //             <a href="#"><button type="button" class="btn btn-outline-light"
                //                     style="margin-top: 5%;">BUTTON</button></a>
                //         </div>
                    
                // </div>
                ?>

            </div>
        </div>
    </div>

    <div class="container" style="margin-top:3%;">

        <div class="row justify-content-center" id="contentTitle">
            <div class="col-12  align-self-center">
                <h1 class="title">New Season</h1>
            </div>
        </div>

        <div class="card-deck mb-4">
            <?php 
                $args = array('post_type' => 'programs');
                $myQuery = new WP_Query($args);
                
                if ( $myQuery->have_posts() ) : 
                    while ( $myQuery->have_posts() ) : $myQuery->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                        $thumb_url = $thumb_url_array[0];

                        $title = get_the_title();
                        $content = get_the_content();

                        echo    '<div class="card">
                                    <img src="'. $thumb_url .'" alt="Poster-odtw" class="img-fluid card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>'. $title .'</strong></h5>
                                        <p class="card-text">'. $content .'</p>
                                    </div>
                                </div>';
                    endwhile;
                    wp_reset_postdata();
                endif;
            ?>
        </div>

    </div>

</div>
<?php ## END OF MAIN CONTAINER ## ?>

<?php get_footer(); ?>
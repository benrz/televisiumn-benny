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

                //     <div class="col-12 text-center col-md-auto">
                //         <a href="#"><button type="button" class="btn btn-dark effect-shine" style="margin-top: 5%;">SUBSCRIBE</button></a>
                //     </div>
                    
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
                $index= 0;
                $maxcard= 2;/*artinya maks 2*/
                
                if ( $myQuery->have_posts() ) : 
                    while ( $myQuery->have_posts() ) : $myQuery->the_post();
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                        $thumb_url = $thumb_url_array[0];

                        $title = get_the_title();
                        $content = get_the_content();
                        $id= get_the_ID();
                        $url= get_post_permalink($id);

                        echo    '<div class="card">
                                    <img src="'. $thumb_url .'" alt="Poster-'.$title.'" class="img-fluid card-img-top">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong>'. $title .'</strong></h5>
                                        <p class="card-text">'. $content .'</p>
                                        
                                    </div>
                                </div>';

                        if($index==($maxcard-1)):
                            $index=0;
                            echo    '<div class="w-100 d-none d-md-block mt-4"></div>
                            ';
                        else:
                            $index++;
                        endif;

                    endwhile;
                    wp_reset_postdata();

                    if($index!=0):
                        while($index!=$maxcard):
                            $index++;
                            echo    '<div class="card" style="border: none;"></div>';
                        endwhile;
                    endif;

                endif;
            ?>
        </div>


        <?php
        // <div class="row justify-content-center" id="contentTitle">
        //     <div class="col-12  align-self-center">
        //         <h1 class="title">News</h1>
        //     </div>
        // </div>

        // <div class="container">
        //     <div id="NewsCarousel"class="carousel slide" data-ride="carousel">
        //         <div class="carousel-inner">
                ?>
                    <?php
                        // $args2 = array('post_type' => 'posts');
                        // $index = 1;       
                        // $title = get_the_title();
                        // $content = get_the_content();
                        // $myQuery2 = new WP_Query($args2);
                        // if ( have_posts() ) : 
                        //     while ( have_posts() ) : the_post();
                        //         if ($index==1):
                        //             $index++;
                        //             echo    '<div class="carousel-item active">
                        //                         <div class="row">';
                        //         elseif(($index % 3)==0):
                        //             $index++;
                        //             echo    '   </div>
                        //                     </div>
                        //                     <div class="carousel-item">
                        //                         <div class="row">';
                        //         else:
                        //             $index++;
                        //         endif;
                                
                        //         echo'<div class="col-sm">
                        //                 <h5><strong>'. $title .'</strong></h5>
                        //                 <p>'. $content .'</p>
                        //                 <img class="d-block w-100" src="//placehold.it/1200x600/ddd" alt="6 slide">
                        //             </div>';
                        //     endwhile;
                        //         echo    '   </div>
                        //                 </div>';
                        // endif;
                    ?>
            
                    <?php
        //             <a class="carousel-control-prev" href="#NewsCarousel" role="button" data-slide="prev">
        //                 <span class="carousel-control-prev-icon">
        //                     <span class="sr-only">Previous</span>
        //                 </span>
        //             </a>
        //             <a class="carousel-control-next" href="#NewsCarousel" role="button" data-slide="next">
        //                 <span class="carousel-control-next-icon">
        //                     <span class="sr-only">Next</span>
        //                 </span>
        //             </a>
        //         </div>
        //     </div>
        // </div>
        ?>
        
    </div>
</div>
<?php ## END OF MAIN CONTENT ## ?>

<?php get_footer(); ?>
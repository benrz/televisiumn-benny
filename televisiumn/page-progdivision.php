<?php get_header(); ?>

<?php ## MAIN CONTENT ## ?>
<div id="main-content" class="container-fluid">

    <?php ## TOP BACKGROUND ## ?>
    <div id="particles-js" class="skewed_top_left d-none d-md-block">
        <!--<span></span>
            <span></span> -->
    </div>

    <div class="skewed_top_left d-md-none">
        <!--<span></span>
            <span></span> -->
    </div>
    <?php ## END OF TOP BACKGROUND ## ?>



    <?php ## TOP CAROUSEL ## ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <!-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
        </ol>

        <div class="carousel-inner">

            <?php ## First Item ## ?>
            <div class="carousel-item active">
                <div class="container">
                    <div id="headline" class="row justify-content-center align-items-center">
                        <div class="col-12">
                            <h4>Welcome to UMN TV Program Division Official Website.</h4>
                            <div class="col-12 col-md-6 px-0">
                                <p>
                                    Terdiri dari 50 orang yang menghasilkan karya serial tv yang menarik untuk ditonton setiap harinya!</p>
                            </div>
                            
                            
                            <?php
                                //     <div class="col-12 text-center col-md-auto">
                                //         <a href="#"><button type="button" class="btn btn-dark effect-shine" style="margin-top: 5%;">SUBSCRIBE</button></a>
                                //     </div>
                                    
                                // </div>
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php ## END OF First Item ## ?>


            <?php ## Second Item ## ?>
            <!-- <div class="carousel-item">
                <div class="container">
                    <div id="headline" class="row justify-content-center align-items-center">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div> -->
            <?php ## END OF Second Item ## ?>


            <?php ## Third Item ## ?>
            <!-- <div class="carousel-item">
                <div class="container">
                    <div id="headline" class="row justify-content-center align-items-center">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
            </div> -->
            <?php ## END OF Third Item ## ?>

        </div>

        <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> -->

    </div>
    <?php ## END OF TOP CAROUSEL ## ?>



    <!-- /* <?php ## NEW SEASON ## ?>
    <div class="container" style="margin-top:3%;">
        <div class="row justify-content-center contentTitle">
            <div class="col-12  align-self-center">
                <h1 class="title">New Season</h1>
            </div>
        </div>

        <div class="card-deck mb-4">
            <?php 
                $args = array('post_type' => 'programs', 'order' => 'ASC');
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
    </div>
    <?php ## END OF NEW SEASON ## ?> -->
    <div class="card-deck">
  <div class="card m-5">
    <div class="card-body">
      <h5 class="card-title">See It</h5>
      <p class="card-text">Program yang menyajikan tayangan cara perawatan kulit untuk semua kalangan yang mudah diikuti dengan konsep yang ringan.</p>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      <!-- <a href="wordpress/progdivision" class="btn btn-primary">Crew Program</a> -->
    </div>
  </div>
  <div class="card m-5">
    <div class="card-body">
      <h5 class="card-title">Bacbeat</h5>
      <p class="card-text">Mengupas tuntas segala hal tentang dunia musik mulai dari Indonesia hingga mancanegara dengan beragam tema yang menarik. membuat setiap hari-hari beaters lebih asyik!</p>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      <!-- <a href="wordpress/newsdivision" class="btn btn-primary">Crew News</a> -->
    </div>
  </div>
  <div class="card m-5">
    <div class="card-body">
      <h5 class="card-title">We Style</h5>
      <p class="card-text">Menyajikan seputar dunia fashion berupa fashion style, hair style, and make up. Dikemas secara menarik dan edukatif sehingga bisa dijadikan referensi bagi masyarakat berpenampilan.</p>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      <!-- <a href="wordpress/itwebdivision" class="btn btn-primary">Crew News</a> -->
    </div>
  </div>
  <div class="card m-5">
    <div class="card-body">
      <h5 class="card-title">Selepas Sendu</h5>
      <p class="card-text">Menceritakan kisah kehidupan seseorang lelaki introvert yang baru saja kandas hubungannya. Bagaimana perjuangannya untuk bangkit kembali dan menemukan cintanya?</p>
      <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
      <!-- <a href="wordpress/itwebdivision" class="btn btn-primary">Crew News</a> -->
    </div>
  </div>
</div>
</div>
<?php ## END OF MAIN CONTENT ## ?>

<?php get_footer(); ?>
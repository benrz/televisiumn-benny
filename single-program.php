<?php get_header(); ?>
<!-- 
<div class="container pt-5 news">
    <?php 
    
    if( have_posts() ):
        
        while( have_posts() ): the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="row justify-content-center pt-4">
                    <div class="col-12 col-md-10">
                        <?php the_title('<h1 class="news-title m-1">','</h1>' ); ?>
                        <hr class='my-1'>
                        <small class="news-cat"><?php the_category(' '); ?><?php the_tags(); ?><?php //edit_post_link(); ?></small><br>
                        <small class="news-datetime"><?php echo get_the_date('j F Y, ') ?><?php echo get_the_time( 'G:i ' )?>WIB</small>
                    </div>
                </div>
                    
                <?php if( has_post_thumbnail() ):
                    
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];

                    echo' <div class="row justify-content-center">
                            <div class="col-md-10 col-12 align-self-center">
                                <img src="'. $thumb_url .'" class="img-fluid news-img p-0 my-2">
                            </div>
                        </div>';

                endif;?>

                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 my-1">
                        <?php the_content(); ?>
                    </div>
                </div>
            
            </article>

        <?php endwhile;
        
    endif;
            
    ?>
</div> -->

<?php get_footer(); ?>
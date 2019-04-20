<?php get_header(); ?>

<div class="container pt-5 news">
    <div class="row justify-content-center">
        <div class="col-md-9 col-12">
            <?php 
                if( have_posts() ):
                    while( have_posts() ): the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="row justify-content-center pt-4">
                                <div class="col-12 col-md-11">
                                    <?php the_title('<h1 class="news-title m-1">','</h1>' ); ?>
                                    <hr class='my-md-1 my-0'>
                                    <small class="news-cat"><?php the_category(' '); ?><?php the_tags(); ?><?php //edit_post_link(); ?></small><br>
                                    <small class="news-datetime"><?php echo get_the_date('j F Y, ') ?><?php echo get_the_time( 'G:i ' )?>WIB</small>
                                </div>
                            </div>
                                
                            <?php if( has_post_thumbnail() ):
                                $post_id = get_the_ID();
                                $thumb_id = get_post_thumbnail_id();
                                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                                $thumb_url = $thumb_url_array[0];
                                $post_category = get_the_category();
                            endif;?>

                            <div class="row justify-content-center">
                                <div class="col-12 col-md-11 my-1" id="content">
                                    
                                <?php the_content(); ?>
                                </div>
                            </div>
                        
                        </article>

                    <?php endwhile;
                endif;
            ?>
        </div>

        <?php 
			// $categories= $post_category;

			// foreach($categories as $category):
			// 	echo'<div class="container m-0 p-0">';
			// 	$args = array(
			// 		'posts_per_page' => 5,
			// 		'order' => 'DESC',
			// 		'category__in' => array($category->term_id)
			// 	);
			// 	$myQuery = new WP_Query($args);
				
			// 	if ( $myQuery->have_posts() ) : 
			// 		while ( $myQuery->have_posts() ) : $myQuery->the_post();
			// 			$thumb_id = get_post_thumbnail_id();
			// 			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
			// 			$thumb_url = $thumb_url_array[0];

			// 			$title = get_the_title();
			// 			$id= get_the_ID();
			// 			$url= get_post_permalink($id);

			// 			echo    '<div class="col-12">
			// 						<img src="'. $thumb_url .'" alt="Poster-'.$title.'" class="img-fluid card-img-top">
			// 						<div class="card-body">
			// 							<h5 class="card-title"><strong>'. $title .'</strong></h5>
			// 						</div>
			// 					</div>';
			// 		endwhile;
            //         wp_reset_postdata();
                    
			// 	endif;
			// 	echo'</div>';
			// endforeach;
        ?>
        
        <?php
            // if( have_posts() ):
            //     echo'<div class="col-3">
            //             <h1>Recent</h1>';
            //     while( have_posts() ): the_post();
            //         if(the_ID()!= $post_id):
            //             echo'<div class= col-12><img'

            //         endif;
            //     endwhile;
            //     echo'</div>';
            // endif;

        ?>

    <?php 
        $args = array(
            'order' => 'DESC',
            'posts_per_page' =>5
        );
        $myQuery = new WP_Query($args);
        
        if ( $myQuery->have_posts() ) : 
            echo'<div class="col-12 col-md-3 my-4 side-news p-3">
            <div class="col-12 py-2 px-2 mb-3 side-news-maintitle">
                    <h1>Recent</h1>
                    </div>';
            while ( $myQuery->have_posts() ) : $myQuery->the_post();  
                    $id= get_the_ID();

                    if($id!= $post_id):  
                    $url= get_post_permalink($id);

                        if( has_post_thumbnail() ): 
                            $thumb_id = get_post_thumbnail_id();
                            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                            $thumb_url = $thumb_url_array[0];
                        
                            echo'<div class="row px-1">
                                    <a class="col-12" href="'.$url.'">
                                        <img src="'.$thumb_url.'" class="img-fluid">
                                    </a>';
                        endif;
                        the_title('<a class= "col-12 my-2" href="'.$url.'"><h3 id="side-news-title">','</h3></a>' );
                        echo'</div>';
                    endif;
            endwhile;
            echo'</div>';
        endif;
    ?>
</div>

<?php get_footer(); ?>
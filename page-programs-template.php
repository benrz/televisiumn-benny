
<?php 
	
/*
	Template Name: Programs Template
*/
	
get_header(); ?>

<div id="pageTitle" class="container">
	<div class="row justify-content-center contentTitle">
		<div class="col-12 align-self-center">
			<h3 class="title-page">Discover Our Shows</h3>
		</div>
	</div>
</div>

<?php ## PROGRAMS GALLERY ## ?>
<div class="container">

	<div class="row">
		<div class="col-4">
			<div class="list-group" id="list-tab" role="tablist">
			<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">All Category</a>
			<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Food & Cooking</a>
			<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Lifestyle</a>
			<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Entertainment</a>
			</div>
		</div>
		<div class="col-8">
			<div class="tab-content" id="nav-tabContent">
			<div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">Cat1</div>
			<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">Cat2</div>
			<div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Cat3</div>
			<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Cat4</div>
			</div>
		</div>
	</div>

	<div class="card-deck mb-4">
		<?php 
			$cat_args= array(
				'orderby'=> 'name',
				'order'=> 'ASC'
			);
			$categories= get_categories($cat_args);

			foreach($categories as $category):
				echo'<div class="card-deck mb-4">';
				$args = array(
					'post_type' => 'programs',
					'posts_per_page' =>2,
					'order' => 'ASC',
					'category__in' => array($category->term_id)
				);
				$myQuery = new WP_Query($args);
				$index= 0;
				// $maxcard= 2;/*artinya maks 2*/
				
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
									</div>
								</div>';

						// if($index==($maxcard-1)):
						// 	$index=0;
						// 	echo    '<div class="w-100 d-none d-md-block mt-4"></div>
						// 	';
						// else:
						// 	$index++;
						// endif;

					endwhile;
					wp_reset_postdata();

					// if($index!=0):
					// 	while($index!=$maxcard):
					// 		$index++;
					// 		echo    '<div class="card" style="border: none;"></div>';
					// 	endwhile;
					// endif;

				endif;
				echo'</div>';
			endforeach;
		?>
	</div>

	<div class="card-deck mb-4">
		<?php 
			$args = array(
				'post_type' => 'programs',
				'category_name' => 'alphabet', 
				'posts_per_page' =>2,
				'order' => 'ASC');
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
<?php ## END OF PROGRAMS GALLERY ## ?>

<?php get_footer(); ?>
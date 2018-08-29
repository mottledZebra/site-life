<?php
/*
	Template Name: Волонтерство
*/
?>

<?php
	get_header();
?>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="gallery">
					<?php
						$posts = get_posts(array (
							'numberposts' => 10,
							'post_type'   => 'volunteering'
							));
						foreach ($posts as $post){
							setup_postdata($post);
					?>
						<div class="grid_3">
							<h2><?php the_title(); ?></h2>
							<a href="<?php 
								if(get_field('volunteering_big_picture')) {
									the_field('volunteering_big_picture'); 
								} else {
									echo get_template_directory_uri() . '/images/logo.png';
								}
								?>" class="gal">
							<?php if(has_post_thumbnail()) { 
									echo get_the_post_thumbnail($post->ID, 'full'); 
								} else {
									echo '<img src="' . get_template_directory_uri() . '/images/logo.png" alt="">'; 
								}
							?>
							</a>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn">Подробнее...</a>
						</div>
					<?php 
						} // end foreach
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
<?php
	get_footer();
?>
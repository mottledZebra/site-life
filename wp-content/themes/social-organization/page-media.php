<?php
/*
	Template Name: Видео
*/
?>

<?php
	get_header();
?>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_7">
					<?php
						$posts = get_posts(array (
							'numberposts' => 3,
							'post_type'   => 'video'
							));
						foreach ($posts as $post){
							setup_postdata($post);
					?>
					<div class="block2">
						<h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
						<figure class="video">
							<iframe width="640" height="360" src="<?php the_field('video_link') ?>" frameborder="0" allowfullscreen></iframe>
						</figure>
						<?php the_excerpt() ?>
					</div>
					<?php 
						} // end foreach
						wp_reset_postdata();
					?>
				</div>
				<div class="grid_4 prefix_1">
					<h2>Популярное видео</h2>
					<ul class="list2 col2">
					<?php
						$posts = get_posts(array (
							'numberposts' => 9,
							'post_type'   => 'video',
							'orderby'     => 'comment_count'
							));
						foreach ($posts as $post){
							setup_postdata($post);
					?>
						<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
					<?php 
						} // end foreach
						wp_reset_postdata();
					?>
					</ul>
					<h2>Архив</h2>
					<ul class="list col2 l1">
					<?php
						$posts = get_posts(array (
							'numberposts' => 4,
							'post_type'   => 'video',
							'offset'      => 3
							));
						foreach ($posts as $post){
							setup_postdata($post);
					?>
						<li>
							<time><?= get_the_date('d') ?><span><?= get_the_date('M') ?></span></time>
							<div class="extra_wrapper"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></div>
						</li>
					<?php 
						} // end foreach
						wp_reset_postdata();
					?>
					</ul>
				</div>
			</div>
		</div>
<?php
	get_footer();
?>
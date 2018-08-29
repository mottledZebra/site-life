<?php
/*
	Template Name: Страница категорий
*/
?>

<?php
	get_header();
?>
<!--==============================Content=================================-->
	<div class="content">
		<div class="container_12 posts_list">
		<h2 class="upp"><?= get_queried_object()->name ?></h2>
		<?php
			$paged = isset($wp_query->query['page']) ? $wp_query->query['page'] : 1;
			$args = array(
				'posts_per_page' => 5,
				'post_type'      => array (
										'news', 'video', 'campaigns', 'volunteering'
									),
				'cat'            => get_queried_object_id(),
				'paged'          => $paged,
			);
			
			$q = new WP_Query($args);

			$paginate_args = array (
				'format'  => '?page=%#%',
				'total'   => $q->max_num_pages,
				'current' => $paged
			);

			if ($q->have_posts()) {
				while ($q->have_posts()) { 
					$q->the_post();
		?>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
			<p class="col1">
				<?php echo get_the_date() ?>
			</p>
			<?php 
				if (get_post_type() == 'video') {
			?>
			<figure class="video">
				<iframe width="640" height="360" src="<?php the_field('video_link') ?>" frameborder="0" allowfullscreen></iframe>
			</figure>
			<?php 				
				} else if(has_post_thumbnail()) { 
					echo get_the_post_thumbnail(get_the_ID(), 'full'); 
				} else {
					echo '<img src="' . get_template_directory_uri() . '/images/logo.png" alt="">'; 
				}
			?>
			<br>
			<br>
			<p class="title col2">
			<?php 
				$single_post = get_post(get_the_ID()); 
				echo $single_post->post_excerpt;
			?>
			</p>
			<p>
			<?php 
				echo $single_post->post_content;
			?>
			</p>
			<p>Рубрики: 
				<span class="col1"><?php the_category(', '); ?></span>
			</p>
		<?php 
				} // end while
			} // end if
			
			echo _navigation_markup(paginate_links($paginate_args));
			social_print_all_categories();
		?>
		</div>
	</div>

<?php
	get_footer();
?>
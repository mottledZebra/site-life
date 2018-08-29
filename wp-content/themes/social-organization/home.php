<?php
/*
	Template Name: Главная
*/
?>

<?php
	get_header();
?>
<!--==============================Content=================================-->
		<div class="fluidHeight container_12">
			<div class="sliderContainer">
				<div class="iosSlider">
					<div class="slider">
						<div class="item item1">
							<div class="inner" style="background-image: url('<?php the_field('slider_picture_1') ?>');">
								<div class="text1"><span><?php the_field('slider_text_1') ?></span></div>
							</div>
						</div>
						<div class="item item2">
							<div class="inner" style="background-image: url('<?php the_field('slider_picture_2') ?>');">
								<div class="text1"><span><?php the_field('slider_text_2') ?></span></div>
							</div>
						</div>
						<div class="item item3">
							<div class="inner" style="background-image: url('<?php the_field('slider_picture_3') ?>');">
								<div class="text1"><span><?php the_field('slider_text_3') ?></span></div>
							</div>
						</div>
					</div>
				</div>
				<div class="slideSelectors">
					<div class="item selected"></div>
					<div class="item"></div>
					<div class="item"></div>
				</div>
			</div>
		</div>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_6">
					<h2><?php the_field('main_team_title') ?></h2>
					<img src="<?php the_field('main_team_picture') ?>" alt="" class="img_inner fleft">
					<div class="extra_wrapper">
						<p class="col2"><a href="<?php echo get_page_by_title('Команда')->guid ?>"><?php the_field('main_team_excerpt') ?></a></p>
						<?php echo mb_substr(get_field('main_team_text'), 0, 150) ?>...
						<a href="<?php echo get_page_by_title('Команда')->guid ?>" class="btn">Подробнее...</a>
					</div>
					<div class="clear"></div>
				</div>
				<div class="grid_5 prefix_1">
					<h2><?php the_field('main_mission_title') ?></h2>
					<div class="rel1">
						<?php echo mb_substr(get_field('main_mission_text'), 0, 500) ?>...
					</div>
					<a href="<?php echo get_page_by_title('Миссия')->guid ?>" class="btn">Подробнее...</a>
				</div>
			</div>
			<div class="hor"></div>
			<div class="container_12">
				<div class="grid_3">
					<h2>Последние новости</h2>
					<ul class="list">
					<?php
						$posts = get_posts(array (
							'numberposts' => 3,
							'post_type'   => 'news'
							));
						foreach ($posts as $post){
							setup_postdata($post);
					?>
						<li>
							<time><?= get_the_date('d') ?><span><?= get_the_date('M') ?></span></time>
							<div class="extra_wrapper">
								<div class="title col2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
								<?php the_excerpt_RSS(); ?>
							</div>
						</li>
					<?php
						} // end foreach
						wp_reset_postdata();
					?>
					</ul>
					<?php 
						$comments = get_comments(array (
							'number'  => 1,
							'status'  => 'approve',
							'orderby' => 'rand'
						));
						if ($comments) {
					?>
					<blockquote class="bq1">
						<div class="title">Случайный отзыв</div>
						<p><?= $comments[0]->comment_content ?></p>
						<div class="col2"><?= $comments[0]->comment_author ?></div>
					</blockquote>
					<?php
						}
					?>
				</div>
				<div class="grid_9">
					<h2>Наша деятельность</h2>
					<section>
						<ul id="da-thumbs" class="da-thumbs">
							<?php
								$posts = get_posts(array (
									'numberposts' => 9,
									'post_type'   => 'actions'
									));
								foreach ($posts as $post){
									setup_postdata($post);
							?>
							<li>
								<?php
									$action_cats = wp_get_post_categories($post->ID, array('fields' => 'all'));
									$action_cat = $action_cats[0];
									echo '<a href="' . get_category_link($action_cat) . '">';
								?>
									<?php if(has_post_thumbnail()) { 
											echo get_the_post_thumbnail($post->ID, 'full'); 
										} else {
											echo '<img src="' . get_template_directory_uri() . '/images/logo.png" alt="">'; 
										}
									?>
									<div><span><?php the_title(); ?></span></div>
								</a>
							</li>
							<?php 
								} // end foreach
								wp_reset_postdata();
							?>
						</ul>
					</section>
				</div>
			</div>
		</div>

<?php
	get_footer();
?>
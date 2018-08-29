<?php
/*
	Template Name: Наша деятельность
*/
?>

<?php
	get_header();
?>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<!-- Проведенные мероприятия -->
				<div class="grid_6">
					<h2>Проведенные мероприятия</h2>
					<?php
						$posts = get_posts(array (
							'numberposts' => 3,
							'offset'      => 1,
							'post_type'   => 'campaigns',
							'meta_query'  => array (
								array (
									'key'     => 'campaign_doit',
									'value'   => 'true',
									'compare' => 'LIKE'
								)
							),
							'meta_key'    => 'campaign_date',
							'orderby'     => 'meta_value'
							));
						foreach ($posts as $post){
							setup_postdata($post);
					?>
						<?php if( has_post_thumbnail() ) { //миниатюра мероприятия
								echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img_inner fleft')); 
							} else {
								echo '<img src="' . get_template_directory_uri() . '/images/logo.png" alt="" class="img_inner fleft">'; 
							}
						?>
						<div class="extra_wrapper">
							<p class="col2"><a href="<?php the_permalink(); ?>">
							<?php the_title(); ?></a></p>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="btn">Подробнее...</a>
						</div>
						<div class="clear cl1"></div>
					<?php 
						} // end foreach
						wp_reset_postdata();
					?>
				</div>
				<!-- Анонс мероприятий -->
				<div class="grid_5 prefix_1">
					<h2>Анонс мероприятий</h2>
					<ul class="list l1 col2">
					<?php
						$posts = get_posts(array (
							'numberposts' => 4,
							'post_type'   => 'campaigns',
							'meta_query'  => array (
								array (
									'key'   => 'campaign_doit',
									'value' => ''
								)
							),
							'meta_key'    => 'campaign_date',
							'orderby'     => 'meta_value',
							'order'       => 'ASC'
							));
						foreach ($posts as $post){
							setup_postdata($post);
							$campaign_date = get_field('campaign_date');
					?>
						<li>
							<time><?= substr($campaign_date, -2) ?><span><?= date_i18n('M', mktime(0, 0, 0, substr($campaign_date, -4, 2))) ?></span></time>
							<div class="extra_wraper">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</div>
						</li>
					<?php 
						} // end foreach
						wp_reset_postdata();
					?>
					</ul>
				</div>
			</div>
			<div class="hor hr1"></div>
			<div class="container_12">
				<!-- Сервисы -->
				<div class="grid_3 maxheight">
					<h2>Наши услуги</h2>
					<ul class="list1 col2">
					<?php
						$posts = get_posts(array (
							'numberposts' => 5,
							'post_type'   => 'services'
							));
						foreach ($posts as $post){
							setup_postdata($post);
					?>
						<li>
							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</li>
					<?php
						} // end foreach
						wp_reset_postdata();
					?>
					</ul>
				</div>
				<!-- Последнее мероприятие -->
				<div class="grid_4 prefix_1 suffix_1 ver maxheight">
					<h2>О последнем мероприятии</h2>
					<div class="block1">
						<?php
							$posts = get_posts(array (
								'numberposts' => 1,
								'post_type'   => 'campaigns',
								'meta_query'  => array (
									array (
										'key'     => 'campaign_doit',
										'value'   => 'true',
										'compare' => 'LIKE'
									)
								),
								'meta_key'    => 'campaign_date',
								'orderby'     => 'meta_value'
								));
							foreach ($posts as $post){
								setup_postdata($post);
						?>
							<a href="<?php the_permalink(); ?>">
								<?php if( has_post_thumbnail() ) { //миниатюра мероприятия
										echo get_the_post_thumbnail($post->ID, 'full', array('class' => 'img_inner fleft')); 
									} else {
										echo '<img src="' . get_template_directory_uri() . '/images/logo.png" alt="" class="img_inner fleft">'; 
									}
								?>
								<div class="clear cl1"></div>
								<?php the_excerpt(); ?>
							</a>
							<?php 
							} // end foreach
							wp_reset_postdata();
						?>
					</div>
				</div>
				<!-- Отзывы -->
				<div class="grid_3 maxheight">
					<h2>Последние отзывы</h2>
					<?php 
						$comments = get_comments(array (
							'number' => 2,
							'status' => 'approve'
						));
						foreach ($comments as $comment) {
					?>
					<blockquote class="bq2">
						<p><?= $comment->comment_content ?></p>
						<div class="bq_bot"><?= $comment->comment_author ?>, <a href="mailto:<?= $comment->comment_author_email ?>" class="col1"><?= $comment->comment_author_email ?></a></div>
					</blockquote>
					<?php 
						}
					?>
				</div>
			</div>
		</div>
<?php
	get_footer();
?>
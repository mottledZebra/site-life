<?php
/*
	Template Name: Страница записи
*/
?>

<?php
	get_header();
?>
<!--==============================Content=================================-->
	<div class="content">
		<div class="container_12">
			<h2><?php the_title() ?></h2>
			<p class="col1">
				<?php echo get_the_date() ?>
			</p>
			<?php if(has_post_thumbnail()) { 
					echo get_the_post_thumbnail(get_the_ID(), 'full'); 
				} else {
					echo '<img src="' . get_template_directory_uri() . '/images/logo.png" alt="">'; 
				}
			?>
			<br>
			<br>
			<p>
			<?php 
				$single_post = get_post(get_the_ID()); 
				echo $single_post->post_content;
			?>
			</p>
			<p>Рубрики: 
				<span class="col1"><?php the_category(', '); ?></span>
			</p>
			<!-- Блок отзывов -->
			<?php 
				if (comments_open()) {
					echo '<h2>Отзывы</h2>';
					$comments = get_comments(array (
						'post_id' => get_the_ID(), 
						'status' => 'approve'
					));
					foreach ($comments as $comment) {
			?>
						<p><?= $comment->comment_content ?></p>
						<p><i><?= $comment->comment_author ?></i></p>

			<?php 
					}
					comment_form(array (
							'title_reply'   => 'Оставить отзыв',
							'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Отзыв', 'noun' ) . '</label> <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
							'class_submit'  => 'btn',
							'label_submit'  => 'Отправить отзыв'
						));
				}
			?>
			<?php social_print_all_categories(); ?>
		</div>	
	</div>
<?php
	get_footer();
?>
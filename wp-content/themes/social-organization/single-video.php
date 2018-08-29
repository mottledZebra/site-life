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
			<figure class="video">
				<iframe width="640" height="360" src="<?php the_field('video_link') ?>" frameborder="0" allowfullscreen></iframe>
			</figure>
			<br>
			<br>
			<p>
			<?php 
				$video = get_post(get_the_ID()); 
				echo $video->post_content;
			?>
			</p>
			<p>Рубрики: 
				<span class="col1"><?php the_category(', '); ?></span>
			</p>
			<!-- Блок отзывов -->
			<?php 
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
			?>
			<?php social_print_all_categories(); ?>
		</div>	
	</div>
<?php
	get_footer();
?>
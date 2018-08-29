<?php
/*
	Template Name: Команда
*/
?>

<?php
	get_header();
?>

<div class="container_12">
	<h2><?php the_field('main_team_title', get_page_by_title('Главная')->ID) ?></h2>
	<img src="<?php the_field('main_team_picture', get_page_by_title('Главная')->ID) ?>" alt="" class="">
	<br>
	<br>
	<p class="col2"><?php the_field('main_team_excerpt', get_page_by_title('Главная')->ID) ?></p>
	<p><?php the_field('main_team_text', get_page_by_title('Главная')->ID) ?></p>
</div>

<?php
	get_footer();
?>
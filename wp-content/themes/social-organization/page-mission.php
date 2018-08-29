<?php
/*
	Template Name: Миссия
*/
?>

<?php
	get_header();
?>

<div class="container_12">
	<h2><?php the_field('main_mission_title', get_page_by_title('Главная')->ID) ?></h2>
	<p><?php the_field('main_mission_text', get_page_by_title('Главная')->ID) ?></p>
</div>

<?php
	get_footer();
?>
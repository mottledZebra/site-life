<?php
	add_theme_support('menus');
	add_theme_support('custom-header', array(
		'width'  => 220,
		'height' => 116
	));
	add_theme_support('post-thumbnails');

	if (!function_exists('social_remove_post_menu')) {
		function social_remove_post_menu() {
			remove_menu_page('edit.php');
			remove_menu_page('upload.php');
		}
	}
	add_action('admin_menu', 'social_remove_post_menu');
	
	if (!function_exists('social_edit_admin_menu')) {
		function social_edit_admin_menu() {
			global $menu;
			$menu[25][0] = 'Отзывы'; 
		}
	}
	add_action('admin_menu', 'social_edit_admin_menu');	

	register_nav_menus(array(
		'top' => 'Верхнее меню сайта'
	));

	if (!function_exists('social_register_news')) {
		function social_register_news() {
			$labels = array(
				'name' => 'Новости',
				'singular_name' => 'Новость', 
				'add_new' => 'Добавить новость',
				'add_new_item' => 'Добавить новость', 
				'edit_item' => 'Редактировать новость',
				'new_item' => 'Свежая новость',
				'all_items' => 'Все новости',
				'view_item' => 'Просмотр новостей на сайте',
				'search_items' => 'Искать новости',
				'not_found' =>  'Новостей не найдено.',
				'not_found_in_trash' => 'В корзине нет новостей.',
				'menu_name' => 'Новости'
			);
			$args = array(
				'labels' => $labels,
				'public' => true, 
				'menu_icon' => 'dashicons-format-aside', 
				'menu_position' => 5,
				'supports' => array( 'title', 'editor', 'thumbnail'),
				'taxonomies' => array('category')
			);
			register_post_type('news', $args);
		}		
	}
	add_action('init', 'social_register_news'); 

	if (!function_exists('social_register_campaigns')) {
		function social_register_campaigns() {
			$labels = array(
				'name' => 'Мероприятия',
				'singular_name' => 'Мероприятие', 
				'add_new' => 'Добавить мероприятие',
				'add_new_item' => 'Добавить новое мероприятие', 
				'edit_item' => 'Редактировать мероприятие',
				'new_item' => 'Новое мероприятие',
				'all_items' => 'Все мероприятия',
				'view_item' => 'Просмотр мероприятий на сайте',
				'search_items' => 'Искать мероприятия',
				'not_found' =>  'Мероприятий не найдено.',
				'not_found_in_trash' => 'В корзине нет мероприятий.',
				'menu_name' => 'Мероприятия'
			);
			$args = array(
				'labels' => $labels,
				'public' => true, 
				'menu_icon' => 'dashicons-nametag', 
				'menu_position' => 5,
				'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail', 'comments'),
				'taxonomies' => array('category')
			);
			register_post_type('campaigns', $args);
		}		
	}
	add_action('init', 'social_register_campaigns'); 

	if (!function_exists('social_register_volunteering')) {
		function social_register_volunteering() {
			$labels = array(
				'name' => 'Приглашения',
				'singular_name' => 'Приглашение', 
				'add_new' => 'Добавить приглашение',
				'add_new_item' => 'Добавить новое приглашение', 
				'edit_item' => 'Редактировать приглашение',
				'new_item' => 'Новое приглашение',
				'all_items' => 'Все приглашения',
				'view_item' => 'Просмотр приглашений на сайте',
				'search_items' => 'Искать приглашения',
				'not_found' =>  'Приглашений не найдено.',
				'not_found_in_trash' => 'В корзине нет приглашений.',
				'menu_name' => 'Волонтерство'
			);
			$args = array(
				'labels' => $labels,
				'public' => true, 
				'menu_icon' => 'dashicons-universal-access', 
				'menu_position' => 5,
				'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'comments'),
				'taxonomies' => array('category')
			);
			register_post_type('volunteering', $args);
		}		
	}
	add_action('init', 'social_register_volunteering'); 

	if (!function_exists('social_register_video')) {
		function social_register_video() {
			$labels = array(
				'name' => 'Видео',
				'singular_name' => 'Видео', 
				'add_new' => 'Добавить видео',
				'add_new_item' => 'Добавить видео', 
				'edit_item' => 'Редактировать видео',
				'new_item' => 'Новое видео',
				'all_items' => 'Все видео',
				'view_item' => 'Просмотр видео на сайте',
				'search_items' => 'Искать видео',
				'not_found' =>  'Видео не найдено.',
				'not_found_in_trash' => 'В корзине нет видео.',
				'menu_name' => 'Видео'
			);
			$args = array(
				'labels' => $labels,
				'public' => true, 
				'menu_icon' => 'dashicons-video-alt3', 
				'menu_position' => 5,
				'supports' => array('title', 'editor', 'excerpt', 'comments'),
				'taxonomies' => array('category')
			);
			register_post_type('video', $args);
		}		
	}
	add_action('init', 'social_register_video'); 

	if (!function_exists('social_register_actions')) {
		function social_register_actions() {
			$labels = array(
				'name' => 'Деятельность',
				'singular_name' => 'Деятельность', 
				'add_new' => 'Добавить дело',
				'add_new_item' => 'Добавить дело', 
				'edit_item' => 'Редактировать дело',
				'new_item' => 'Новая деятельность',
				'all_items' => 'Вся деятельность',
				'view_item' => 'Просмотр дел на сайте',
				'search_items' => 'Искать дела',
				'not_found' =>  'Дел не найдено.',
				'not_found_in_trash' => 'В корзине нет дел.',
				'menu_name' => 'Деятельность'
			);
			$args = array(
				'labels' => $labels,
				'public' => true, 
				'menu_icon' => 'dashicons-megaphone', 
				'menu_position' => 5,
				'supports' => array('title', 'thumbnail'),
				'taxonomies' => array('category')
			);
			register_post_type('actions', $args);
		}		
	}
	add_action('init', 'social_register_actions'); 

	if (!function_exists('social_register_services')) {
		function social_register_services() {
			$labels = array(
				'name' => 'Услуги',
				'singular_name' => 'Услуга', 
				'add_new' => 'Добавить услуги',
				'add_new_item' => 'Добавить услугу', 
				'edit_item' => 'Редактировать услугу',
				'new_item' => 'Новая услуга',
				'all_items' => 'Все услуги',
				'view_item' => 'Просмотр услуг на сайте',
				'search_items' => 'Искать услуги',
				'not_found' =>  'Услуг не найдено.',
				'not_found_in_trash' => 'В корзине нет услуг.',
				'menu_name' => 'Услуги'
			);
			$args = array(
				'labels' => $labels,
				'public' => true, 
				'menu_icon' => 'dashicons-products', 
				'menu_position' => 5,
				'supports' => array('title', 'thumbnail', 'editor', 'comments'),
				'taxonomies' => array('category')
			);
			register_post_type('services', $args);
		}		
	}
	add_action('init', 'social_register_services'); 

	add_filter('navigation_markup_template', 'social_navigation_template', 10, 2 );
	function social_navigation_template( $template, $class ){
		return '
		<nav class="navigation %1$s" role="navigation">
			<div class="nav-links">%3$s</div>
		</nav>    
		';
	}

	function social_print_all_categories() {
		echo '<p>Все рубрики: <span class="col1">';
		wp_list_categories(array(
			'style'      => 'none',
			'separator'  => ', '
		));
		echo '</span></p>';
	}
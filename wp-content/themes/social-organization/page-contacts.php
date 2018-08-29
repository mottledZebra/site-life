<?php
/*
	Template Name: Контакты
*/
?>

<?php
	get_header();
?>
<!--==============================Content=================================-->
		<div class="content">
			<div class="container_12">
				<div class="grid_12">
					<h2>Где мы находимся</h2>
					<div class="map">
						<figure class="">
							<?php the_field('contacts_map'); ?>
						</figure>
						<div class="grid_4 alpha">
							<h2>Адрес:</h2>
							<address>
								<span class="fa fa-home"></span>
								<?php the_field('contacts_address') ?>
							</address>
						</div>
						<div class="grid_4">
							<h2>Телефоны:</h2>
							<div class="m_phone">
								<div class="fa fa-phone"></div>
								<?php the_field('contacts_phone') ?>
							</div>
							<div class="m_phone">
								<div class="fa fa-print"></div>
								<?php the_field('contacts_fax') ?>
							</div>
						</div>
						<div class="grid_4 omega">
							<h2>E-mail:</h2>
							<a href="mailto:<?php the_field('contacts_email') ?>">
								<span class="fa fa-envelope-o"></span> 
								<?php the_field('contacts_email') ?>
							</a>
						</div>
						<div class="clear"></div>
					</div>
					<h2>Обратная связь</h2>
					<?php the_field('contacts_form') ?>
					<form id="form">
						<div class="success_wrapper">
							<div class="success-message">Данные отправлены</div>
						</div>
						<label class="name">
							<input type="text" placeholder="Имя:" data-constraints="@Required @JustLetters" />
							<span class="empty-message">*Это обязательное поле.</span>
							<span class="error-message">*Неверный формат имени.</span>
						</label>
						<label class="email">
							<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
							<span class="empty-message">*Это обязательное поле.</span>
							<span class="error-message">*Неверный формат e-mail.</span>
						</label>
						<label class="subject">
							<input type="text" placeholder="Тема:" data-constraints="@Required @JustLetters"/>
							<span class="empty-message">*Это обязательное поле.</span>
							<span class="error-message">*Неверный формат текста.</span>
						</label>
						<label class="message">
							<textarea placeholder="Сообщение:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
							<span class="empty-message">*Это обязательное поле.</span>
							<span class="error-message">*Сообщение слишком короткое.</span>
						</label>
						<div>
							<div class="clear"></div>
							<div class="btns">
								<a href="#" data-type="reset" class="btn">Очистить</a>
								<a href="#" data-type="submit" class="btn">Отправить</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
<?php
	get_footer();
?>
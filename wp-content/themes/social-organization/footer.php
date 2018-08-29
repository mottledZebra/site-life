		<div class="bottom_block">
			<div class="container_12">
				<div class="grid_4">
					<h3>Будьте в курсе</h3>
					<div class="text1">Подпишитесь на нашу рассылку</div>
					<form id="newsletter">
						<div class="rel">
							<div class="success">Ваш запрос на подписку успешно отправлен!</div>
							<label class="email">
								<input type="email" value="Введите ваш E-mail" >
								<span class="error">*Неверный формат e-mail.</span>
							</label>
						</div>
						<a href="#" class="btn" data-type="submit">Подписаться</a>
					</form>
				</div>
				<div class="grid_5 prefix_3">
					<h3>Оставайтесь на связи</h3>
					<div class="text1">Будьте с нами в социальных сетях </div>
					Вступайте в наши группы в социальных сетях
					<div class="socials">
						<a href="https://twitter.com/"><div class="fa fa-twitter"></div></a>
						<a href="https://www.facebook.com/"><div class="fa fa-facebook"></div></a>
						<a href="https://ru.pinterest.com/"><div class="fa fa-pinterest-square"></div></a>
						<a href="https://plus.google.com"><div class="fa fa-google-plus"></div></a>
						<a href="https://www.instagram.com/"><div class="fa fa-instagram"></div></a>
					</div>
				</div>
			</div>
		</div>
<!--==============================footer=================================-->
		<footer>
			<div class="container_12">
				<div class="grid_12">
					<div class="copy">
						<?= bloginfo() ?> &copy; 2017 | <a href="http://bayguzin.ru/" title="шаблоны сайта">bayguzin.ru</a> & 
						 <a href="https://github.com/Gindill" title="Web-разработка">Gindill</a>
					</div>
				</div>
			</div>
		</footer>
		<?php wp_footer(); ?>
		<script src="<?= get_template_directory_uri() ?>/js/jquery.hoverdir.js"></script>
		<script>
		$(document).ready(function() {
		 $('.iosSlider').iosSlider({
			desktopClickDrag: true,
			snapToChildren: true,
			navSlideSelector: '.sliderContainer .slideSelectors .item',
			onSlideComplete: slideComplete,
			onSliderLoaded: sliderLoaded,
			onSlideChange: slideChange,
			scrollbar: false,
			autoSlide: true,
			autoSlideTimer: 3300,
			infiniteSlider: true
		 });
		});
		function slideChange(args) {
		 $('.sliderContainer .slideSelectors .item').removeClass('selected');
		 $('.sliderContainer .slideSelectors .item:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
		}
		function slideComplete(args) {
		 if(!args.slideChanged) return false;
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		}
		function sliderLoaded(args) {
		 $(args.sliderObject).find('.text1, .text2').attr('style', '');
		 $(args.currentSlideObject).find('.text1').animate({
			right: '100px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 $(args.currentSlideObject).find('.text2').delay(200).animate({
			right: '70px',
			opacity: '0.72'
		 }, 400, 'easeOutQuint');
		 slideChange(args);
		}
		$(function() {
				$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
			});
		</script>
	</body>
</html>
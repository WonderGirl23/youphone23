<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Новый YouPhone</title>
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
	<link rel="stylesheet" href="style/style.css">
</head>
<body>
	<div class="wrapper">
		<div class="main">
			<header class="header">
				<div class="container">
					<div class="header__inner">
						<div class="logo">
							YouPhone 
						</div>
						<nav class="nav">
							<ul class="menu">
								<li class="menu__item">
									<a  class="menu__link menu__link_activ"href="#about">O YouPhone Pro
									</a>
								</li>
								<li class="menu__item">
									<a  class="menu__link"href="#property">Характеристики</a>
								</li>
								<li class="menu__item">
									<a  class="menu__link"href="#set-units">Комплектация
									</a>
								</li>
								<li class="menu__item">
									<a  class="menu__link"href="#photogallery">Фотогалерея</a>
								</li>
								<li class="menu__item">
									<a  class="menu__link"href="#price">Цены</a>
								</li>
							</ul>
						</nav>
						<div class="mobile-nav">
							<button class="mobile-menu-btn" role="none">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M3 18H21V16H3V18ZM3 13H21V11H3V13ZM3 6V8H21V6H3Z" fill="white"/>
								</svg>
							</button>
							<button class="mobile-menu-close" role="none">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.25 6L18.75 19.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M5.25 19.5L18.75 6" stroke="white" stroke-width="2" stroke-linecap="round"stroke-linejoin="round"/>
								</svg>
							</button>
						</div>
					</div>
				</div>
			</header>
			<div class="container product" id="about">
				<div class="about__product">
					<h1 class="title">Новый <span class="title-brand">YouPhone Pro</span></h1>
					<p class="about-text">
							Революционная технология, 
							меняющая представление <br>о камере
					</p>
					<button class="button button-open">Предзаказ</button>	
				</div>
				<div class="photo-phone">
					<div class="title title-mobile">Новый <span class="title-brand">YouPhone Pro</span></div>
					<img data-aos="zoom-in-up" data-aos-duration="1500" src="images/iphone1.png" alt="Фото телефона" title="Фото телефона">
				</div>
			</div>
			<a class="arrow-down" href="#property">
				<img src="images/down.svg" alt="Переход к следующему блоку" title="Переход к следующему блоку">
			</a>
		</div>
		<section id="property">
			<div class="property-inner">
				<div class="container">
					<h2 class="heading">Характеристики</h2>
					<div class="property-block">
					<!-- начало 1го блока -->
						<div class="property-block__item">
							<div class="property-block__icon">
								<img src="images/storage.svg">
							</div>
							<h3 class="property-block__title">
								Минимальная ёмкость вдвое больше
							</h3>
							<p class="property-block__text">
								Минимальная ёмкость YouPhone 12 Pro — 128 ГБ, а значит, места для фото и видео стало в два раза больше.
							</p>
						</div>
					<!-- конец 1го блока -->
					<!-- начало 2го блока -->
						<div class="property-block__item">
							<div class="property-block__icon">
								<img src="images/simCards.svg">
							</div>
							<h3 class="property-block__title">
								Используйте два номера
							</h3>
							<p class="property-block__text">
								Благодаря поддержке двух SIM‑карт — обычной и eSIM — вы сможете пользоваться и личным, и рабочим номером. 
							</p>
						</div>
					<!-- конец 2го блока -->
					<!-- начало 3го блока -->
						<div class="property-block__item">
							<div class="property-block__icon">
								<img src="images/sound.svg">
							</div>
							<h3 class="property-block__title">
								Пространственное аудио 
							</h3>
							<p class="property-block__text">
								Вы полностью погружаетесь в трёхмерный звук.
							</p>
						</div>
					<!-- конец 3го блока -->
					</div>
				</div>
			</div>
		</section>
		<section id="set-units">
			<div class="container">
				<h2 class="heading heading_white">Комплектация</h2>
				<div class="units__info">
					<div class="units">
							<img data-aos="fade-up-right" data-aos-duration="3000" class="phone-img" src="images/iphone_gray_withCherry.png" alt="YouPhone" title="Изображение YouPhone">
						<p class="unit__text unit__text-phone">
							YouPhone Pro 
						</p>
					</div>
					<div class="units">
							<img data-aos="fade-up-left" data-aos-duration="2000" class="cable-img" src="images/usb_cable.png" alt="USB-cable" title="Изображение USB-cable">
						<p class="unit__text unit__text-cable">
							Кабель USB-C/Lightning
						</p>
					</div>
				</div>
			</div>
			<a class="arrow-down" href="#photogallery">
				<img src="images/down.svg" alt="Переход к следующему блоку" title="Переход к следующему блоку">
			</a>
		</section>
		<section id="photogallery">
			<div class="container">
				<h2 class="heading">Фотогалерея</h2>
				<div class="photo-slider">
					<!-- Slider main container -->
					<div class="swiper-container">
					<!-- Additional required wrapper -->
						<div class="swiper-wrapper">
						    <!-- Slides -->
						    <div class="swiper-slide"><img class="slider__img" src="images/iphone_horizont.png"></div>
						    <div class="swiper-slide"><img class="slider__img" src="images/iphone_horizont.png"></div>
						    <div class="swiper-slide"><img class="slider__img" src="images/iphone_horizont.png"></div>
						    <div class="swiper-slide"><img class="slider__img" src="images/iphone_horizont.png"></div>
						</div>
					</div>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
						<!-- If we need navigation buttons -->
					<div class="swiper-button-prev-user"></div>
					<div class="swiper-button-next-user"></div>
				</div>
			</div>
		</section>
		<section id="price" class="main">
			<div class="price__inner">
				<div class="container">
					<h2 class="heading heading_white">Цены</h2>
					<div class="price-block">
						<!-- 1й тел начало -->
						<div class="price-block__item">
							<div class="price-block__title">
								YouPhone Pro 
							</div>
							<div class="price-block__memory">
							64ГБ
							</div>
							<div class="price-block__photo">
								<img data-aos="flip-up" data-aos-duration="1500" src="images/iphone_gray_withCherry.png">
							</div>
							<div class="price-block__parameter">
								<div class="price-block__color">
									<span class="price-block__color-text parameter-text">
										Цвет:
									</span>
										<div class="color">
											<span class="color__item color__item_white"></span>
											<span class="color__item
											color__item_active  color__item_grey"></span>
											<span class="color__item color__item_green"></span>
										</div>
								</div>
								<span class="price-block__price-text parameter-text">
									Цена:
								</span>
								<span class="price-block__price">
									75 000 руб 
								</span>
							</div>
							<a href="#order" class="button phone1">Предзаказ</a>
						</div>
						<!-- 1й тел конец -->
						<!-- 2й тел начало -->
						<div class="price-block__item">
							<div class="price-block__title">
								YouPhone Pro 
							</div>
							<div class="price-block__memory">
							256ГБ
							</div>
							<div class="price-block__photo">
								<img data-aos="flip-up" data-aos-duration="2000" src="images/iphone_green_withCherry.png">
							</div>
							<div class="price-block__parameter">
								<div class="price-block__color">
									<span class="price-block__color-text parameter-text">
										Цвет:
									</span>
										<div class="color">
											<span class="color__item color__item_white"></span>
											<span class="color__item
											color__item_grey"></span>
											<span class="color__item color__item_active   color__item_green"></span>
										</div>
								</div>
								<span class="price-block__price-text parameter-text">
									Цена:
								</span>
								<span class="price-block__price">
									82 000 руб 
								</span>
							</div>
							<a href="#order" class="button phone2">Предзаказ</a>
						</div>
						<!-- 2й тел конец -->
						<!-- 3й тел начало -->
						<div class="price-block__item">
							<div class="price-block__title">
								YouPhone Pro 
							</div>
							<div class="price-block__memory">
							512ГБ
							</div>
							<div class="price-block__photo">
								<img data-aos="flip-up" data-aos-duration="2500" src="images/iphone_white_withCherry.png">
							</div>
							<div class="price-block__parameter">
								<div class="price-block__color">
									<span class="price-block__color-text parameter-text">
										Цвет:
									</span>
										<div class="color">
											<span class="color__item color__item_active 
											color__item_active_dark
											 color__item_white"></span>
											<span class="color__item
											color__item_grey"></span>
											<span class="color__item color__item_green"></span>
										</div>
								</div>
								<span class="price-block__price-text parameter-text">
									Цена:
								</span>
								<span class="price-block__price">
									90 000 руб 
								</span>
							</div>
							<a href="#order" class="button phone3">Предзаказ</a>
						</div>
						<!-- 3й тел конец -->
					</div>
					<a class="arrow-down" href="#order">
						<img src="images/down.svg" alt="Переход к следующему блоку" title="Переход к следующему блоку">
					</a>
				</div>
			</div>
		</section>
		<section id="order">
			<div class="order__inner">
				<div class="container">
					<h2 class="heading">Предзаказ</h2>
					<div class="order__text">
						Отправьте Вашу заявку на предзаказ и забронируйте новый YouPhone Pro уже сейчас!
					</div>
					<div class="order__text-mobile">
						Забронируйте новый YouPhone Pro уже сейчас!
					</div>
					<?php include 'send.php'; ?>
					<form class="form" action="#order" method="post">
						<div class="wrapper-select">
							<select class="form__item" name="city">
								<option value="0">
									-  Выберите город -
								</option>
								<option value="Москва" 
									<?php echo !empty($_POST['city']) && $_POST['city'] == 'Москва' ? 'selected' : '';?>
								>Москва
								</option>
								<option value="Санкт-Петербург"
									<?php echo !empty($_POST['city']) && $_POST['city'] == 'Санкт-Петербург' ? 'selected' : '';
									?>								
								>Санкт-Петербург
								</option>
								<option value="Казань"
									<?php echo !empty($_POST['city']) && $_POST['city'] == 'Казань' ? 'selected' : '';
									?>
								>Казань
								</option>
								<option value="Новосибирск"
									<?php echo !empty($_POST['city']) && $_POST['city'] == 'Новосибирск' ? 'selected' : '';
									 ?>
								>Новосибирск
								</option>
							</select>
						</div>
						<input class="form__item" type="text" name="name" placeholder="Напишите Ваше имя" value="<?php echo !empty($_POST['name']) ? $_POST['name'] : '' ?>">
						<input class="form__item" type="text" name="phone" placeholder="Напишите Ваш телефон" value="<?php  echo !empty($_POST['phone']) ? $_POST['phone'] : '' ?>">
						<input class="form__item" type="text" name="email" placeholder="Напишите Ваш E-mail" value="<?php echo !empty($_POST['email']) ? $_POST['email'] : '' ?>">
						<input type="hidden" name="price" value="не выбрано">
						<?php echo !empty($result) ? $result : '' ?>
						<button class="button button-filled" >Забронировать</button>
					</form>
				</div>
			</div>
		</section>
		<section id="contacts" class="main">
			<div class="container">
				<h2 class="heading heading_white heading_white-contacts">Наши контакты</h2>
				<h2 class="heading heading_white heading_white-mobile">Контакты</h2>
				<div class="contacts__items">
						<a href="http://vk.com" target="_blank" class="contacts__vk">
							<img src="images/vkontakte 1.png">
						</a>
						<a href="http://facebook.com" target="_blank" class="contacts__facebook">
							<img src="images/facebook 1.png">
						</a>
						<a href="http://instagram.com" target="_blank" class="contacts__instagram">
							<img src="images/g5758.png">
						</a>
					<div class="contacts__data">
						<div class="contacts__tel">
							<a href="tel:84957772233">
								+7 495 777 22 33 
							</a>
						</div>
						<div class="contacts__email">
							<a href="malito:youphone@youphone.com">youphone@youphone.com</a>
						</div>
						<div class="contacts__address">
							Россия, г. Москва, ул. 1 Мая, д. 9
						</div>
					</div>
				</div>
			</div>
			<div class="contacts__images">
				<img data-aos="fade-left" data-aos-offset="500" data-aos-duration="1500" class="contacts__images-left" src="images/iphone_left_contacts_withCherry.png">
				<img data-aos="fade-right" data-aos-offset="300" data-aos-duration="1500" class="contacts__images-right" src="images/iphone_right_contacts.png">
			</div>
		</section>
		<footer class="footer">
			<div class="container">
				<div class="footer__inner">
					<div class="logo footer__logo">
								YouPhone
					</div>
					<p class="footer__copyright">
						© All rights reserved
					</p>
					<div class="footer__social">
						<a href="http://vk.com" target="_blank" class="footer__social-vk">
								<img src="images/vk.png">
							</a>
							<a href="http://facebook.com" target="_blank" class="footer__social-facebook">
								<img src="images/Vector.png">
							</a>
							<a href="http://instagram.com" target="_blank" class="footer__social-instagram">
								<img src="images/group.png">
							</a>
					</div>
				</div>
			</div>
		</footer>
		<div class="overlay"></div>
		<div class="popup-form">
			<button class="form-close">
				<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7 8L25 26" stroke="#2E61A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M7 26L25 8" stroke="#2E61A6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
			</button>
			<div class="form-inner">
				<h2 class="heading">Предзаказ</h2>
				<div class="order__text popup-form_order__text">
						Заполните форму и забронируйте новый YouPhone Pro уже сейчас!
				</div>
				<form class="form" id="popup-form">
					<input class="form__item popup-form__item" type="text" name="name" placeholder="Напишите Ваше имя">
					<input class="form__item popup-form__item" type="text" name="phone" placeholder="Напишите Ваш телефон">
					<button class="button button-filled popup-form__button" >Забронировать</button>
				</form>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="script/script.js" ></script>
</body>
</html>
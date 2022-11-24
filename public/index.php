<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/images/icon-logo.png" type="image/png">
	<title>ЦОПП</title>
<script defer src="bandle.js"></script><link href="styles.css" rel="stylesheet"></head>

<body>

	<div class="overlay third"></div>
	<div class="overlay second"></div>
	<div class="overlay firts"></div>
	<div class="overlay four"></div>
	<div class="overlay five"></div>
	<div class="overlay six"></div>

	<div class="menu">
		<div class="menu__container _container">
			<div class="menu__body">
				<div class="menu__header">
					<div class="menu__block">
						<div class="menu__logo"></div>
						<div class="menu__text">
							Центр
							Опережающей
							Профессиональной
							Подготовки
						</div>
					</div>
					<div class="menu__btn"></div>
				</div>

				<div class="menu__content-wrapper">
					<div class="menu__image"></div>
					<div class="menu__content">
						<div class="menu__item">
							<a class="menu__item-text">Главная</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text">О нас</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text">Вакансии</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text">Курсы</a>
						</div>
						<div class="menu__item">
							<a class="menu__item-text">Обратная связь</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="banner">
			<div class="banner__container _container">
				<div class="banner__body">
					<div class="banner__content">
						<div class="banner__heading">
							<span>СКИДКА 20%</span>
							<span>Начать просто. Попробуйте</span>
						</div>
						<div class="banner__decore"></div>
						<div class="banner__decore"></div>
						<div class="banner__decore"></div>
						<div class="banner__decore"></div>
					</div>
				</div>
			</div>
		</section>
	</div>

	<div class="auth">
		<div class="auth__body">
			<div class="auth__close"></div>
			<div class="auth__heading">Вход</div>
			<form class="auth__form" method="POST" action="libs/auth.php">

				<div class="auth__form-input-wrapper">
					<input type="email" name="login" placeholder="Логин">
					<div class="auth__form-icon"></div>
				</div>

				<div class="auth__form-input-wrapper">
					<input type="password" name="pass" placeholder="Пароль">
					<div class="auth__form-icon"></div>
				</div>

				<div class="auth__login">Вы еще не зарегистрировались? <span id="btnAuth">Тогда создайте новый профиль</span></div>

				<button type="submit">Войти</button>
				<p>Или</p>
				<a class="google">
					<div class="google-icon"></div>
					<div class="google-text">Войти через Google</div>
				</a>
			</form>
		</div>
	</div>

	<div class="check">
		<div class="check__body">
			<div class="check__close"></div>
			<div class="check__heading">Регистрация</div>
			<div class="check__login">У вас есть аккаунт?  <span id="btnCheck">Войти</span></div>
			<form class="check__form" method="POST" action="libs/check.php">
				<input type="text" name="name" placeholder="Имя">
				<input type="text" name="surname" placeholder="Фамилия">
				<input type="email" name="login" placeholder="Почта (Логин)">
				<input type="password" name="pass" placeholder="Пароль">
				<input type="password" name="pass_conf" placeholder="Подтвердить пароль">
				<button type="submit">Регистрироваться</button>
			</form>
		</div>
	</div>

	<header class="header">
		<div class="header__container _container">
			<div class="header__body">
				<div class="header__block">
					<div class="header__logo">
						<div class="header__logo-dot"></div>
					</div>
					<div class="header__text">
						Центр
						Опережающей
						Профессиональной
						Подготовки
					</div>
						<ul class="header__navigation">
							<li><a href="#home">Главная</a></li>
							<li><a href="#prof">Профориентация</a></li>
							<li><a href="#about">О нас</a></li>
						</ul>
						<ul class="header__navigation">
							<li><a href="#advantage">Преимущества</a></li>
							<li><a href="#category">Направления</a></li>
							<li><a href="#footer">Контакт</a></li>
						</ul>
				</div>
				<div class="header__block">
					<?php
					if($_COOKIE['users'] == ''):
				?>
				<div class="header__btn-auth">Войти</div>
				<?php else: ?>
				<div class="header__btn-profile"></div>
				<? endif; ?>
					
					
					<div class="header__btn"></div>
				</div>
			</div>
		</div>
	</header>

	<section class="main" id="home">
		<div class="main__container _container">
			<div class="main__body">
				<div class="main__image"></div>
				<div class="main__block">
					<div class="main__heading">
						<span>Образовательная</span>
						<span>платформа</span>
					</div>
					<div class="main__text">
						<span>Актуальные знания от признанных</span>
						<span>экспертов рынка для новичков и практикующих специалистов.</span>
					</div>
				</div>
				<div class="main__stat">
					<div class="main__stat-item">
						<div class="main__stat-item-num" id="home-num01">0</div>
						<div class="main__stat-item-text">слушателей</div>
					</div>
					<div class="main__stat-item">
						<div class="main__stat-item-num" id="home-num02">0</div>
						<div class="main__stat-item-text">курсов</div>
					</div>
					<div class="main__stat-item">
						<div class="main__stat-item-num" id="home-num03">0</div>
						<div class="main__stat-item-text">
							образовательных
							организаций
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="category" id="category">
		<div class="category__container _container">
			<div class="category__body">
				<div class="category__block">
					<div class="category__heading">
						<span>Направления</span>
						<span>обучения</span>
					</div>
					<div class="category__text">Собрали бесплатные курсы и занятия, которые помогут открыть для себя новое</div>
					<div class="category__num">01</div>
				</div>
				<div class="category__content-wrapper">
					<div class="category__content">
						<div class="category__content-heading">сделаем подборку
							в личном кабинете</div>
						<form class="category__content-form" method="POST" action="libs/telegram.php">
							<input type="email" placeholder="Email" name="email">
							<div class="category__form-arrow"></div>
							<button type="submit">
								
							</button>
						</form>
						<div class="category__content-descriptions">*Даю согласие на обработку моих персональных данных</div>
						<div class="category__content-pattern"></div>
					</div>
					<div class="category__content">
						<div class="category__item-wrapper">

							<div class="category__item">
								<div class="category__item-heading">3D моделирование для компьютерных игр</div>
								<div class="category__item-text">Курс повышения квалификации <br>
									Очно</div>
								<div class="category__item-btn">72 А.Ч.</div>
							</div>

							<div class="category__item">
								<div class="category__item-heading">Data-аналитик: старт карьеры</div>
								<div class="category__item-text"> Профессиональная переподготовка </div>
								<div class="category__item-btn">256 А.Ч.</div>
							</div>

							<div class="category__item">
								<div class="category__item-heading">Data-аналитик: старт карьеры</div>
								<div class="category__item-text"> Профессиональная переподготовка </div>
								<div class="category__item-btn">256 А.Ч.</div>
							</div>

							<div class="category__item">
								<div class="category__item-heading">Data-аналитик: старт карьеры</div>
								<div class="category__item-text"> Профессиональная переподготовка </div>
								<div class="category__item-btn">256 А.Ч.</div>
							</div>

						</div>
						<div class="category__item-wrapper">

							<div class="category__item">
								<div class="category__item-heading">Data-аналитик: старт карьеры</div>
								<div class="category__item-text"> Профессиональная переподготовка </div>
								<div class="category__item-btn">256 А.Ч.</div>
							</div>

							<div class="category__item">
								<div class="category__item-heading">Data-аналитик: старт карьеры</div>
								<div class="category__item-text"> Профессиональная переподготовка </div>
								<div class="category__item-btn">256 А.Ч.</div>
							</div>

							<div class="category__item">
								<div class="category__item-heading">Data-аналитик: старт карьеры</div>
								<div class="category__item-text"> Профессиональная переподготовка </div>
								<div class="category__item-btn">256 А.Ч.</div>
							</div>

							<div class="category__item">
								<div class="category__item-arrow-wrapper">
									<div class="category__item-arrow"></div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="advantage" id="advantage">
		<div class="advantage__container _container">
			<div class="advantage__body">
				<div class="advantage__block">
					<div class="advantage__heading">
						<span>Раскройте свои</span>
						<span>сильные стороны</span>
					</div>
					<div class="advantage__num">02</div>
				</div>

				<div class="advantage__content-wrapper">
					<div class="advantage__image"></div>
					<div class="advantage__content">
						<div class="advantage__content-block">
							<div class="advantage__content-num">01</div>
							<div class="advantage__content-decore-image"></div>
						</div>
						<div class="advantage__content-block">
							<div class="advantage__content-heading">Решитесь на большее</div>
							<div class="advantage__content-text">Вам есть что показать этому миру. Позвольте себе ставить большие цели, а навыки и знания дадим мы. Для этого у нас есть все инструменты.
							</div>
						</div>
						<div class="advantage__content-decore"></div>
					</div>
				</div>

				<div class="advantage__content-wrapper">
					<div class="advantage__content">
						<div class="advantage__content-block">
							<div class="advantage__content-num">02</div>
							<div class="advantage__content-decore-image"></div>
						</div>
						<div class="advantage__content-block">
							<div class="advantage__content-heading">Выберите вектор
								развития</div>
							<div class="advantage__content-text">С нами вы можете получить новую профессию, освоить навыки для развития карьеры или перенастроить свой бизнес. Выбирайте подходящую из более 80 программ.
							</div>
						</div>
						<div class="advantage__content-arrow-wrapper">
							<div class="advantage__content-arrow"></div>
							<div class="advantage__content-arrow-text">Удачи</div>
						</div>
						<div class="advantage__content-decore"></div>
					</div>
					<div class="advantage__image"></div>
				</div>

				<div class="advantage__content-wrapper">
					<div class="advantage__image"></div>
					<div class="advantage__content">
						<div class="advantage__content-block">
							<div class="advantage__content-num">03</div>
							<div class="advantage__content-decore-image"></div>
						</div>
						<div class="advantage__content-block">
							<div class="advantage__content-heading">Действуйте</div>
							<div class="advantage__content-text">Мы создали комфортную среду обучения, чтобы у вас всегда была мотивация двигаться вперёд.
								Учитесь, практикуйтесь и применяйте знания сразу в работе.
							</div>
						</div>
						<div class="advantage__content-decore"></div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="about" id="about">
		<div class="about__container _container">
			<div class="about__body">
				<div class="about__block">
					<div class="about__heading">
						<span>О нашей</span>
						<span>компании</span>
					</div>
					<div class="about__text">В нашей команде 33 профессионала.
						Мы постоянно развиваемся, повышая квалификацию своих сотрудников, разрабатывая новые программы.</div>
					<div class="about__num">03</div>
				</div>
				<div class="about__content swiper">
					<div class="about__content-block swiper-wrapper">

						<div class="about__item swiper-slide">
							<div class="about__item-image"></div>
							<div class="about__item-name">Хабаров Владислав Гаврильевич</div>
							<div class="about__item-text">Директор</div>
						</div>

						<div class="about__item swiper-slide">
							<div class="about__item-image"></div>
							<div class="about__item-name">Попова Саргылаана Николаевна</div>
							<div class="about__item-text">Заместитель</div>
						</div>

						<div class="about__item swiper-slide">
							<div class="about__item-image"></div>
							<div class="about__item-name">Андреев Андрей
								Михайлович</div>
							<div class="about__item-text">Заместитель</div>
						</div>

					</div>
					<div class="about__content-block">
						<div class="about__content-arrow-wrapper">
							<div class="about__content-arrow"></div>
							<div class="about__content-arrow-text">К остальным</div>
						</div>
						<div class="about__content-block-text">Главная ценность - наши сотрудники</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="prof" id="prof">
		<div class="prof__container _container">
			<div class="prof__body">
				<div class="prof__block">
					<div class="prof__heading">Профориентация</div>
					<div class="prof__text">Найдите свою идеальную профессию
					</div>
					<div class="prof__num">04</div>
				</div>
			</div>
			<div class="prof__content-wrapper">
				<div class="prof__image"></div>
				<div class="prof__content">
					<div class="prof__content-block">
						<div class="prof__content-block-heading">Мы будем рядом и не дадим остановиться
							на полпути</div>
						<div class="prof__content-block-text">Пройти тест за 5 минут</div>
					</div>
					<div class="prof__content-block">
						<div class="prof__arrow-wrapper">
							<div class="prof__arrow"></div>
							<div class="prof__arrow-text">Вперёд!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="banner" id="banner">
		<div class="banner__container _container">
			<div class="banner__body">
				<div class="banner__content">
					<div class="banner__heading">
						<span>СКИДКА 20%</span>
						<span>Начать просто. Попробуйте</span>
					</div>
					<div class="banner__decore"></div>
					<div class="banner__decore"></div>
					<div class="banner__decore">
						<div class="banner__decore-arrow"></div>
					</div>
					<div class="banner__decore"></div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer" id="footer">
		<div class="footer__container _container">
			<div class="footer__body">
				<div class="footer__content">
					<div class="footer__block">
						<div class="footer__heading">
							<span>Обратная</span>
							<span>связь</span>
						</div>
						<div class="footer__copyright">ЦОПП— © 2022</div>
					</div>
					<div class="footer__block">
						<ul class="footer__navigation">
							<li><a href="#category">Направления</a></li>
							<li><a href="#advantage">Преимущества</a></li>
							<li><a href="#about">О нас</a></li>
							<li><a href="#prof">Профориентация</a></li>
						</ul>
						<div class="footer__social-wrapper">
							<div class="footer__social">
								<span>Instagram</span>
								<span>Instagram</span>
							</div>
							<div class="footer__social">
								<span>Telegram</span>
								<span>Telegram</span>
							</div>
						</div>
					</div>
					<div class="footer__block">
						<div class="footer__block-text">Адрес <br> Республика Саха (Якутия), 677000 Якутск, ул.Крупской, 13</div>
						<div class="footer__block-text">Почта <br> info@copp14.com</div>
						<div class="footer__block-text">Номер  <br> +7 800 222-41-40</div>
					</div>
					<form class="footer__form" method="POST" action="libs/telegram.php">
						<input type="name" name="name" placeholder="Имя">
						<textarea name="message" placeholder="Сообщение"></textarea>
						<button type="submit">Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>
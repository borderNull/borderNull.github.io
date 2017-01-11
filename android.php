<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	    <meta name="keywords" content="" />
	    <meta name="description" content="" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	    <meta property="og:title" content="Я иду на курс Middle Android Developer" />
	    <meta property="og:type" content="website" />
	    <meta property="og:url" content="http://skill-branch.ru/android" />
	    <meta property="og:image" content="http://skill-branch.ru/img/android-image.jpg" />
	    <meta property="og:description" content="Погружение в построение MVP архитектуры, Rx Java, Fire Base, Flow, Mortar - и многое другое..." />
	    <title>Skill Branch | Образовательное IT-сообщество</title>
	
	    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
	
	
	    <script>
	        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	        ga('create', 'UA-47740780-10', 'auto');
	        ga('send', 'pageview');
	
	    </script>
	</head>
<body>
 <div id="loader-wrap" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;z-index: 9999;background-color: #000;"><div class="loader"></div>
    </div>
	<!--<img src="img/photo0000.png" class="img-out" alt="photo0000">-->
	<div id="login" class="modal-window">
		<a href="#" class="modal-window-close">Закрыть</a>

		<form action="#" method="POST" role="form" class="">
			<!-- for utm -->
			<input type="hidden" id="currentPage" value="Android">
			<input type="hidden" id="utmSource" value="<?php echo isset($_GET['utm_source']) ? $_GET['utm_source'] : '' ;?>">
			<input type="hidden" id="utmMedium" value="<?php echo isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '';?>">
			<input type="hidden" id="utmCampaign" value="<?php echo isset ($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '' ;?>">
			<input type="hidden" id="utmTerm" value="<?php echo isset ($_GET['utm_term']) ? $_GET['utm_term'] : '';?>">
			<input type="hidden" id="utmContent" value="<?php echo isset ($_GET['utm_content']) ? $_GET['utm_content']: '';?>">

			<div class="title-wrap">
				<p class="title">Вход</p>
				<p class="ps">на сайт</p>
			</div>

			<div class="form-inner">
				<div class="form-group">
					<input type="text" class="form-control mail" name="mail" id="mail3" placeholder="Введите ваш email" required>
				</div>

				<div class="form-group">
					<input type="password" class="form-control pass" name="pass" id="pass3" placeholder="Введите ваш пароль" required>
				</div>

				<div class="btn-wrap">
					<button type="submit" class="btn btn-primary link-button red">Войти</button>
				</div>
			</div>
		</form>
	</div>

	<div id="enter" class="modal-window">
		<a href="#" class="modal-window-close">Закрыть</a>

		<form method="post" role="form" class="form fio mail mailphp2">
			<input type="hidden" id="name" class="name" value="form5">


			<div class="title-wrap">
				<p class="title">Хотите стать частью команды?</p>
				<p class="ps">если вы профессионал своего дела и давно хотели участвовать в масштабных IT-проектах - мы приглашаем вас в нашу команду!</p>
			</div>

			<div class="form-inner">
				<div class="form-group">
					<input type="text" class="form-control fio" name="fio" id="fio4" placeholder="Введите ваше имя" required>
				</div>

				<div class="form-group">
					<input type="text" class="form-control mail" name="mail" id="mail4" placeholder="Введите ваш email" required>
				</div>

				<div class="btn-wrap">
					<button type="submit" class="btn btn-primary link-button red">Оставить заявку</button>
				</div>
			</div>
		</form>
	</div>

	<div id="spiker" class="modal-window">
		<a href="#" class="modal-window-close">Закрыть</a>

		<form action="#" method="POST" role="form" class="form fio mail mailphp3">
			<input type="hidden" id="name" class="name" value="form4">

			<div class="title-wrap">
				<p class="title">Хотите стать спикером?</p>
				<p class="ps">если вы эксперт в мобильной разработке и давно испытываете желание поделиться опытом - приглашаем вас стать спикером!</p>
			</div>

			<div class="form-inner">
				<div class="form-group">
					<input type="text" class="form-control fio" name="fio" id="fio5" placeholder="Введите ваше имя" required>
				</div>

				<div class="form-group">
					<input type="text" class="form-control mail" name="mail" id="mail5" placeholder="Введите ваш email" required>
				</div>

				<div class="btn-wrap">
					<button type="submit" class="btn btn-primary link-button red">Оставить заявку</button>
				</div>
			</div>
		</form>
	</div>

	<div id="trend" class="modal-window">
		<a href="#" class="modal-window-close">Закрыть</a>

		<form action="#" method="POST" role="form" class="form mail mailphp4">
			<input type="hidden" id="name" class="name" value="form6">
			<input type="hidden" name="nav" id="nav6" class="form-control nav" value="">

			<div class="title-wrap">
				<p class="title">Содержание курса в разработке</p>
				<p class="ps">оставьте заявку – мы проинформируем вас о наборе группы</p>
			</div>

			<div class="form-inner">
				<div class="form-group">
					<input type="text" class="form-control mail" name="mail" id="mail6" placeholder="Введите ваш email" required>
				</div>

				<div class="btn-wrap">
					<button type="submit" class="btn btn-primary link-button red">Оставить заявку</button>
				</div>
			</div>

		</form>
	</div>

	<div class="modal-window-overlay"></div>

	<div class="page-wrap">
		<header class="page">
			<div class="wrap-container">
				<div class="header-inner row">
					<div class="mobile-logo">
						<a href="/" class="logo">
							<i></i>
							<span>Skill Branch</span>
						</a>
						<a href="http://account.skill-branch.ru/" class="link-button red">Войти</a>
					</div>
					<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 logo-ico">
						<a href="/" class="logo">
							<i></i>
						</a>
					</div>
					<div class="col-xs-5 col-sm-3 col-md-2 col-lg-2 logo-text">
						<a href="/" class="logo">
							<span>Skill Branch</span>
							<!-- <div class="shadow"></div> -->
						</a>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 menu-wrap pull-right">
						<ul class="menu">
							<li class="menu-item col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<a href="#trend" class="modal-window-open nav-link" data-nav="iOS">iOS</a>
							</li>
							<li class="menu-item col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<a href="/android" data-nav="Android">ANDROID</a>
							</li>
							<li class="menu-item col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<a href="/backend-middle" data-nav="Backend">BACKEND</a>
							</li>
							<li class="menu-item col-xs-2 col-sm-2 col-md-2 col-lg-2">
								<a href="/ui-design-middle" data-nav="UI Design">UI DESIGN</a>
							</li>
							<li class="menu-item col-xs-4 col-sm-4 col-md-4 col-lg-4 menu-item_login pull-right">
								<a href="http://account.skill-branch.ru/" class="link-button">Войти</a>
							</li>
						</ul>
					</div>
		
					<!-- <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 login-wrap pull-right">
						<a href="#" class="link-button">Войти</a>
					</div> -->
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div id="content">
			<!-- Профессия -->
			<section id="block-1" class="page-offer">
				<div class="wrap-container">
					<div class="block-wrap row">
						<!-- <div class="bg-right"></div> -->
						<div class="bg-right page android"></div>
						<div class="bg-right opacity"></div>
						<div class="clear"></div>

						<div class="offer page">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 offer-inner">
								<p>Профессия</p>
								<p class="title">Android - разработчик</p>
								<p class="ps">Разрабатываем под самую популярную платформу</p>
								<p class="ps pps">Дата начала 12.10.2016</p>
								<a href="#block-13" class="link-button red big non-correction">Начать обучение</a>
							</div>
						</div>
						<div class="clear"></div>

						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 menu-wrap">
							<ul class="menu row">
								<li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="#trend" class="modal-window-open nav-link" data-nav="iOS">iOS</a>
								</li>
								<li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="#" class="active" data-nav="Android">ANDROID</a>
								</li>
								<li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="/backend-middle" class="nav-link" data-nav="Backend">BACKEND</a>
								</li>
								<li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="/ui-design" class="nav-link" data-nav="UI Design">UI DESIGN</a>
								</li>
							</ul>
						</div>

						<div class="free-help page relative">
							<form action="#" method="POST" role="form" class="form fio phone mailphp">
								<input type="hidden" id="name" class="name" value="form1">

								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-wrap">
									<p class="">Бесплатная консультация</p>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 inputs-wrap ">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="text" class="fio" name="fio" id="fio" class="form-control" value="" required="required" placeholder="Введите ваше имя" required/>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="tel" class="phone" name="phone" id="phone" class="form-control" value="" required="required" placeholder="Введите ваш телефон" required/>
									</div>
									<div class="clear"></div>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 button-wrap ">
									<button type="submit" class="btn btn-primary link-button">Жду звонка</button>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 button-wrap ">
									<a href="#block-13" class="link-button red non-correction">Оставить заявку</a>
								</div>
								<div class="clear"></div>
							</form>
						</div>

						<div class="free-help page fix">
							<form action="#" method="POST" role="form" class="form fio phone mailphp">
								<input type="hidden" id="name" class="name" value="form2">

								<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 text-wrap">
									<p class="">Бесплатная консультация</p>
								</div>
								<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 inputs-wrap ">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="text" class="fio" name="fio" id="fio" class="form-control" value="" required="required" placeholder="Введите ваше имя" required/>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="tel" class="phone" name="phone" id="phone" class="form-control" value="" required="required" placeholder="Введите ваш телефон" required/>
									</div>
									<div class="clear"></div>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 button-wrap ">
									<button type="submit" class="btn btn-primary link-button">Жду звонка</button>
								</div>
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 button-wrap ">
									<a href="#block-13" class="link-button red non-correction">Оставить заявку</a>
								</div>
								<div class="clear"></div>
							</form>
						</div>
						<!-- не удалять -->
						<div class="free-help-mark"></div>
						<div class="clear"></div>

					</div>
				</div>
				<div class="clear"></div>
			</section>

			<!-- Выберите уровень курса -->
			<section id="block-2">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Выберите уровень курса</p>
						</div>
					</div>
					<div class="trend-wrap row">
						<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 trend-inner">
							<ul class="trend-list">
								<li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<a href="#trend" class="modal-window-open nav-link" data-nav="Android Beginner"></a>
									<div class="trend-list-item-inner">
										<div class="ico-wrap">
											<i class="ico-1"></i>
										</div>
										<p>Android Beginner</p>
									</div>
								</li>
								<li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4 active">
									<div class="trend-list-item-inner">
										<div class="ico-wrap">
											<i class="ico-2"></i>
										</div>
										<p>Android Middle</p>
									</div>
								</li>
								<li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<a href="#trend" class="modal-window-open nav-link" data-nav="Android Senior"></a>
									<div class="trend-list-item-inner">
										<div class="ico-wrap">
											<i class="ico-3"></i>
										</div>
										<p>Android Senior</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</section>

			<!-- О профессии -->
			<section id="block-3" class="about-pro">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">О профессии</p>
						</div>
					</div>

					<div class="about-program row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about-program-inner">
							<ul class="ap-list">
								<li class="ap-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div class="ico-wrap">
										<i class="ico-1"></i>
									</div>
									<p class="title">Востребованность <br/>на рынке труда</p>
								</li>
								<li class="ap-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div class="ico-wrap">
										<i class="ico-2"></i>
									</div>
									<p class="title">Время освоения курса <br/>4 месяца</p>
								</li>
								<li class="ap-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
									<div class="ico-wrap">
										<i class="ico-3"></i>
									</div>
									<p class="title">Высокая зарплата при трудоустройстве</p>
								</li>
							</ul>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</section>

			<!-- Спикеры курса -->
			<section id="block-4">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Спикеры курса</p>
						</div>
					</div>

					<div class="spikers-wrap row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top-control-wrap">
								<a href="#" class="arrow-left"></a>
								<a href="#" class="arrow-right"></a>
							</div>
							<div class="swiper-container spikers">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/spikers/spiker01.jpg" alt="Михаил Макеев" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Михаил Макеев</p>
												<p class="position">Chief technology officer – SoftDesign</p>

												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://www.linkedin.com/in/%D0%BC%D0%B8%D1%85%D0%B0%D0%B8%D0%BB-%D0%BC%D0%B0%D0%BA%D0%B5%D0%B5%D0%B2-878665aa?trk=hp-identity-headline" target="_blank">
															<i class="fa fa-linkedin" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Платформа Android является одной из самых востребованных на данный момент: огромное количество поддерживаемых устройств и более 1 миллиарда пользователей по всему миру. Community разработчиков под Android не стоит на месте, платформа постоянно развивается: появляются новые фичи, новые архитектурные подходы и мейнстримы в разработке. Данный курс  рассчитан на разработчиков, которые "в теме", чей "Hello world" остался где-то за плечами, на тех, кто хочет развиваться как профессионал и быть на волне. Процесс разработки очень многогранен и включает в себя множество подходов и технологий, с которыми мы будем работать в данном курсе. Основной акцент будет направлен на разработку в RX стиле и концепции MVP. Реактивное программирование позволяет взглянуть по новому на привычные концепции работы с данными и на разработку в целом, а представление архитектуры приложения в виде разделенных на уровни слоев позволяет разрабатывать гибкие, легко масштабируемые и  тестируемые приложения.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/spikers/spiker.png" alt="Android Developer" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Android Developer</p>
												<p class="position">Совсем скоро вы увидите главные лица курса. Сейчас мы формируем список экспертов</p>
											</div>
											<p>Для каждого из направлений мы проводим конкурс на место спикера. Ими становятся не просто профессионалы с успешной карьерой за плечами и большим багажом знаний. Ими становятся мастера своего дела, способные с легкостью передавать вам свои знания и призванные помогать вам максимально быстро получить новые навыки и применить их на практике</p>
										</div>
									</div>
								</div>

								<div class="control-wrap">
									<div class="pagination"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Содержание курса -->
			<section id="block-5" class="course-content">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Содержание курса</p>
						</div>
					</div>

					<div class="watch-on-youtube col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xs-offset-0 col-sm-offset-5 col-md-offset-5 col-lg-offset-5">
						<div class="ico-wrap">
							<a href="https://www.youtube.com/channel/UCWLKyJUZ32GJvSIisQjU3kw" target="_blank"><i class="ico"></i></a>
						</div>
						<div class="desc">
							<p>Посмотрите видео</p>
							<a href="https://www.youtube.com/channel/UCWLKyJUZ32GJvSIisQjU3kw" class="link" target="_blank">Бесплатный DEV-Интенсив</a>
						</div>
					</div>

					<div class="course-content-inner row">
						<ul class="course-content-list">
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">01</p>
								<div class="desc">
									<p class="title">Первая вводная встреча. Правила и напутствия</p>
									<p class="time">2 часа теории, 2 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Описание структуры курса, предоставление ключей доступа к приватным репозиториям и личным кабинетам с обучающим контентом. Подготовка окружения. Организационные моменты. Ответы на вопросы.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">02</p>
								<div class="desc">
									<p class="title">MVP – архитектура. Разделение приложения на слои бизнес логики, хранения данных и пользовательского интерфейса</p>
									<p class="time">2 часа теории, 4 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Общие принципы построения архитектуры проекта. Выделение ключевых бизнес сущностей.  Абстракция над основными бизнес сущностями.  Разбивка на слои Model View Presenter.  Декларирование ключевых интерфейсов.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">03</p>
								<div class="desc">
									<p class="title">Fragments – работа с фрагментами, сохранение данных в Retain Fragment</p>
									<p class="time">2 часа теории, 5 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Жизненный цикл фрагментов. Критерии оправданности использования. Сomposite view. Сохранение модельных данных в Retain Fragment.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">04</p>
								<div class="desc">
									<p class="title">Dagger 2 - инъекция зависимостей. Модули и компоненты, удовлетворение зависимостей</p>
									<p class="time">2 часа теории, 4 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Области видимости инъекций, организация удовлетворения зависимостей в концепции MVP. Реализация Dependency Injection для DataManager, Presenter, Model, View.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">05</p>
								<div class="desc">
									<p class="title">Введение в RX Java, RX операторы, взаимодействие с потоками данных </p>
									<p class="time">2 часа теории, 16 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Введение в реактивное программирование, потоки данных, управление потоками, RX операторы Map, FlatMap, SwitchMap, Filter, From, Just.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">06</p>
								<div class="desc">
									<p class="title">RX Android жизненный цикл приложения с учетом RX, Composite Subscribtion, RX Retain Fragment</p>
									<p class="time">2 часа теории, 14 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Жизненный цикл приложения с учетом RX. Управление подписками.  Сохранение модельных данных в концепции RX. Выполнение задач в фоновых и основных потоках.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">07</p>
								<div class="desc">
									<p class="title">Retrofit 2 RX adapter + RX Logging (frodo) – работа с сетью в контексте RX выполнение преобразований с данными в background потоке </p>
									<p class="time">2 часа теории, 14 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Логирование RX сущностей Observable и Subscriber. Работа с сетью с использованием Retrofit2, Moshi, RX Java adapter. RX NetworkStatusChecker – проверка доступности соединения, пользовательские операторы преобразований.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">08</p>
								<div class="desc">
									<p class="title">Продвинутая работа с Gradle (различные версии сборки, Flavors) </p>
									<p class="time">2 часа теории, 2 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Release, Full, Demo, Debug, Test сборки. Организация зависимостей проекта.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">09</p>
								<div class="desc">
									<p class="title">Тестирование приложений Mockito, Espresso, jacoco</p>
									<p class="time">2 часа теории, 16 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Автоматическое тестирование, написание Unit-тестов, мокирование данных, процент покрытия кода тестами, концепция TDD.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">10</p>
								<div class="desc">
									<p class="title">Управление очередью задач Android Priority Job Queue</p>
									<p class="time">2 часа теории, 8 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Синхронизация данных с сервером. Offline persistent data. Очередь задач, автоматическая синхронизация при доступности сети.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">11</p>
								<div class="desc">
									<p class="title">Realm NoSQL DataBase – локальное сохранение данных</p>
									<p class="time">2 часа теории, 16 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>NoSQL DataBase. Объектные модели данных. Операции записи, чтения, обновления, удаления из базы данных. Реализация паттерна Repository для получения данных из памяти, диска, сети в зависимости от доступности.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">12</p>
								<div class="desc">
									<p class="title">Анимации в Android. PropertyAnimation, SVG MorphAnimation, TransitionApi, Shared Element Activity Transition</p>
									<p class="time">2 часа теории, 10 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Анимации свойств в Android, интеполяторы, аниматоры, очередь анимаций, анимация переходов между Activity и Fragments. Пользовательская анимация SVG элементов. Сложные анимации.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">13</p>
								<div class="desc">
									<p class="title">Авторизация через соц.сети VK, Fb</p>
									<p class="time">2 часа теории, 4 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Получение данных пользователей из социальных сетей, работа с Fb API, VK API. Авторизация с использованием данных соц.сетей.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">14</p>
								<div class="desc">
									<p class="title">Baas FireBase – настройка и интеграция с приложением</p>
									<p class="time">2 часа теории, 4 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Настройка аккаунта, подключение сервисов, организация БД, настройка рассылки Push - уведомлений, аналитика, сохранение пользовательского контента, удаленная конфигурация приложения. Интеграция с мобильным приложением.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">15</p>
								<div class="desc">
									<p class="title">Push-уведомление, локальные и инициализируемые с сервера</p>
									<p class="time">2 часа теории, 8 часов практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Создание локальных Push-уведомлений. Получение и отправка на сервер Push token. Прием и отображение Push-уведомлений в приложении.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">16</p>
								<div class="desc">
									<p class="title">Proguard  - оптимизация и обфускация кода</p>
									<p class="time">2 часа теории, 4 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>MultiDEX, Настройка ProGuard для обфускации кода. Исключение неиспользуемых классов и функций.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">17</p>
								<div class="desc">
									<p class="title">Публикация приложения в Google Play</p>
									<p class="time">2 часа теории, 2 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Подготовка проекта к публикации. Бета-тестирование. Настройка и подключение сервисов, Crashlytics.</p></div>
								</div>
							</li>
							<li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
								<a href="#" class="toggle"></a>
								<p class="num">18</p>
								<div class="desc">
									<p class="title">Финальная встреча, закрытие курса, благодарности, выдача сертификатов</p>
									<p class="time">2 часа теории, 2 часа практики</p>
									<a href="#" class="detail-btn"></a>
									<div class="detail"><p>Подведение итогов. Выдача сертификатов об окончании. Выдача Google аккаунтов разработчиков.</p></div>
								</div>
							</li>
						</ul>
						<div class="clear"></div>
						<div class="button-wrap">
							<a href="#block-13" class="link-button red non-correction">Записаться на курс</a>
						</div>
					</div>

					<div class="clear"></div>
				</div>
			</section>

			<!-- Стэк технологий курса -->
			<section id="block-6" class="stack-wrap">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Стэк технологий курса</p>
						</div>
					</div>

					<div class="stack-inner row">
						<ul class="stack-list">
							<li class="stack-list-item">
								<img src="img/tech/01.png" alt="Android Studio">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/02.png" alt="ReactiveX">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/03.png" alt="Realm">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/04.png" alt="Firebase">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/05.png" alt="Git">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/06.png" alt="Bitbucket">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/07.png" alt="Mockito">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/08.png" alt="Espresso">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/09.png" alt="Fabric">
							</li>
							<li class="stack-list-item">
								<img src="img/tech/10.png" alt="Gradle">
							</li>
						</ul>

					</div>

					<div class="clear"></div>
				</div>
			</section>

			<!-- Как проходит обучение -->
			<section id="block-7" class="how-do-it-wrap">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Как проходит обучение</p>
						</div>
					</div>

					<div class="how-do-it row">
						<div class="macbook-wrap">
							<div class="macbook-bg"></div>
							<div class="top-control-wrap">
								<a href="#" class="arrow-left"></a>
								<a href="#" class="arrow-right"></a>
							</div>
							<div class="swiper-container macbook">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<div class="img-wrap" style="background: url('img/mac-slider/01.png') no-repeat transparent 50% 50%; background-size: cover"></div>
									</div>
									<div class="swiper-slide">
										<div class="img-wrap" style="background: url('img/mac-slider/02.png') no-repeat transparent 50% 50%; background-size: cover"></div>
									</div>
									<div class="swiper-slide">
										<div class="img-wrap" style="background: url('img/mac-slider/03.png') no-repeat transparent 50% 50%; background-size: cover"></div>
									</div>
									<div class="swiper-slide">
										<div class="img-wrap" style="background: url('img/mac-slider/04.png') no-repeat transparent 50% 50%; background-size: cover"></div>
									</div>
									<div class="swiper-slide">
										<div class="img-wrap" style="background: url('img/mac-slider/05.png') no-repeat transparent 50% 50%; background-size: cover"></div>
									</div>
								</div>
							</div>
						</div>

						<ul class="how-do-it-list row">
							<li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="ico-wrap">
									<i class="ico-1"></i>
								</div>
								<p class="title">Записи всех занятий</p>
								<p>Весь учебный материал остается у вас в свободном доступе. Вы всегда можете повторить пройденное.</p>
							</li>
							<li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="ico-wrap">
									<i class="ico-2"></i>
								</div>
								<p class="title">Работа в команде</p>
								<p>В чате с коллегами решаете актуальные задачи. Учитесь командой разработке в совместных репозиториях.</p>
							</li>
							<li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="ico-wrap">
									<i class="ico-3"></i>
								</div>
								<p class="title">Домашние задания</p>
								<p>Все задания с контролем выполнения и дедлайнами. Вы обучаетесь дисциплине написания кода.</p>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<!-- Ваш будущий сертификат и портфолио -->
			<section id="block-8" class="portfolio-wrap">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Ваш будущий сертификат и портфолио</p>
						</div>
					</div>

					<div class="portfolio-inner row">
						<div class="sertificat col-xs-12 col-sm-7 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
							<img class="img-cert" src="img/cert.png" alt="Сертификат"/>
						</div>
						<div class="sertificat-text col-xs-12 col-sm-3 col-md-3 col-lg-3">
							<p class="title">Получаете сертификат</p>
							<p>По прохождению обучения вам выдается сертификат. С ним вы подтверждаете свои навыки и умения.</p>
						</div>
						<div class="clear"></div>

						<div class="iphone-wrap row">
							<div class="iphone-text col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
								<p class="title">Создаете E-commerce приложение</p>
								<p>За время обучения, вы создаете собственное мобильное приложение. Вы можете демонстрировать его в качестве потфолио.</p>
							</div>
							<div class="iphone-inner col-xs-12 col-sm-3 col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
								<div class="iphone-bg-wrap nope-android">
									<div class="top-control-wrap">
										<a href="#" class="arrow-left"></a>
										<a href="#" class="arrow-right"></a>
									</div>
									<div class="iphone-bg nope-android"></div>
									<div class="swiper-container iphone">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="img-wrap" style="background: url('img/android/1.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
											</div>
											<div class="swiper-slide">
												<div class="img-wrap" style="background: url('img/android/2.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
											</div>
											<div class="swiper-slide">
												<div class="img-wrap" style="background: url('img/android/3.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
											</div>
											<div class="swiper-slide">
												<div class="img-wrap" style="background: url('img/android/4.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</section>

			<!-- Ваше резюме после прохождения обучения -->
			<section id="block-9" class="resume-wrap">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Ваше резюме после обучения</p>
						</div>
					</div>

					<div class="resume-inner row">
						<div class="resume col-xs-12 col-sm-7 col-md-7 col-lg-7">
							<div class="resume-header">
								<div class="photo-wrap">
									<img src="img/bender.jpg" alt="mr. rodriges">
								</div>
								<div class="fio-wrap">
									<p class="fio-text">Bender Rodriguez</p>
									<p>android-разработчик</p>
								</div>
							</div>

							<div class="resume-middle">
								<div class="main-info col-xs-12 col-sm-6 col-md-6 col-lg-6">
									<p class="title">Профессиональные качества</p>
									<ul>
										<li>Выполнение поставленных задач точно в срок. Соблюдение дедлайнов</li>
										<li>Подбор Стэка необходимых технологий и библиотек</li>
										<li>Умение работы по Agile</li>
										<li>Умение работать с ТаскТрекерами</li>
										<li>Знание и умение работы с VCS</li>
										<li>Владение культурой написания кода, код Ревью</li>
										<li>Прогнонизование времени решения задач</li>
										<li>Умение работать в команде</li>
										<li>Высокая концентрация на деталях</li>
										<li>Быстрое освоение новых знаний и навыков</li>
									</ul>
								</div>
								<div class="money-info-wrap col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 pull-right">
									<div class="money-info">
										<p class="ps">Ожидаемая зарплата</p>
										<p class="sum">от <span>110 000 <i class="fa fa-rub" aria-hidden="true"></i></span></p>
									</div>
								</div>
							</div>

							<div class="resume-bottom">
								<p>Ключевые навыки:</p>
								<ul class="skill-list">
									<li class="skill-list-item">Android Studio</li>
									<li class="skill-list-item">Git</li>
									<li class="skill-list-item">MVP</li>
									<li class="skill-list-item">rxJava</li>
									<li class="skill-list-item">Retrofit 2</li>
									<li class="skill-list-item">Realm DB</li>
									<li class="skill-list-item">Unit testing</li>
									<li class="skill-list-item">Espresso</li>
									<li class="skill-list-item">Mockito</li>
									<li class="skill-list-item">DI dagger</li>
									<li class="skill-list-item">Firebase</li>
									<li class="skill-list-item">Gradle</li>
								</ul>
							</div>
						</div>
						<div class="resume-info col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
							<p class="title">Помогаем в получении профессии и прохождении практики</p>

							<div class="ico-wrap">
								<i></i>
							</div>

							<p>Мы лично заинтересованы в вашем трудоустройстве, и наши HR-менеджеры работают над этим</p>

							<a href="#block-13" class="link-button red non-correction">Получить профессию</a>
						</div>
					</div>

				</div>
			</section>

			<!-- В итоге вы получите -->
			<section id="block-10" class="result-wrap">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">В итоге вы получите</p>
						</div>
					</div>

					<div class="result-inner row">
						<ul class="result-list">
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-1"></i>
								</div>
								<p>4 месяца обучения и реальной практики</p>
							</li>
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-2"></i>
								</div>
								<p>18 вебинаров в записи</p>
							</li>
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-3"></i>
								</div>
								<p>Домашние задания для закрепления пройденного материала</p>
							</li>
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-4"></i>
								</div>
								<p>18 презентаций и методических пособий с ссылками на практические кейсы</p>
							</li>
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-5"></i>
								</div>
								<p>Доступ к мастер­-классам и бонусному контенту</p>
							</li>
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-6"></i>
								</div>
								<p>Сообщество для общения с коллегами и преподавателями</p>
							</li>
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-7"></i>
								</div>
								<p>Сертификат подтверждающий профессиональный уровень</p>
							</li>
							<li class="result-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
								<div class="ico-wrap">
									<i class="ico-8"></i>
								</div>
								<p>Good Practice</p>
							</li>
						</ul>
					</div>

					<div class="clear"></div>
				</div>
			</section>

			<!-- Отзывы -->
			<section id="block-11" class="review-block-wrap">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Отзывы</p>
						</div>
					</div>

					<div class="review-wrap row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top-control-wrap">
								<a href="#" class="arrow-left"></a>
								<a href="#" class="arrow-right"></a>
							</div>
							<div class="swiper-container review">
								<div class="swiper-wrapper">
					
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo009.jpg" alt="Сергей Куприн" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Сергей Куприн</p>
												<p class="position">Android developer at NTV Broadcasting Company</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://www.linkedin.com/in/%D1%81%D0%B5%D1%80%D0%B3%D0%B5%D0%B9-%D0%BA%D1%83%D0%BF%D1%80%D0%B8%D0%BD-99160863" target="_blank">
															<i class="fa fa-linkedin" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Рад, что попал на это обучение. Все приятно организовано. Большой объем информации излагается доступно и «без воды». Заметно, что организаторы занимаются любимым делом. Еще вчера ученики не знали, как вывести кнопку на экран, а сегодня обсуждают как лучше загружать файлы на сервер. Это круто, продолжайте в том же духе, вы вносите большой вклад в IT - отрасль!</p>
										</div>
									</div>
					
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo010.jpg" alt="Александр Андрейченко" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Александр Андрейченко</p>
												<p class="position">Team Lead IT-Support Sberbank Voronezh</p>
												
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://ru.linkedin.com/in/aleksandr-andreichenko-a8592bb6" target="_blank">
															<i class="fa fa-linkedin" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Предоставленный материал наиболее качественно подходит для изучения технологий разработки приложений для Android. Хорошо описан весь алгоритм действий для написания учебного приложения. Все процессы и возможности предоставления сервисов в самой программе, жизненные циклы и методология Activity. Но важнее то, что теория перемешана с практикой. Настоящий кайф испытываешь в тот момент, когда запускаешь компиляцию и "оно работает!", "it work's!" "ja, es ist ausgezeichnet!" "ура, получилось"! Мне очень помогает этот проект для открытия новых перспектив развития в области разработки.</p>
										</div>
									</div>
					
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo008.jpg" alt="Иван Ганцев" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Иван Ганцев</p>
												<p class="position">Веб-разработчик компании AIC Robotics</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://vk.com/igantsev" target="_blank">
															<i class="fa fa-vk" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Выражаю огромную благодарность всем организаторам, и, в частности, спикеру Михаилу, за огромный вклад в наш skill, за мощный и насыщенный поток хорошо структурированной информации напрямую в наши головы. Очень качественная подача материала, завораживающая мотивация на рейтингах и дедлайнах домашних заданий, а также по настоящему интересный, не скучный практикум в виде написания мобильного приложения, контентом которого стали мы сами. Вокруг интенсива собралось дружное сообщество энтузиастов, жаждущих стать профессионалами в Android разработке. Спасибо Вам за предоставляемый нам шанс, стать ими.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo007.jpg" alt="Владислав Веревкин" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Владислав Веревкин</p>
												<p class="position">«Руководитель направления продаж дополнительных сервисов. Мобильные ТелеСистемы»</p>
											</div>
											<p>Ребята смогли в 1,5 - 2 часа одного занятия уместить столько информации, что порой за неделю многие не могут донести до аудитории! На вводном занятии предупредили о входных навыках. Да, порой тяжело, не зная чего-то, но к каждому заданию прикладывают ссылки с материалами. Курс Android просто огонь! На практике разберешься за месяц с тем, что в книгах можно читать годами. Сам по роду своей деятельности много обучаю людей и знаю насколько сложно найти подход к каждому. Я считаю, что нашему наставнику это удалось на 100%.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo006.jpg" alt="Александр Погребный" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Александр Погребный</p>
												<p class="position">Руководитель ИТ отдела ООО «Медитек»</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://www.facebook.com/alex.pogrebnyy" target="_blank">
															<i class="fa fa-facebook" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Материал излагается очень структурировано и позволяет понять разработку от разметки по макету и до работы с сетью. Приходилось много читать и перерабатывать огромное количество информации, и порой чувствовать себя студентом. Вопросы можно было задавать во время и непосредственно после видео лекции. Спикер Михаил Макеев старался доступно «разжевать» многие непонятные вещи по специфике программирования под Android. Огромное спасибо этим курсам – дают отличную основу. А если выполняешь все задания, то получаешь приложение в свое портфолио!</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo015.jpg" alt="Иван Золотарев" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Иван Золотарев</p>
												<p class="position">Android developer в компании Trend Technologies</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://www.linkedin.com/in/ivan-zolotarev-8559a3118" target="_blank">
															<i class="fa fa-linkedin" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Хочу сказать "Спасибо"  всем ребятам-организаторам курса, в особенности, но не только (Backend и все сопутствующее само по себе не зарождается) - Михаилу Макееву. Это его стараниями всего за семь 2-часовых занятий удалось раскрыть огромный пласт информации, равновеликий хорошей книге по Андроиду. Даже мне, несмотря на некоторый опыт разработки Android, в отдельных местах пришлось изрядно потрудиться и покорпеть над кодом. Нимало не сомневаюсь, что продолжение курса будет ничуть не хуже!</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo005.jpg" alt="Денис Эгалуев" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Денис Эгалуев</p>
												<p class="position">Фрилансер</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://vk.com/egaluev_d" target="_blank">
															<i class="fa fa-vk" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Предоставленная обучающая программа больше, чем оправдала мои ожидания. Самое главное, что можно сказать о программе – это подача предоставляемой информации при ее огромном количестве. Структурированная информация дает возможность получать настоящие и твердые знания, а не «кашу» в голове. Так же хотелось бы сказать огромное спасибо организаторам и отзывчивому преподавателю, который всегда идет на контакт и помогает с трудными задачами!</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo004.jpg" alt="Дмитрий Коропенко" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Дмитрий Коропенко</p>
												<p class="position">Образование Инженер-программист</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://vk.com/id4646406" target="_blank">
															<i class="fa fa-vk" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Главное - это практика программирования, чего так не достает другим школам или вебинарам. Использование актуальных технологий и методов работы открывает глаза и расширяет кругозор. Вас буквально берут за руку и протаскивают через пару лет самостоятельного обучения. За один курс я узнал больше, чем за 2 года самостоятельного ковыряния в книгах и документациях. Все преподносится быстро, емко и без лишних ненужных объяснений, чтобы было возможно выполнить порученные задания после вебинара к дедлайну. Как ни странно, но это мотивирует на еще большее изучение материала в рамках одной лекции.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/no_avatar_woman.jpg" alt="Елена Космова" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Елена Космова</p>
												<p class="position">Системный администратор</p>
											</div>
											<p>Записываясь на обучение, я и понятия не имела, что мне станет так интересно программировать под Android. Материалы к обучению предоставляются после онлайн-урока без задержек, составлены грамотно и качественно. Помимо этого, преподаватели организовали чат в Telegram, где все участники могут попросить совета или обсудить варианты решения между собой. Это очень удобно, так как многим ребятам помогает преподаватель в исправлении возникающих в процессе обучения проблем. Я и не подозревала, что смогу добиться таких весомых результатов уже за месяц.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo003.jpg" alt="Айрат Хайруллин" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Айрат Хайруллин</p>
												<p class="position">Специалист адресного хранения компании “OCS”</p>
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://vk.com/id17864859" target="_blank">
															<i class="fa fa-vk" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>В сети есть много информации по Java и Android, но далеко не вся она является актуальной, особенно на русском языке. Благо проблем с английским никаких нет, и курсы на русском стали табу для меня. Увидев курс, был очень приятно удивлён тем, что ресурс на русском языке предоставляет актуальный на данный момент учебный материал. Для меня это обучение лучшее, что есть в Рунете по Android. Желаю всяческого развития и процветания проекту!</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo002.jpg" alt="Иван Купцов" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Иван Купцов</p>
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://www.linkedin.com/in/ivan-kuptsov-3286774b?trk=nav_responsive_tab_profile" target="_blank">
															<i class="fa fa-linkedin" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>До начала курса было скромное знание Java - типичный начинающий программист. В результате занятий я могу и знаю, как написать функциональное приложение, причем используя методы и приемы, которые используют реальные разработчики, а не писатели в книгах. Курс был построен так, что ты учишься и в "мягком" и в "жестком" режиме одновременно. У тебя есть задания простые, а рядом задания «со звездочкой» - сложные. Увлеченный поиском решения задачи, смотришь в окно, а там уже рассвет. Твое приложение запускается, и переполненный гордостью за себя, что ты это сделал, идешь спать!</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo001.jpg" alt="Иван Ерофеев" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Иван Ерофеев</p>
												<p class="position">Студент 3 курса</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://vk.com/id189310635" target="_blank">
															<i class="fa fa-vk" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Обучающая программа предоставила мне шанс изучить то, чему не учат в Университете. Дала очень хороший старт для меня как для разработчика в своей сфере. Хочется сказать огромное спасибо за предоставленную возможность!</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo011.jpg" alt="Михаил Сорокин" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Михаил Сорокин</p>
												<p class="position">Руководитель проекта компании "Мера"</p>
											</div>
											<p>Если честно, к интернет обучению отношусь немного предвзято. Но, в данном случае,  не прогадал. Лекции предваряли два часа кодирования и разбора современных практик, применяемых в мобильной Android разработке. Жесткий контроль сроков сдачи домашнего задания, рейтинговая шкала и разные по уровню сложности задачи добавили в процесс игровой механики и драйва. Отдельно могу отметить поддержку обучающихся в чате Telegram. В нем преподавателя за глаза называют сэнсеем - с любой патовой ситуацией поможет справиться.  Команда Skill Branch  создала "ВАУ" - курс по программированию на Android.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo012.jpg" alt="Андрей Турубчук" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Андрей Турубчук</p>
												<p class="position">Сотрудник банка</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://vk.com/id61945030" target="_blank">
															<i class="fa fa-vk" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Если закончишь весь курс, то думаю поймешь, что такое работа программиста. Поймешь, что такое дедлайн в полной мере и что такое реальный проект! Всё грамотно структурировано, разработка идет с нуля и шаг за шагом, что очень немаловажно. На основном вооружении современный стек технологий и большой объем полезного материала. Впервые вижу, чтобы проект давался с нуля и в такое сжатое время - в других школах программирования это все бы растянули, наверное, на полгода. По окончанию обучения можно в полной мере представлять, что такое программирование под Android</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo013.jpg" alt="Алексей Мишин" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Алексей Мишин</p>
												<p class="position">Учитель информатики</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://vk.com/hellmojo" target="_blank">
															<i class="fa fa-vk" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>Курсы с головой окунают вас в разработку мобильного приложения. Уроки проходят в формате теория-практика. Отсутствует лишнее, позволяя не отвлекаться во время теории. Практика дает тот минимум, отталкиваясь от которого с помощью определенных подсказок, в домашнем задании формируются знания, а не бездумное переписывание кода. Это именно то, чего не хватало при изучении книг - четких, связанных между собой, задач.</p>
										</div>
									</div>
									<div class="swiper-slide">
										<div class="photo-wrap">
											<img src="img/reviews/photo014.jpg" alt="Андрей Цвирко" />
										</div>
										<div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
											<div class="review-text-top">
												<p class="author">Андрей Цвирко</p>
												<p class="position">Менеджер технической поддержки Системы Дистанционного Обучения</p>
					
												<ul class="soc-links">
													<li class="soc-links-item">
														<a href="https://www.linkedin.com/in/andrew-tsvirko-b8542b28" target="_blank">
															<i class="fa fa-linkedin" aria-hidden="true"></i>
														</a>
													</li>
												</ul>
											</div>
											<p>На занятиях преподаватель показывает применение теории в процессе написания настоящего кода. Домашнее задание нужно выполнить до дедлайна и это +!<br/>Огромное сообщество (чат обучающихся и преподавателя) стало ускорителем обучения. Помощь от преподавателя всегда была ровно в том объеме, чтобы не расслаблять свои извилины, и приходила она тогда, когда никто не мог найти наиболее оптимальное решение.<br/>Мы постепенно создавали каждый свое мобильное приложение, но с одинаковым функционалом. В итоге, получилось хорошо оттестировать, «вылизать» внешний вид приложения и с гордостью добавить в свое портфолио!.</p>
										</div>
									</div>
								</div>
																														
								<div class="control-wrap">
									<div class="pagination"></div>
								</div>
							</div>
						</div>
						</div>
				</div>
			</section>

			<!-- Наши друзья -->
			<section id="block-12" class="friends-wrap">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-wrap">
							<p class="title">Наши друзья</p>
						</div>
					</div>

					<div class="friends-inner row">
						<ul class="friends-list">
							<li class="friends-list-item">
								<img src="img/tech/01.png" alt="Android Studio">
							</li>
							<li class="friends-list-item">
								<img src="img/tech/02.png" alt="ReactiveX">
							</li>
							<li class="friends-list-item">
								<img src="img/tech/04.png" alt="FireBase">
							</li>
						</ul>
					</div>
					<div class="clear"></div>

				</div>
			</section>

			<!-- Запись на обучение -->
			<section id="block-13" class="entry-training-wrap">
				<div class="bg-opacity"></div>
				<div class="wrap-container">
					<div class="entry-training-inner row">
						<div class="left-part col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
							<div class="without-discount">
								<p class="ps">Цена без скидки:</p>
								<p>29 700 <i class="fa fa-rub" aria-hidden="true"></i></p>
							</div>
							<div class="with-discount-wrap row">
								<div class="with-discount-inner col-xs-12 col-sm-9 col-md-9 col-lg-9">
									<div class="with-discount">
										<p class="ps">К оплате:</p>
										<p>29 700 <i class="fa fa-rub" aria-hidden="true"></i></p>
										<!--<p class="ps">Цена до 03 октября</p>-->
										<p class="ps dot">+ Аккаунт разработчика в подарок!</p>
									</div>
								</div>
							</div>
						</div>
						<div class="right-part col-xs-12 col-sm-6 col-md-6 col-lg-6">
							<p class="title">Запись на обучение</p>
							<p class="ps">дата начала 12.10.2016</p>
							<form action="#" method="POST" role="form" class="form mailphp5">
								<input type="hidden" id="name" class="name" value="form7">
								<input type="hidden" id="form-title" class="form-title" value="Android-middle">

								<div class="row">
									<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
										 <!--test name-->
										<input type="text" class="form-control fname" id="fname" placeholder="Ваше имя" required>
									</div>
									<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
										<input type="text" class="form-control surname" id="surname" placeholder="Ваша фамилия" required>
									</div>
									<div class="clear"></div>
									<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
										<input type="tel" class="form-control phone" id="phone" name ="phone" placeholder="Ваш номер телефона" required>
									</div>
									<div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
										<input type="email" class="form-control mail" id="email" placeholder="Ваш email" required>
									</div>

									<div class="button-wrap col-xs-12 col-sm-6 col-md-6 col-lg-6 pull-right">
										<button type="submit" class="btn btn-primary link-button red pull-right">Оставить заявку</button>
									</div>
								</div>

							</form>
						</div>
					</div>

					<!--Порекомендуйте -->

					<div id="block-14" class="stack-wrap share-block share-under-form" style="z-index: 50">
						<div class="wrap-container">
							<p class="title">Порекомендуйте курс друзьям!</p>

							<div class="result-inner row">
								<div class="footer-bottom row">
									<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 share-wrap"
										 style="text-align:center">
										<div class="ya-share2" data-services="facebook,vkontakte,twitter" data-image="http://skill-branch.ru/img/android-image.jpg" data-url="http://skill-branch.ru/android" data-description = "Погружение в построение MVP архитектуры, Rx Java, Fire Base, Flow, Mortar - и многое другое..." data-title = "Я иду на курс Middle Android Developer"></div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
		<div class="page-buf"></div>
	</div>
	<div class="footer-wrap">
		<footer>
		    <div class="wrap-container">
		        <div class="inner-container">
		            <div class="footer-top row">
		                <div class="mobile-logo">
		                    <a href="/" class="logo">
		                        <i></i>
		                        <span>Skill Branch</span>
		                    </a>
		                </div>
		                <form action="#" method="POST" role="form" class="form mail mailphp1">
		                    <input type="hidden" id="name" class="name" value="form3">
		                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 logo-ico">
		                        <a href="#" class="logo">
		                            <i></i>
		                        </a>
		                    </div>
		                    <div class="col-xs-11 col-sm-2 col-md-2 col-lg-2 logo-text">
		                        <a href="#" class="logo">
		                            <span>Skill Branch</span>
		                            <div class="shadow"></div>
		                        </a>
		                    </div>
		                    <div class="col-xs-6 col-sm-4 col-md-5 col-lg-5 form-wrap">
		                        <input type="text" name="mail" id="mail2" class="form-control mail" value="" placeholder="Введите ваш email" required />
		                    </div>
		                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 button-wrap pull-right">
		                        <button type="submit" class="btn btn-primary link-button">Подписаться на рассылку</button>
		                    </div>
		                </form>
		            </div>
		            <div class="footer-middle row">
		                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 copy-wrap">
		                    <p class="copy">2016 &copy; SkillBranch. Образовательное IT-сообщество
		                        <br/><a href="img/oferta-SkillBranch.pdf" class="link" target="_blank">Публичная оферта</a></p>
		                </div>
		                <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1 info-wrap pull-right">
		                    <div class="desc">
		                        <p class="phone">8 800 500 9577</p>
		                        <p>info@skill-branch.ru</p>
		                    </div>
		                </div>
		                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 market-wrap">
		                    <div class="market-inner row">
		                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		                            <a href="#" class="market-button app-store" data-toggle="tooltip" data-placement="top" title="В разработке">
		                                <i class="ico-wrap">
		                                    <i class="ico"></i>
		                                </i>
		                                <div class="desc">
		                                    <p class="ps">Soon on the</p>
		                                    <p class="title">App store</p>
		                                </div>
		                            </a>
		                        </div>
		                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		                            <a href="#" class="market-button google-play" data-toggle="tooltip" data-placement="top" title="В разработке">
		                                <i class="ico-wrap">
		                                    <i class="ico"></i>
		                                </i>
		                                <div class="desc">
		                                    <p class="ps">Android app on</p>
		                                    <p class="title"></p>
		                                </div>
		                            </a>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <div class="footer-bottom row">
		                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 share-wrap">
		                    <div style="display:none">
		                        <div class="ya-share2" data-services="facebook,vkontakte,twitter"></div>
		                    </div>
		                    <div class="ya-share2 ya-share2_inited" data-services="facebook,vkontakte,twitter">
		                        <div class="ya-share2__container ya-share2__container_size_m">
		                            <ul class="ya-share2__list ya-share2__list_direction_horizontal">
		                                <li class="ya-share2__item ya-share2__item_service_facebook">
		                                    <a class="ya-share2__link" href="https://www.facebook.com/SkillBranch/" rel="nofollow" target="_blank" title="Facebook"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter"></span></span><span class="ya-share2__title">Facebook</span>
		                        </a>
		                                </li>
		                                <li class="ya-share2__item ya-share2__item_service_vkontakte">
		                                    <a class="ya-share2__link" href="https://vk.com/skillbranch" rel="nofollow" target="_blank" title="Vk"><span class="ya-share2__badge"><span class="ya-share2__icon"></span><span class="ya-share2__counter"></span></span><span class="ya-share2__title">VK</span>
		                        </a>
		                                </li>
		                                <li class="ya-share2__item ">
		                                    <a class="ya-share2__link" href="https://www.youtube.com/c/SkillBranch" rel="nofollow" target="_blank" title="youtube"><span class="ya-share2__badge"><span class="ya-share2__icon youtube_icon_base64" ></span><span class="ya-share2__counter"></span></span><span class="ya-share2__title">YouTube</span>
		                        </a>
		                                </li>
		                            </ul>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 menu-wrap">
		                    <ul class="bottom-menu-list row">
		                        <li class="bottom-menu-list-item col-xs-6 col-sm-6 col-md-4 col-lg-3 pull-right">
		                            <a href="#enter" class="modal-window-open">Войти в команду</a>
		                        </li>
		                        <!--<li class="bottom-menu-list-item col-xs-6 col-sm-6 col-md-4 col-lg-3 pull-right">
		                            <a href="#spiker" class="modal-window-open">Стать спикером</a>
		                        </li>-->
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </div>
		</footer>
		<script>
		window.onload = function() {
		    var loader = document.getElementById('loader-wrap');
		    loader.parentNode.removeChild(loader);
		
		    function resizeHandler(e) {}
		    window.addEventListener('resize', resizeHandler);
		    var resizeEvent = new Event('resize');
		    window.dispatchEvent(resizeEvent);
		};
		</script>
		<script type="text/javascript" src="/js/vendor.min.js"></script>
		<script>
		$.getJSON('rev-manifest.json', function(manifest) {
		    var s = document.getElementsByTagName('link')[0];
		
		    var assetPath = function(src) {
		        src = src + '.min' + '.css'
		        return ['/css', manifest[src]].join('/');
		    };
		
		    ['vendor', 'main'].forEach(function(src) {
		        var el = document.createElement('link');
		        el.setAttribute('rel', 'stylesheet');
		        el.async = true;
		        el.href = assetPath(src);
		        s.parentNode.insertBefore(el, s);
		    });
		});
		</script>
		<script type="text/javascript" src="/js/main.min.js"></script>
		<script type="text/javascript" src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js" charset="utf-8"></script>
		<!-- Yandex.Share -->
		<script type="text/javascript" src="//yastatic.net/share2/share.js" charset="utf-8"></script>
		<script>
		    $(".trend-list-item").Chocolat({
		        'imageSize':'cover',
		        'enableZoom':false
		    });
		</script>
		<!-- Yandex.Metrika counter -->
		<script type="text/javascript">
		(function(d, w, c) {
		    (w[c] = w[c] || []).push(function() {
		        try {
		            w.yaCounter38622840 = new Ya.Metrika({
		                id: 38622840,
		                clickmap: true,
		                trackLinks: true,
		                accurateTrackBounce: true,
		                webvisor: true
		            });
		        } catch (e) {}
		    });
		
		    var n = d.getElementsByTagName("script")[0],
		        s = d.createElement("script"),
		        f = function() {
		            n.parentNode.insertBefore(s, n);
		        };
		    s.type = "text/javascript";
		    s.async = true;
		    s.src = "https://mc.yandex.ru/metrika/watch.js";
		
		    if (w.opera == "[object Opera]") {
		        d.addEventListener("DOMContentLoaded", f, false);
		    } else {
		        f();
		    }
		})(document, window, "yandex_metrika_callbacks");
		</script>
		<noscript>
		    <div><img src="https://mc.yandex.ru/watch/38622840" style="position:absolute; left:-9999px;" alt="" /></div>
		</noscript>
		<!-- /Yandex.Metrika counter -->
	</div>
	<script>
		// Я ХЗ КАК СДЕЛАТЬ ПО ДРУГОМУ, МИШ
	  $('.menu-item:eq(1) a').addClass('active')
	</script>
</body>
</html>
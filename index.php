<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
		<meta property="og:title" content="Skill Branch | Образовательное IT-сообщество" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://skill-branch.ru/" />
		<meta property="og:image" content="http://skill-branch.ru/img/skill-branch-img.jpg" />
		<meta property="og:description" content="Онлайн-платформа призванная помочь прокачать навыки мобильной разработки. Найти работу в соответствии с навыками и завязать знакомства в профессиональном кругу." />
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
 <div id="loader" style="position: fixed;top: 0;bottom: 0;right: 0;left: 0;z-index: 9999;background-color: #000;">
    </div>
	<img src="img/photo0000.png" class="img-out" alt="photo0000">
	<div id="login" class="modal-window">
		<a href="#" class="modal-window-close">Закрыть</a>

		<form action="#" method="POST" role="form" class="">

			<!-- for utm -->
			<input type="hidden" id="currentPage" value="start_page">
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
		<header>
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
					<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 menu-wrap menu-main-page pull-right">
						<ul class="menu">
							<li class="menu-item menu-item_login">
								<a href="http://account.skill-branch.ru/" class="link-button">Войти</a>
							</li>
							<li class="menu-item">
								<a href="#enter" class="modal-window-open">Войти в команду</a>
							</li>
							<!--<li class="menu-item">
								<a href="#spiker" class="modal-window-open">Стать спикером</a>
							</li>-->
							<li class="clear"></li>
						</ul>
					</div>	
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div id="content">
			<div class="wrap-container absolute">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 checkpoint">
					<aside class="nav-main nav-inviz" data-spy="affix" data-offset-top="0">
						<nav>
							<ul class="nav-main-list">
								<li class="nav-main-list-item">
									<a href="#block-1"><span>01</span></a>
								</li>
								<li class="nav-main-list-item">
									<a href="#block-2"><span>02</span></a>
								</li>
								<li class="nav-main-list-item">
									<a href="#block-3"><span>03</span></a>
								</li>
								<li class="nav-main-list-item">
									<a href="#block-4"><span>04</span></a>
								</li>
								<li class="nav-main-list-item">
									<a href="#block-5"><span>05</span></a>
								</li>
								<li class="nav-main-list-item">
									<a href="#block-6"><span>06</span></a>
								</li>

							</ul>
						</nav>
					</aside>
				</div>
				<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">

				</div>
			</div>

			<!-- Получай образование и строй карьеру в профессиональном IT-сообществе -->
			<section id="block-1">
				<div class="wrap-container">
					<div class="block-wrap row">
						<!-- <div class="bg-right"></div> -->
						<div class="bg-right video">
							<video class="video-src" loop="" preload="undefined" width="100%" height="100%" poster="img/bg.png" autoplay>
								<source src="video-background.webm" type='video/webm; codecs="vp8, vorbis"'>
								<source src="video-background.mp4" type="video/mp4">>
							</video>
						</div>
						<div class="bg-right opacity"></div>
						<div class="clear"></div>

						<div class="offer">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 offer-inner">
								<p class="title">Получай образование и строй карьеру в профессиональном IT-сообществе</p>
								<p>Выберите направление:</p>

								<div class="row">
									<ul class="links-list">
										<li class="col-xs-6 col-sm-3 col-md-3 col-lg-3 links-list-item">
											<a href="#trend" class="modal-window-open link-button nav-link" data-nav="iOS">iOS</a>
										</li>
										<li class="col-xs-6 col-sm-3 col-md-3 col-lg-3 links-list-item">
											<a href="/android" class="link-button nav-link" data-nav="Android">Android</a>
										</li>
										<li class="col-xs-6 col-sm-3 col-md-3 col-lg-3 links-list-item">
											<a href="/backend-middle" class="link-button nav-link"  data-nav="Backend">Backend</a>
										</li>
										<li class="col-xs-6 col-sm-3 col-md-3 col-lg-3 links-list-item">
											<a href="/ui-design-middle" class="link-button nav-link" data-nav="UI Design">UI Design</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clear"></div>

						<div class="free-help relative">
							<form action="#" method="POST" role="form" class="form fio phone mailphp">
								<input type="hidden" id="name" class="name" value="form1">

								<div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 text-wrap">
									<p>Бесплатная консультация</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 inputs-wrap">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="text" class="fio" name="fio" id="fio" class="form-control" value="" required="required" placeholder="Введите ваше имя" required/>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="tel" class="phone" name="phone" id="phone" class="form-control" value="" required="required" placeholder="Введите ваш телефон" required/>
									</div>
									<div class="clear"></div>
								</div>
								<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 button-wrap">
									<button type="submit" class="btn btn-primary link-button red">Жду звонка</button>
								</div>
								<div class="clear"></div>
							</form>
						</div>

						<div class="free-help fix">
							<form action="#" method="POST" role="form" class="form fio phone mailphp">
								<input type="hidden" id="name" class="name" value="form2">

								<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 logo-ico">
									<a href="#block-1" class="logo">
										<i></i>
									</a>
								</div>
								<div class="col-xs-2 col-sm-3 col-md-3 col-lg-3 text-wrap">
									<p>Бесплатная консультация</p>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-5 col-lg-5 inputs-wrap">
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="text" class="fio" name="fio" id="fio1" class="form-control" value="" required="required" placeholder="Введите ваше имя" required/>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 input-inner">
										<input type="tel" class="phone" name="phone" id="phone1" class="form-control" value="" required="required" placeholder="Введите ваш телефон" required/>
									</div>
									<div class="clear"></div>
								</div>
								<div class="col-xs-4 col-sm-3 col-md-3 col-lg-3 button-wrap">
									<button type="submit" class="btn btn-primary link-button red">Жду звонка</button>
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

			<!-- Образовательное IT­-сообщество Skill Branch -->
			<section id="block-2">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
							<p class="title">Образовательное IT­-сообщество Skill Branch</p>
							<p class="ps">Это онлайн­-платформа , призванная помочь вам получить знания и  прокачать навыки мобильной разработки, независимо от их уровня. Найти работу в соответствии с полученными навыками, а также завязать знакомства в своем профессиональном кругу</p>
						</div>
					</div>

					<div class="video-wrap row">
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 pull-right watch-this">
							<p>посмотрите видео о проекте</p>
						</div>
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xs-offset-1 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 video-inner">
							<div class="player-wrap">
								<div class="player-bg">
									<a href="#" class="start-play red"></a>
								</div>

								<div id="player">

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-- Преимущества -->
			<section id="block-3">
				<div class="wrap-container">
					<ul class="advantage-list row">
						<li class="col-xs-12 col-sm-11 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-1 col-md-offset-3 col-lg-offset-3 advantage-list-item first">
							<div class="row">
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ico-wrap">
									<i class="ico-1"></i>
								</div>

								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-wrap pull-right">
									<p class="title">IT - сообщество</p>
									<p>Заводите знакомства и обменивайтесь опытом с профессионалами и студентами в IT-­сообществе</p>
								</div>
							</div>
							<i class="dotted-line"></i>
						</li>
						<li class="col-xs-12 col-sm-11 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-1 col-md-offset-3 col-lg-offset-3 advantage-list-item second">
							<div class="row">
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ico-wrap pull-right">
									<i class="ico-2"></i>
								</div>

								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-wrap">
									<p class="title">Реальные проекты</p>
									<p>Полученные практические знания вы сможете успешно применять в реальных проектах</p>
								</div>
							</div>
							<i class="dotted-line-2"></i>
						</li>
						<li class="col-xs-12 col-sm-11 col-md-7 col-lg-7 col-xs-offset-0 col-sm-offset-1 col-md-offset-3 col-lg-offset-3 advantage-list-item">
							<div class="row">
								<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 ico-wrap">
									<i class="ico-3"></i>
								</div>

								<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 text-wrap pull-right">
									<p class="title">Стажировка и трудоустройство</p>
									<p>Успешно пройдя обучение, вы гарантировано получаете возможность стажировки и трудоустройства в отечественные и зарубежные IT-компании</p>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</section>

			<!-- Мы предлагаем -->
			<section id="block-4">
				<div class="wrap-container">

					<div class="why-we-wrap row">
						<div class="bg-right"></div>
						<div class="title-wrap row">
							<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
								<p class="title white">Мы предлагаем</p>
							</div>
						</div>

						<div class="why-we row">
							<div class="bg-left"></div>
							<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
								<ul class="why-me-list">
									<li class="why-me-list-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="ico-wrap">
											<i class="ico-3"></i>
										</div>
										<p class="title">Online образование</p>
										<p>Обучаем новому и помогаем совершенствоваться ученикам из любой точки мира</p>
									</li>
									<li class="why-me-list-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="ico-wrap">
											<i class="ico-4"></i>
										</div>
										<p class="title">Сертификат и портфолио</p>
										<p>Вы создаете вместе с нами ваше профессиональное портфолио и получаете сертификат подтверждающий знания</p>
									</li>
									<li class="why-me-list-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="ico-wrap">
											<i class="ico-2"></i>
										</div>
										<p class="title">HR сопровождение</p>
										<p>Наш отдел кадров помогает найти подходящие вакансии и трудоустроиться успешным выпускникам</p>
									</li>
									<li class="why-me-list-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
										<div class="ico-wrap">
											<i class="ico-1"></i>
										</div>
										<p class="title">Партнёры</p>
										<p>Мы сотрудничаем с ведущими IT­-компаниями, пополняющими штат своих сотрудников из рядов наших студентов</p>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<!-- <div class="partners-wrap row">
						<div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 partners-inner">
							<p class="mini-title">Партнёры</p>
							<div class="swiper-container partners">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
										<a href="#"><img src="img/partner1.png" alt="partner1" /></a>
									</div>
									<div class="swiper-slide">
										<a href="#"><img src="img/partner2.png" alt="partner2" /></a>
									</div>
									<div class="swiper-slide">
										<a href="#"><img src="img/partner3.png" alt="partner3" /></a>
									</div>
									<div class="swiper-slide">
										<a href="#"><img src="img/partner4.png" alt="partner4" /></a>
									</div>
									<div class="swiper-slide">
										<a href="#"><img src="img/partner1.png" alt="partner1" /></a>
									</div>
									<div class="swiper-slide">
										<a href="#"><img src="img/partner2.png" alt="partner2" /></a>
									</div>
									<div class="swiper-slide">
										<a href="#"><img src="img/partner3.png" alt="partner3" /></a>
									</div>
									<div class="swiper-slide">
										<a href="#"><img src="img/partner4.png" alt="partner4" /></a>
									</div>
								</div>

								<div class="control-wrap">
									<div class="pagination"></div>
								</div>
							</div>
						</div>
					</div> -->
				</div>
			</section>

			<!-- Отзывы -->
			<section id="block-5">
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

			<!-- Выберите направление -->
			<section id="block-6">
				<div class="wrap-container">
					<div class="title-wrap row">
						<div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 line-wrap">
							<i class="line"></i>
						</div>
						<div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-wrap">
							<p class="title">Выберите направление</p>
						</div>
					</div>

					<div class="trend-wrap row">
						<div class="col-xs-12 col-sm-11 col-md-11 col-lg-11 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 trend-inner">
							<ul class="trend-list">
								<li class="trend-list-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="trend-list-item-inner">
										<a href="#trend" class="modal-window-open nav-link" data-nav="iOS"></a>
										<div class="ico-wrap">
											<i class="ico-1"></i>
										</div>
										<p>iOS</p>
									</div>
								</li>
								<li class="trend-list-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="trend-list-item-inner">
										<a href="/android" class="" data-nav="Android"></a>
										<div class="ico-wrap">
											<i class="ico-2"></i>
										</div>
										<p>ANDROID</p>
									</div>
								</li>
								<li class="trend-list-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="trend-list-item-inner">
										<a href="/backend-middle" class="" data-nav="Backend"></a>
										<div class="ico-wrap">
											<i class="ico-3"></i>
										</div>
										<p>BACKEND</p>
									</div>
								</li>
								<li class="trend-list-item col-xs-12 col-sm-6 col-md-3 col-lg-3">
									<div class="trend-list-item-inner">
										<a href="/ui-design-middle" class="" data-nav="UI Design"></a>
										<div class="ico-wrap">
											<i class="ico-4"></i>
										</div>
										<p>UI DESIGN</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>

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
		    var loader = document.getElementById('loader');
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
		    <script src="./js/jquery.chocolat.js"></script>
		    <script>
		    $(".trend-list-item").Chocolat({
		        'imageSize':'cover',
		        'enableZoom':false
		    });
		</script>
		
		
		 <!-- <script src="./js/lightbox.js"></script>
		 <script>
		     lightbox.option({
		      'fitImagesInViewport': false
		    })
		 </script> -->
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
</body>
</html>
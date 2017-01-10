<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta property="og:title" content="Я иду на Бесплатный Интенсив по UI Design" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://skill-branch.ru/ui-design" />
    <meta property="og:image" content="http://skill-branch.ru/img/ui-soc-share.jpg" />
    <meta property="og:description" content="Всего за 30 дней я научусь создавать современные интерфейсы, а также узнаю про все тонкости разработки digital-продукта" />
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
    <!--<img src="img/photo0000.png" class="img-out" alt="photo0000">-->
    <div id="login" class="modal-window">
        <a href="#" class="modal-window-close">Закрыть</a>
        <form action="#" method="POST" role="form" class="">
            <!-- for utm -->
            <input type="hidden" id="currentPage" value="UI Design">
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
            <section id="block-1" class="page-offer ui-design">
                <div class="wrap-container">
                    <div class="block-wrap row">
                        <!-- <div class="bg-right"></div> -->
                        <div class="bg-right page design"></div>
                        <div class="bg-right opacity"></div>
                        <div class="clear"></div>
                        <div class="offer page">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 offer-inner">
                                <p class="underline-text">Бесплатный Интенсив по дизайну</p>
                                <p class="title">Профессия - UI Designer</p>
                                <p class="ps">Дата начала 16.11.2016</p>
                                <a href="#block-13" class="link-button red big non-correction">Начать обучение</a>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-8 menu-wrap ui-design">
                             <ul class="menu row">
                                <li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <a href="#trend" class="modal-window-open nav-link" data-nav="iOS">iOS</a>
                                </li>
                                <li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <!-- <a href="#" class="active" data-nav="Android">ANDROID</a> -->
                                    <!-- <a href="#trend" class="modal-window-open nav-link" data-nav="Android">ANDROID</a> -->
                                    <a href="/android" class="nav-link" data-nav="Android">ANDROID</a>
                                </li>
                                <li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <!-- <a href="#trend" class="modal-window-open nav-link" data-nav="Backend">BACKEND</a> -->
                                    <a href="/backend-middle" class="nav-link" data-nav="Backend">BACKEND</a>
                                </li>
                                <li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <a href="/ui-design-middle" class="active" data-nav="UI Design">UI DESIGN</a>
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
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4 active">
                                    <a href="#" class="nav-link" data-nav="UI Design Beginner"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-1"></i>
                                        </div>
                                        <p>Beginner Designer</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4 ">
                                    <a href="http://skill-branch.ru/ui-design-middle" class="nav-link" data-nav="UI Design Middle"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-2"></i>
                                        </div>
                                        <p>Middle Designer</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="#trend" class="modal-window-open nav-link" data-nav="UI Design Senior"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-3"></i>
                                        </div>
                                        <p>Senior Designer</p>
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
                                    <p class="title">Востребованность
                                        <br/>на рынке труда</p>
                                </li>
                                <li class="ap-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="ico-wrap">
                                        <i class="ico-2"></i>
                                    </div>
                                    <p class="title">Время освоения курса
                                        <br/>4 недели</p>
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
                            <p class="title">Спикер курса</p>
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
                                            <img src="/img/spikers/spiker02.jpg" alt="Роман Ли" />
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Роман Ли</p>
                                                <p class="position">Арт-директор</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="http://be.net/dabesss" target="_blank">
                                                            <i class="fa fa-behance" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p style="margin-bottom: 1em;">
                                                Ты видишь больше, чем все твои знакомые? Обращаешь внимание на красивые рекламные билборды и критикуешь безвкусную графику? Тебя впечатляют качественные сайты в первую очередь за их визуализацию, а при выборе приложения ты отдаешь предпочтение тому, у которого красивее иконка? Ты хочешь сделать этот мир более стильным, но пока не знаешь как? Поздравляю! В тебе живет дизайнер и я знаю как его активировать!
                                            </p>
                                            <p style="margin-bottom: 1em;">
                                                Я занимаюсь дизайном более 7 лет и в этом курсе мы вместе получим все необходимые знания для мощного старта в карьере одной из самых перспективных профессий на свете - UI дизайнера. Изучим все основы пользовательского взаимодействия. Поймем какие инструменты для этого существуют и как ими пользоваться. Теоретические знания подкрепим практикой и нарисуем свой первый интерфейс, который с гордостью разместим в своём портфолио!
                                            </p>
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
                    <div class="course-content-inner row">
                        <ul class="course-content-list">
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">01</p>
                                <div class="desc">
                                    <p class="title">Вводная часть</p>
                                    <p class="time">2 часа теории, 4 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <!-- <p>Описание структуры курса, предоставление ключей доступа к приватным репозиториям и личным кабинетам с обучающим контентом. Подготовка окружения. Организационные моменты. Ответы на вопросы.</p> -->
                                        <ul>
                                            <li>Базовая информация.</li>
                                            <li>Знакомство.</li>
                                            <li>Рассказ спикера о своем опыте.</li>
                                            <li>Основы digital-дизайна.</li>
                                            <li>Что такое UI.</li>
                                            <li>Отличие UI от UX.</li>
                                            <li>Тренды.</li>
                                            <li>Как работать на перспективу.</li>
                                            <li>Домашнее задание.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">02</p>
                                <div class="desc">
                                    <p class="title">Этапы разработки проекта</p>
                                    <p class="time">2 часа теории, 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <!-- <p>Общие принципы построения архитектуры проекта. Выделение ключевых бизнес сущностей.  Абстракция над основными бизнес сущностями.  Разбивка на слои Model View Presenter.  Декларирование ключевых интерфейсов.</p> -->
                                        <ul>
                                            <li>Архитектура проекта.</li>
                                            <li>Иерархия данных.</li>
                                            <li>Принципы работы в digital-агентствах.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">03</p>
                                <div class="desc">
                                    <p class="title">Из чего состоит хороший интерфейс</p>
                                    <p class="time">2 часа теории, 4 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Типографика: Что отличает хороший дизайн от плохого.</li>
                                            <li>Особенности работы с веб-шрифтами.</li>
                                            <li>Подбор шрифтовых пар.</li>
                                            <li>Модульные сетки.</li>
                                            <li>Как выстраивать системность при разработке UI дизайна.</li>
                                            <li>Кнопки, формы, цвета.</li>
                                            <li>Практика.</li>
                                            <li>Домашнее задание.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">04</p>
                                <div class="desc">
                                    <p class="title">Инструменты</p>
                                    <p class="time">2 часа теории, 4 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Какие инструменты используются для прототипирования.</li>
                                            <li>Где и как создается дизайн.</li>
                                            <li>Программы и сервисы для правильной презентации.</li>
                                            <li>Практика.</li>
                                            <li>Домашнее задание - рисуем наш первый прототип.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">05</p>
                                <div class="desc">
                                    <p class="title">Рисуем интерфейс</p>
                                    <p class="time">2 часа теории, 4 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Как хороший интерфейс решает задачу клиента.</li>
                                            <li>Практика.</li>
                                            <li>Домашнее задание.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">06</p>
                                <div class="desc">
                                    <p class="title">Заключительная часть</p>
                                    <p class="time">2 часа теории, 3 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Подводим итоги курса.</li>
                                            <li>Советы по работе с клиентами.</li>
                                            <li>Как оформить и поддерживать портфолио.</li>
                                            <li>Какие выбирать площадки.</li>
                                        </ul>
                                    </div>
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
            <section id="block-6" class="stack-wrap ui-design">
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
                                <img src="/img/tech/tech-09.svg" alt="">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/tech/tech-10.svg" alt="">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/tech/tech-11.svg" alt="">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/tech/tech-12.png" alt="">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/tech/tech-13.svg" alt="">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/tech/tech-14.png" alt="">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/tech/tech-15.svg" alt="">
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
                            <p class="title">Как проходит онлайн-обучение</p>
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
                                        <div class="img-wrap" style="background: url('img/mac-slider/06.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/mac-slider/07.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/mac-slider/08.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <!-- <div class="swiper-slide">
                                    <div class="img-wrap" style="background: url('img/backend/macbook/05.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                </div> -->
                                </div>
                            </div>
                        </div>
                        <ul class="how-do-it-list row">
                            <li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-1"></i>
                                </div>
                                <p class="title">Записи всех занятий</p>
                                <p>Весь учебный материал остается в свободном доступе. Вы всегда можете повторить пройденное</p>
                            </li>
                            <li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-2"></i>
                                </div>
                                <p class="title">Работа в команде</p>
                                <p>В чате с коллегами решаете актуальные задачи. Учитесь работать в коллективе.</p>
                            </li>
                            <li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-3"></i>
                                </div>
                                <p class="title">Домашние задания</p>
                                <p>Все задания с контролем выполнения и дедлайнами. Вы обучаетесь дисциплине выполнения работы.</p>
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
                    <div class="portfolio-inner row" style="position: relative;">
                        <div class="iphone-wrap row">
                            <div class="iphone-inner col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                <div class="iphone-bg-wrap min">
                                    <div class="top-control-wrap">
                                        <a href="#" class="arrow-left"></a>
                                        <a href="#" class="arrow-right"></a>
                                    </div>
                                    <div class="iphone-bg"></div>
                                    <div class="swiper-container iphone">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="img-wrap" style="background: url('img/design/UI1.jpg') no-repeat transparent 50% 50%; top: 0px; background-size: cover"></div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="img-wrap" style="background: url('img/design/UI2.jpg') no-repeat transparent 50% 50%; top: 0px; background-size: cover"></div>
                                            </div>
                                            <!--<div class="swiper-slide">
                                            <div class="img-wrap" style="background: url('img/android/3.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="img-wrap" style="background: url('img/android/4.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
                                        </div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iphone-text fix col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                                <p class="title">Создаете современный и удобный интерфейс</p>
                                <p>За время обучения, вы создаете Интерфейс мобильного приложения. Вы можете демонстрировать его в качестве потфолио.</p>
                            </div>
                        </div>
                        <div class="sertificat min col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <img class="img-cert" src="img/cert-card-ui.jpg" alt="Сертификат" />
                        </div>
                        <div class="sertificat-text col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-2 col-md-offset-1 col-lg-offset-2">
                            <p class="title">Получаете сертификат</p>
                            <p>Лучшие выпускники получат бюджетные места на продвинутом курсе Middle Designer</p>
                        </div>
                        <div class="clear"></div>
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
                                    <p>Junior UI-Designer</p>
                                </div>
                            </div>
                            <div class="resume-middle">
                                <div class="main-info col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="title">Профессиональные качества</p>
                                    <ul>
                                        <li>Выполнение поставленных задач точно в срок. Соблюдение дедлайнов</li>
                                        <li>Знание принципов разработки UI/UX</li>
                                        <li>Photoshop, Sketch</li>
                                        <li>Прототипирование</li>
                                        <li>Умение работать в команде</li>
                                        <li>Чувство вкуса</li>
                                        <li>Работа с типографикой</li>
                                        <li>UI Design</li>
                                        <li>Понимание принципов работы в digital-агентстве</li>
                                    </ul>
                                </div>
                                <div class="money-info-wrap col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1 pull-right">
                                    <div class="money-info">
                                        <p class="ps">Ожидаемая зарплата</p>
                                        <p class="sum">от <span>50 000 <i class="fa fa-rub" aria-hidden="true"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="resume-bottom">
                                <p>Ключевые навыки:</p>
                                <ul class="skill-list">
                                    <li class="skill-list-item">Прототипирование</li>
                                    <li class="skill-list-item">UI/UX</li>
                                    <li class="skill-list-item">Photoshop</li>
                                    <li class="skill-list-item">Sketch</li>
                                    <li class="skill-list-item">UI Design</li>
                                    <li class="skill-list-item">Веб-Дизайн</li>
                                    <li class="skill-list-item">Гайдлайны</li>
                                    <li class="skill-list-item">Material Design</li>
                                    <li class="skill-list-item">Flat</li>
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
            <section id="block-10" class="result-wrap block-10-backendfix">
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
                            <li class="result-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-1"></i>
                                </div>
                                <p>4 недели обучения и реальной практики</p>
                            </li>
                            <li class="result-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-2"></i>
                                </div>
                                <p>6 вебинаров в записи</p>
                            </li>
                            <li class="result-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-3"></i>
                                </div>
                                <p>Домашние задания для закрепления пройденного материала</p>
                            </li>
                            <li class="result-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-4"></i>
                                </div>
                                <p>Презентации и методические пособия с ссылками на практические кейсы</p>
                            </li>
                            <li class="result-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-5"></i>
                                </div>
                                <p>Доступ к мастер­-классам и бонусному контенту</p>
                            </li>
                            <li class="result-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-6"></i>
                                </div>
                                <p>Сообщество для общения с коллегами и преподавателями</p>
                            </li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </section>
            <!-- Запись на обучение -->
            <section id="block-13" class="entry-training-wrap ui-design">
                <div class="bg-opacity"></div>
                <div class="wrap-container">
                    <div class="entry-training-inner row">
                        <div class="left-part col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                            <div class="without-discount">
                                <p class="ps">Цена без скидки:</p>
                                <p class="strike-text">16 900 <i class="fa fa-rub" aria-hidden="true"></i></p>
                            </div>
                            <div class="with-discount-wrap row">
                                <div class="with-discount-inner col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="with-discount">
                                        <p class="ps">К оплате:</p>
                                        <p class="ps" style="font-size:2.4em; text-transform: uppercase; margin-top: 40px;">Бесплатно!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="title" style="font: 700 40px/44px Muller,sans-serif;">Запись на бесплатное обучение</p>
                            <p class="ps">дата начала 16.11.2016</p>
                            <form action="#" method="POST" role="form" class="form mailphp5">
                                <input type="hidden" id="name" class="name" value="form7">
                                <input type="hidden" id="form-title" class="form-title" value="UI Design Junior">
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
                                        <input type="tel" class="form-control phone" id="phone" name="phone" placeholder="Ваш номер телефона" required>
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
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 share-wrap" style="text-align:center">
                                        <div class="ya-share2" data-services="facebook,vkontakte,twitter" data-image="http://skill-branch.ru/img/ui-soc-share.jpg" data-url="http://skill-branch.ru/ui-design" data-description="Всего за 30 дней я научусь создавать современные интерфейсы, а также узнаю про все тонкости разработки digital-продукта" data-title="Я иду на Бесплатный Интенсив по UI Design"></div>
                                    </div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
        $('.menu-item:eq(3) a').addClass('active')
        </script>
</body>

</html>
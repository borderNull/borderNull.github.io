<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta property="og:title" content="Я иду на Middle курс по Node.js backend & React" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://skill-branch.ru/backend-middle" />
    <meta property="og:image" content="http://skill-branch.ru/img/nodejs-image.jpg" />
    <meta property="og:description" content="В течении 4-х месяцев будем изучать современные технологии, подходы и лучшие практики для разработки - гибких, масштабируемых, высоконагруженных Web-приложений" />
    <title>Skill Branch | Образовательное IT-сообщество</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

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
            <input type="hidden" id="currentPage" value="Backend-Middle">
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
                        <div class="bg-right page backend"></div>
                        <div class="bg-right opacity"></div>
                        <div class="clear"></div>
                        <div class="offer page">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 offer-inner">
                                <p>Профессия</p>
                                <p class="title">Node.JS & React разработчик</p>
                                <p class="ps">Разрабатываем на самых передовых WEB-технологиях</p>
                                <p class="ps pps">Дата начала 11.02.2017</p>
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
                                    <!-- <a href="#" class="active" data-nav="Android">ANDROID</a> -->
                                    <!-- <a href="#trend" class="modal-window-open nav-link" data-nav="Android">ANDROID</a> -->
                                    <a href="/android" class="nav-link" data-nav="Android">ANDROID</a>
                                </li>
                                <li class="menu-item col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <!-- <a href="#trend" class="modal-window-open nav-link" data-nav="Backend">BACKEND</a> -->
                                    <a href="/backend-middle" class="active" data-nav="Backend">BACKEND</a>
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
                                    <a href="http://skill-branch.ru/backend" class="nav-link" data-nav="Backend Beginner"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-1"></i>
                                        </div>
                                        <p>Node.Js & React </p>
                                        <p>Junior Developer</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4 active">
                                    <a href="#" class="nav-link" data-nav="Backend Middle"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-2"></i>
                                        </div>
                                        <p>Node.Js & React </p>
                                        <p>Middle Developer</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="#trend" class="modal-window-open nav-link" data-nav="Backend Senior"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-3"></i>
                                        </div>
                                        <p>Node.Js & React </p>
                                        <p>Senior Developer</p>
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
                                        <br>на рынке труда</p>
                                </li>
                                <li class="ap-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <div class="ico-wrap">
                                        <i class="ico-2"></i>
                                    </div>
                                    <p class="title">Время освоения курса
                                        <br>4 месяца</p>
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
                                            <img src="https://pp.vk.me/c630220/v630220029/cf5b/XN912Re_pdg.jpg" alt="Игорь Суворов" />
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Игорь Суворов</p>
                                                <p class="position">Программист-предприниматель</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="http://vk.com/igor.suvorov" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                    <li class="soc-links-item">
                                                        <a href="http://github.com/isuvorov" target="_blank">
                                                            <i class="fa fa-github" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p style="margin-bottom: 1em;">
                                                Всем привет,</p>
                                            <p style="margin-bottom: 1em">Я занимаюсь веб-программированием уже более 8 лет, за это время я успел попробовать множество языков, архитектур и фреймворков. В итоге опыт привел меня к JavaScript. JavaScript мир сейчас очень быстро развивается: JS на клиенте, JS на сервере, JS в консоли и даже JS в мобайле.</p>
                                            <p style="margin-bottom: 1em">Каждый день я занимаюсь разработкой бекэндов для мобильных приложений и изоморфных клиент-сервеных приложений с использованием JavaScript и React. На своей практике я повидал множетсво айсбергов, которые загубили хорошие проекты и стартапы. В результате я выбрал для себя набор технологий и библиотек, принципы программирования и паттерны кода. Весь этот стек знаний позволяют мне программировать лучше, быстрее и надежнее.</p>
                                            <p style="margin-bottom:1em">И я хочу поделиться этими знаниями с Вами.</p>
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
                    <div class="watch-on-youtube col-xs-12 col-sm-5 col-md-5 col-lg-5 col-xs-offset-0 col-sm-offset-5 col-md-offset-5 col-lg-offset-5">
                        <div class="ico-wrap">
                            <a href="https://www.youtube.com/playlist?list=PLVFlo87bKU8KuovXhT3e1pk0lZNMoOK-e" target="_blank"><i class="ico"></i></a>
                        </div>
                        <div class="desc">
                            <p>Посмотрите видео</p>
                            <a href="https://www.youtube.com/playlist?list=PLVFlo87bKU8KuovXhT3e1pk0lZNMoOK-e" class="link" target="_blank">Бесплатный DEV-Интенсив</a>
                        </div>
                    </div>
                    <div class="course-content-inner row">
                        <ul class="course-content-list">
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">01</p>
                                <div class="desc">
                                    <p class="title">Старт</p>
                                    <p class="time">1 час теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <!-- <p>Описание структуры курса, предоставление ключей доступа к приватным репозиториям и личным кабинетам с обучающим контентом. Подготовка окружения. Организационные моменты. Ответы на вопросы.</p> -->
                                        <ul>
                                            <li>Введение, Знакомство.</li>
                                            <li>Описание структуры курса, организационные моменты.</li>
                                            <li>Обзор инструментов.</li>
                                            <li>Ответы на вопросы.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">02</p>
                                <div class="desc">
                                    <p class="title">JavaScript</p>
                                    <p class="time">2 часа теории
                                        <!-- , 4 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <!-- <p>Общие принципы построения архитектуры проекта. Выделение ключевых бизнес сущностей.  Абстракция над основными бизнес сущностями.  Разбивка на слои Model View Presenter.  Декларирование ключевых интерфейсов.</p> -->
                                        <ul>
                                            <li>Как писать JS код без боли.</li>
                                            <li>Архитектура и алгоритмы в JS.</li>
                                            <li>ES6 паттерны</li>
                                            <li>Promise.all, Promise.props. Promise.waterfall</li>
                                            <li>Lodash</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">03</p>
                                <div class="desc">
                                    <p class="title">Компоненты React</p>
                                    <p class="time">2 часа теории
                                        <!-- , 5 часов практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>React</li>
                                            <li>Компоненты. Глупые компоненты</li>
                                            <li>Жизненный цикл компонента</li>
                                            <li>propTypes, refs.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">04</p>
                                <div class="desc">
                                    <p class="title">Умные Компоненты</p>
                                    <p class="time">2 часа теории
                                        <!-- , 4 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Умные компоненты</li>
                                            <li>Связь между компонентами. Context.</li>
                                            <li>Работа с формами</li>
                                            <li>2-way binding.</li>
                                            <li>React Dev Tools.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">05</p>
                                <div class="desc">
                                    <p class="title">React app</p>
                                    <p class="time">2 часа теории
                                        <!-- , 8 часов практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>React приложение, initial state приложения.</li>
                                            <li>Клиентский роутинг. Universal Router.</li>
                                            <li>Запросы на сервер, получение данных, работа с промежуточными состояниями.</li>
                                            <li>Обработка ошибок.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">06</p>
                                <div class="desc">
                                    <p class="title">React библиотеки</p>
                                    <p class="time">2 часа теории
                                        <!-- , 6 часов практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Применение библиотек.</li>
                                            <li>react-bootstrap.</li>
                                            <li>react-icons.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">07</p>
                                <div class="desc">
                                    <p class="title">React frameworks</p>
                                    <p class="time">2 часа теории
                                        <!-- , 16 часов практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Обзор высокоуровневых клиентских фреймворков. Разбор преимуществ и недостатков.
                                            </li>
                                            <li>Flux.
                                            </li>
                                            <li>Redux.
                                            </li>
                                            <li>MobX.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">08</p>
                                <div class="desc">
                                    <p class="title">MobX</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Глубинное погружение в архитектуру MobX.</li>
                                            <li>Observable.</li>
                                            <li>Stores.</li>
                                            <li>Provider.</li>
                                            <li>Inject.</li>
                                            <li>Redux Dev tools.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">09</p>
                                <div class="desc">
                                    <p class="title">Тестирование</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Тестировние компонентов: Storybook, Enzyme.</li>
                                            <li>Автоматизированные тестирование серверного API.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">10</p>
                                <div class="desc">
                                    <p class="title">Api Server</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Express.js.</li>
                                            <li>Версионируемый Api Server.
                                            </li>
                                            <li>Swagger.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">11</p>
                                <div class="desc">
                                    <p class="title">Express библиотеки</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Passport.js</li>
                                            <li>oAuth</li>
                                            <li>Интернационализация на сервере и клиенте. React-intl</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">12</p>
                                <div class="desc">
                                    <p class="title">GraphQL</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>GraphQL: модели, схемы, запросы, мутации</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">13</p>
                                <div class="desc">
                                    <p class="title">Админка</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Cоздание административной части приложения используя редакторы JSON-Schema</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">14</p>
                                <div class="desc">
                                    <p class="title">Наследование приложений</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Концепция наследнования приложений.</li>
                                            <li>Наследование серверных приложений, React компонентов, CSS.</li>
                                            <li>Сборка через Webpack.</li>
                                            <li>Сборка проекта как библиотеки.</li>
                                            <li>Публикация в NPM.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">15</p>
                                <div class="desc">
                                    <p class="title">Изоморфность</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Клиент-серверная изоморфоная архитектура.</li>
                                            <li>Изоморфные кейсы и проблемы.</li>
                                            <li>Изоморфоные модели.</li>
                                            <li>Валидация. Асинхронные валидаторы.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">16</p>
                                <div class="desc">
                                    <p class="title">Командная работа</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Коллаборация.</li>
                                            <li>Работа в команде.</li>
                                            <li>Разделение кода. Управление кодом.</li>
                                            <li>GIT, GIT Merge.</li>
                                            <li>Continues integration.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">17</p>
                                <div class="desc">
                                    <p class="title">Deployment</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Подготовка к деплою. Заливка на сервер. Мониторинг.</li>
                                            <li>Автоматизированный Deploy.</li>
                                            <li>Настройка webpack на production сборку.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">18</p>
                                <div class="desc">
                                    <p class="title">Финиш</p>
                                    <p class="time">1 час теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Завершение</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <div class="desc">
                                    <p class="title">FAQ. Часто задаваемые вопросы</p>
                                    <!-- <p class="time">2 часа теории, 2 часа практики</p> -->
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <span>Какими знаниями я должен обладать, для того, чтобы эффективно пройти курс?</span>
                                        <ul>
                                            <li>Знание синтаксиса JavaScript.</li>
                                            <li>Понимание основ Node.js и принципы работы Express.js</li>
                                            <li>Понимание основ React</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <div class="desc">
                                    <p class="title">Можно что нибудь посмотреть, послушать или почитать для того, чтобы подготовиться?</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li style="z-index:999;">Наш обзорный курс <strong><a href="https://www.youtube.com/playlist?list=PLVFlo87bKU8KuovXhT3e1pk0lZNMoOK-e"></strong>Node.js & React</a>
                                            </li>
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
                                <img src="/img/backend/logos/1.png" alt="ES6">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/2.png" alt="Babel">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/3.png" alt="Node.js">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/4.png" alt="npm">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/5.png" alt="Express.js">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/6.png" alt="MongoDB">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/7.png" alt="Mongoose">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/8.png" alt="React.js">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/9.png" alt="Webpack">
                            </li>
                            <li class="stack-list-item">
                                <img src="/img/backend/logos/10.png" alt="Socket.io">
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
                                        <div class="img-wrap" style="background: url('img/backend/macbook/studying1.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/backend/macbook/studying2.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/backend/macbook/studying3.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/backend/macbook/studying4.png') no-repeat transparent 50% 50%; background-size: cover"></div>
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
                                <p>Весь учебный материал остается у вас в свободном доступе. Вы всегда можете повторить пройденное.
                                </p>
                            </li>
                            <li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-2"></i>
                                </div>
                                <p class="title">Работа в команде</p>
                                <p>В чате с коллегами решаете актуальные задачи. Учитесь командой разработке.</p>
                            </li>
                            <li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-3"></i>
                                </div>
                                <p class="title">Домашние задания</p>
                                <p>Все задания с контролем выполнения и дедлайнами. Вы обучаетесь дисциплине написания кода.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="block-8" class="how-do-it-wrap imac-wrap">
                <div class="wrap-container" style="position:relative;">
                    <div class="title-wrap row">
                        <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
                            <i class="line"></i>
                        </div>
                        <div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
                            <p class="title">Вашe будущее портфолио и сертификат</p>
                        </div>
                    </div>
                    <div class="cert-middle">
                        <img class="cert-mini__img" src="../img/certmiddle Node.js & React.js.png">
                    </div>
                    <ul class="how-do-it-list row block-8-1">
                        <li class="how-do-it-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3 desktop-only" style="text-align: left">
                            <div class="swiper__arrows ">
                                <a href="#" class="swiper__arrow-left"></a>
                                <a href="#" class="swiper__arrow-right"></a>
                            </div>
                        </li>
                        <li class="how-do-it-list-item certificate-text-item col-xs-12 col-sm-3 col-md-3 col-lg-3">
                            <p class="title">Получаете сертификат</p>
                            <p>По прохождению обучения вам выдается сертификат. С ним вы подтверждаете свои навыки и умения.</p>
                        </li>
                        <li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            <p class="title">Создаем высоконагруженный API</p>
                            <p>За время обучения, вы создаете высоконагруженный сервис, адаптированный под работу с мобильными технологиями. А так же систему администрирования для него.</p>
                            <p>Вы можете демонстрировать его в качестве портфолио.</p>
                        </li>
                        <li class="how-do-it-list-item col-xs-12 col-sm-3 col-md-3 col-lg-3 desktop-only" style="text-align: left">
                            <img src="../img/arrow1.png" style="position:absolute; top: 86px;">
                        </li>
                    </ul>
                    <div class="row desktop-only">
                        <div style="position: relative;">
                            <div class="mockup mockup_type_imac">
                                <div class="mockup__bg">
                                </div>
                                <!-- <div class="mockup_content"> -->
                                <div class="swiper-container imac mockup__content swiper-container-horizontal">
                                    <div class="swiper-wrapper" style="transform: translate3d(-978px, 0px, 0px); transition-duration: 0ms;">
                                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="0" style="width: 978px;">
                                            <div class="img-wrap" style="background: url('img/backend/imac/01.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="1" style="width: 978px;">
                                            <div class="img-wrap" style="background: url('img/backend/imac/02.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="2" style="width: 978px;">
                                            <div class="img-wrap" style="background: url('img/backend/imac/03.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                        </div>
                                        <div class="swiper-slide" data-swiper-slide-index="3" style="width: 978px;">
                                            <div class="img-wrap" style="background: url('img/backend/macbook/01.png') no-repeat transparent 50% 50%; background-size: cover"></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <div class="mockup__clearfix">
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
                                    <p>Node.JS & React разработчик</p>
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
                                        <p class="sum">от <span>120 000 <i class="fa fa-rub" aria-hidden="true"></i></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="resume-bottom">
                                <p>Ключевые навыки:</p>
                                <ul class="skill-list">
                                    <li class="skill-list-item">ES6</li>
                                    <li class="skill-list-item">Node.js</li>
                                    <li class="skill-list-item">Express.js</li>
                                    <li class="skill-list-item">MongoDB</li>
                                    <li class="skill-list-item">React.js</li>
                                    <li class="skill-list-item">Webpack</li>
                                    <li class="skill-list-item">Websockets</li>
                                    <li class="skill-list-item">Rest API</li>
                                    <li class="skill-list-item">Git</li>
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
                                <a href="#" class="arrow-left swiper-button-disabled inviz"></a>
                                <a href="#" class="arrow-right"></a>
                            </div>
                            <div class="swiper-container review swiper-container-horizontal">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide swiper-slide-active" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo022.jpg" alt="Роман Барлос">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Роман Барлос</p>
                                                <p class="position">Senior .NET Developer в компании ООО "ИТМ"</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="http://vk.com/darkgenius" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Спасибо команде SkillBranch за отличный курс по Node.js и React. Эти технологии сейчас востребованы - знания, полученные на курсе, несомненно найдут применение. Спикер курса выжал максимум из доступного времени и смог доходчиво и с энтузиазмом рассказать об основных технологиях и продемонстрировать их применение на практике. Рейтинговая система и активное обсуждение задач участниками на канале курса сделали обучающий процесс еще более увлекательным и интересным. Считаю проект SkillBranch наиболее перспективным в сегменте русскоязычных образовательных IT-ресурсов. Желаю его команде дальнейшего развития и творческих успехов!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo020.jpg" alt="Евгений Некрасов">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Евгений Некрасов</p>
                                                <p class="position">Ведущий разработчик в компании NVisionGroup(C#, WCF, Dynamics AX)</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/NekrasovEV" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>4 недели Intensive по Node.js &React прошли быстро и очень продуктивно. На курсе были рассмотрены современные техники по работе с Node.js., разобраны необходимые модули. Много узнал о возможностях Webpack, в курсе использовались современные ES-2015 синтаксис. Очень понравилась система тестирования, которая проверяла домашние задания online!</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo021.jpg" alt="Константин Лоскутов">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Константин Лоскутов</p>
                                                <p class="position">Веб-разработчик с прошлого века, фрилансер</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://www.linkedin.com/in/constantin-loskutov" target="_blank">
                                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>С первого дня, незаметно для себя ты погружаешься в мир коллективной разработки. Ты уже не одиночка. А нарастающий шквал требований и задач - это мотивация к самостоятельному повышению уровня. Всего месяц - и ты сам не заметил как прокачал свой SKILL! На это же раньше никогда не хватало времени?! Когда? Как? Да, вот, только что... месяц пролетел и ты скучаешь по напряженному режиму, и теперь точно знаешь - ты сможешь работать в любой современной команде</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo016.jpg" alt="Александр Поспелов">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Александр Поспелов</p>
                                                <p class="position">Начинающий разработчик</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/id956935" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Мой уровень - новичок, а еще точнее - за три недели до курса я даже не знал, что такое Java Skript. Благодаря курсу (о, боже!), я написал несколько серверных приложений. Узнал, что такое полифилы, миделвары, регулярные выражения, роуты, бабель и другое. Разные уровни сложности в задачах - хорошая идея! Чтобы выполнить высший уровень приходилось попотеть. Но тут выручает чат в Telegram - дружественная атмосфера, все помогают друг другу, подсказывают. Так и родилась небольшая тусовка NODE.JS Skillbranch.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo024.jpg" alt="Сидоров Александр">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Сидоров Александр</p>
                                                <p class="position">Руководитель, сертифицированный тренер Bitrix24
                                                </p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/sidorov_av" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Выражаю благодарность Игорю Суворову и всей команде SkillBranch, за отличный курс по Node.JS. Много информации без лишней воды, реальные инструменты и интересные примеры (сервис с покемонами в частности). Сильное комьюнити, в котором много хороших умных людей. Курсом доволен. Рекомендую всем: будет сложно и интересно.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo017.jpg" alt=" Андрей Карякин">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author"> Андрей Карякин</p>
                                                <p class="position">Full-stack WEB-разработчик c 2006 года</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://ru.linkedin.com/in/bi2o2t" target="_blank">
                                                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Я почерпнул для себя много интересных моментов. Несмотря на то, что с JavaScript знаком давно, серьезных вещей на нем писать не доводилось, не считая сложных форм (до нескольких десятков связанных полей на jQuery). Теперь я на один шаг ближе к своей цели - полноценно освоить Full-stackJavaScript программирование. И большие надежды возлагаю на продвинутый курс. Лекции были достаточно информативными. И очень хорошо то, что после лекций конечный код выкладывался в открытый доступ.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo023.jpg" alt="Сергей Шумаков">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Сергей Шумаков</p>
                                                <p class="position">Фрилансер</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/id82198318" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>После пары занятий я поменял своё отношение к тренду online образования. Несмотря на то, что наша группа была "первопроходцами", меня поразил такой подход. Ребята из команды SkillBranch смогли замотивировать разработчиков всех уровней! Нестандартный подход к практическим занятиям, актуальный стек технологий, лояльное JS-сообщество и вдогонку стартер кит, разработанный этой компанией - это лишь малая часть того, что я получил на курсе. Моей целью было просто "пощупать" JavaScript и познать сильные и слабые стороны Node.js, а получилось так, что буду переносить некоторые свои проекты на стек технологий, что мы проходили в этом курсе.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo019.jpg" alt="Дмитрий Горнак">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Дмитрий Горнак</p>
                                                <p class="position">Веб-разработчик
                                                </p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/id284144440" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Благодаря курсу я смог заполнить многие пробелы в знании принципов работы Node и React. Сначала я испугался теории, но, приступив к практике, я был в восторге! Всё стало ясно и понятно: просмотр лекций в записи и помощь преподавателя всегда помогают решить самые сложные задачи. Командой SkillBranch была проделана огромная работа.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo018.jpg" alt="Глеб Чабанюк">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Глеб Чабанюк</p>
                                                <p class="position">Инженер систем контроля и управления доступом в компании Теорема Телеком (Санкт-Петербург)
                                                </p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/empas" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Я несколько раз пытался проходить ускоренные курсы, но только Intensive замотивировал заковыристыми задачами и дедлайнами окунуться в тему. Спикер рассказывал кратко и по делу. На то он и интенсивный курс. Боюсь представить, сколько времени пришлось бы убить на самостоятельное изучение данных материалов, если бы не было бэкграунда по ноду и экспрессу.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-wrap">
                                    <div class="pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Наши друзья -->
            <section id="block-12" class="friends-wrap block-12-backendfix">
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
                                <img src="img/backend/logos/3.png" alt="ES6">
                            </li>
                            <li class="friends-list-item">
                                <img src="img/backend/logos/6.png" alt="Mongo.db">
                            </li>
                            <li class="friends-list-item">
                                <img src="img/backend/logos/8.png" alt="React">
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
                                <p class="strike-text">26 900 <i class="fa fa-rub" aria-hidden="true"></i></p>
                            </div>
                            <div class="with-discount-wrap row">
                                <div class="with-discount-inner col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="with-discount">
                                        <p class="ps" style="margin-bottom:5px;">Цена со скидкой 30%</p>
                                        <p class="ps" style="font: 700 50px/52px Muller,sans-serif; text-transform: uppercase; margin-top: 0;">18 900 <i class="fa fa-rub" aria-hidden="true"></i></p>
                                        <p class="ps">до 31.12.2016</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="title" style="font: 700 40px/44px Muller,sans-serif;">Запись на обучение</p>
                            <p class="ps">дата начала 11.02.2017</p>
                            <form action="#" method="POST" role="form" class="form mailphp5">
                                <input type="hidden" id="name" class="name" value="form7">
                                <input type="hidden" id="form-title" class="form-title" value="Backend Middle">
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
                                        <div class="ya-share2" data-services="facebook,vkontakte,twitter" data-image="http://skill-branch.ru/img/nodejs-image.jpg" data-url="http://skill-branch.ru/backend-middle.html" data-url:facebook="http://skill-branch.ru/backend-middle.html" data-description="В течении 4-х месяцев будем изучать современные технологии, подходы и лучшие практики для разработки - гибких, масштабируемых, высоконагруженных Web-приложений" data-title="Я иду на Midlle курс по Node.js & React"></div>
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
        $('.menu-item:eq(2) a').addClass('active')
        </script>
</body>

</html>
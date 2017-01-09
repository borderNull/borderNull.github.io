<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta property="og:title" content="Я иду на курс Middle UI Designer" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://skill-branch.ru/ui-design-middle" />
    <meta property="og:image" content="http://skill-branch.ru/img/ui-soc-share.jpg" />
    <meta property="og:description" content="В течении 4-х месяцев буду учиться создавать современные интерфейсы, а также узнаю про все тонкости разработки digital-продукта" />
    <title>Skill Branch | Образовательное IT-сообщество</title>
    
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    
     <link href="./css/chocolat.css" rel="stylesheet">
    <!--  <link rel="stylesheet" href="./css/lightbox.css"> -->


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
                                <p class="title" style="margin-top:60px;">Профессия - UI Designer</p>
                                <p class="ps">Дата начала 19.02.2017</p>
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
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="/ui-design" class="nav-link" data-nav="Beginner UI Designer"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-1"></i>
                                        </div>
                                        <p>Beginner </p>
                                        <p>UI Designer</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4 active">
                                    <a href="#" class="nav-link" data-nav="Middle UI Designer"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-2"></i>
                                        </div>
                                        <p>Middle </p>
                                        <p>UI Designer</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <a href="#trend" class="modal-window-open nav-link" data-nav="Senior UI Designer"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <i class="ico-3"></i>
                                        </div>
                                        <p>Senior </p>
                                        <p>UI Designer</p>
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
                                                В эпоху цифровых технологий профессия дизайнера интерфейсов перешла на новый уровень значимости. Успех выпускаемого продукта во многом зависит от UI-дизайнера. Однако, невозможно создать что-то по-настоящему стоящее, не пройдя долгий тернистый путь становления дизайнера. В нашем курсе мы собрали только те знания, которые помогут погрузиться в среду, научиться рисовать интерфейсы и подходить к решению задач комплексно и на профессиональном уровне. Мы научимся разрабатывать проекты разного уровня сложности во время практических занятий и домашних заданий. Сосредоточимся не на количестве, а на качестве. В результате у каждого студента курса будет 4 работы в портфолио: 3 практические работы и одна выпускная. Это позволит устроиться на работу в интересное агенство, дизайн-студию или перейти на фриланс и отправиться путешествовать, занимаясь любимым делом. Никакой воды. Только практика и реальный опыт позволят в короткие сроки освоить ключевые навыки для работы в любой команде.
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
                            <a href="https://www.youtube.com/playlist?list=PLVFlo87bKU8I_wnglxNyQLjVhrL3vZXmq" class="link" target="_blank">Бесплатный UI Design Интенсив</a>
                        </div>
                    </div>
                    <div class="course-content-inner row">
                        <ul class="course-content-list">
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">01</p>
                                <div class="desc">
                                    <p class="title">Урок 1</p>
                                    <!--  <p class="time">1 час теории
                                        , 2 часа практики
                                    </p> -->
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Введение (О курсе, как будет проходить, чему научимся)
                                            </li>
                                            <li> Инструментарий (Какие инструменты и сервисы будем использовать)
                                            </li>
                                            <li>Тренды. (Что модно сейчас, как прослеживать тенденции, на что обращать внимание)
                                            </li>
                                            <li>Дизайн-мышление. (Чем отличается мышление дизайнера от обычного человека. Как вырабатывать свой подход и привычки.)
                                            </li>
                                            <li>Домашнее задание: Купить блокнот, установить XD, Photoshop, Подключить облако. Зарегистрироваться на behance, pinterest, dribbble
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">02</p>
                                <div class="desc">
                                    <p class="title">Урок 2</p>
                                    <!--  <p class="time">2 часа теории
                                        , 4 часа практики
                                    </p> -->
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Работа над проектом. (К чему прилагается больше усилий в проекте. Как правильно вписаться в новую команду. Зона ответственности дизайнера)
                                            </li>
                                            <li>Понимание основ продуктового дизайна. (Как учитывать цели продукта. Как выявить основные задачи клиента)
                                            </li>
                                            <li>Разбираемся чем отличается опытный дизайнер от джуниора (Генерация идей, понимание стратегии, единицы смысла)
                                            </li>
                                            <li>Домашнее задание (Придумать идею своего приложения)
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">03</p>
                                <div class="desc">
                                    <p class="title">Основы проектирования</p>
                                    <p class="time">2 часа теории , 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li> Определение понятий UI/UX (Основные отличия, почему мы будем изучать только UI, что такое юзабилити)
                                            </li>
                                            <li>Основные элементы пользовательских интерфейсов (Из чего состоит интерфейс. Ключевые элементы)
                                            </li>
                                            <li> С чего начинается работа над интерфейсом. Различные сценарии. (Как выработать свой подход. Какие бывают ситуации. Как работать со сложными клиентами и задачами.)
                                            </li>
                                            <li>Архитектура данных (Разрабатываем стратегию разработки, строим майндмапы)
                                            </li>
                                            <li>Домашнее задание: Составить карту со всеми разделами приложения
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">04</p>
                                <div class="desc">
                                    <p class="title">Стратегическое мышление</p>
                                    <p class="time">2 часа теории, 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Анализ клиента, продукта, идеи. (Учимся вникать в суть проекта. Анализировать задачу. Понимать целесообразность разработки с нуля или редизайна.)
                                            </li>
                                            <li>Стратегии развития (Учимся смотреть вдаль. Учитываем сложность реализации и масштабирования продукта)
                                            </li>
                                            <li>Модели монетизации для продукта (Источники прибыли.)
                                            </li>
                                            <li> Домашнее задание: Разработать модель монетизации продукта</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">05</p>
                                <div class="desc">
                                    <p class="title">Проходим все этапы разработки самостоятельно</p>
                                    <p class="time">2 часа теории, 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Контент (Что включает, как искать)
                                            </li>
                                            <li>Работаем над визуализацией текстовых блоков (Сохраняем единство формата)</li>
                                            <li>Подбираем фотографии (Бесплатные стоки, Композиционные решения)
                                            </li>
                                            <li>Прототипирование (Для чего нужно. Какие инструменты используются.)</li>
                                            <li>Домашнее задание: Подготовить контент</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">06</p>
                                <div class="desc">
                                    <p class="title">Обратная сторона творчества</p>
                                    <p class="time">2 часа теории, 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Технические детали дизайна (Как готовить макеты для разработчиков, что учесть)</li>
                                            <li>Модульные сетки (Как выстраивать модульность и работать в рамках сеток)
                                            </li>
                                            <li>Гайдлайны (Типы гайдлайнов. Как использовать и зачем)
                                            </li>
                                            <li>UI-Кит (Что такое, для чего нужно и как пользоваться)</li>
                                            <li>Домашнее задание: Создаём свой прототип</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">07</p>
                                <div class="desc">
                                    <p class="title">Разбор полетов</p>
                                    <p class="time">2 часа теории</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>На примере ваших работ определяем типичные ошибки, ищем способы их решить, улучшаем и дорабатываем проект</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">08</p>
                                <div class="desc">
                                    <p class="title">Воркшоп UI-дизайн</p>
                                    <p class="time">2 часа теории, 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Референсы (Что такое и как их использовать в разработке)
                                            </li>
                                            <li>Типографика (Подбираем шрифты для своего проекта)</li>
                                            <li>Работа с цветом (Выбор основной плаитры, акценты, контрасты, индикация)
                                            </li>
                                            <li>Основы композиции (Распределяем компоненты с научной точки зрения)
                                            </li>
                                            <li>Простота, а не минимализм (Избавляемся от лишнего, но не от нужного)</li>
                                            <li>Как разрабатывать качественный проект в условиях строгих ограничений и рамок (Учимся работать со стрессовыми проектами)
                                            </li>
                                            <li>Домашнее задание: Рисуем своё приложение </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">09</p>
                                <div class="desc">
                                    <p class="title">Разбор полетов
                                    </p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>На примере ваших работ определяем типичные ошибки, ищем способы их решить, улучшаем и дорабатываем проект
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">10</p>
                                <div class="desc">
                                    <p class="title">Техника успешных презентаций</p>
                                    <p class="time">2 часа теории, 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li> Подбираем концепцию презентации (Определяем стилистику исходя из темы презентации)
                                            </li>
                                            <li>Как правильности донести идею (О чем говорить в презентации)</li>
                                            <li>Модули презентации (Какие блоки должна включать презентация)
                                            </li>
                                            <li>Технические детали подготовки презентации (Сервисы, инструменты)
                                            </li>
                                            <li>Повышаем эффективность портфолио (Частые ошибки, рекомендации)
                                            </li>
                                            <li>Работаем над портфолио (Площадки для размещения, типы работ)
                                            </li>
                                            <li>Домашнее задание: Рисуем кейс в портфолио</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">11</p>
                                <div class="desc">
                                    <p class="title">Разбор полетов</p>
                                    <p class="time">3 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>На примере ваших работ определяем типичные ошибки, ищем способы их решить, улучшаем и дорабатываем проект</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">12</p>
                                <div class="desc">
                                    <p class="title">Дизайн-концепция</p>
                                    <p class="time">2 часа теории, 2 часа практики</p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Что такое дизайн-концепция (Как это делается и как преподносить)
                                            </li>
                                            <li>Как структурировать идею для быстрой дизайн-концепции (Учимся передавать идею в максимально лаконичной форме)
                                            </li>
                                            <li>Как аргументировать свои решения (как верить в свои решения и как убедить поверить в это остальных)</li>
                                            <li>Домашнее задание: Выбрать приложение на свой вкус и предложить решение по его улучшению в формате дизайн-концепции</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">13</p>
                                <div class="desc">
                                    <p class="title">Разбор полетов</p>
                                    <p class="time">3 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>На примере ваших работ определяем типичные ошибки, ищем способы их решить, улучшаем проект</li>
                                            <li>Домашнее задание: Дорабатываем концепцию и готовим кейс</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">14</p>
                                <div class="desc">
                                    <p class="title">Становимся специалистами</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Основные дисциплины в digital-сфере (Какие существуют специальности, как быть универсальным, как адаптироваться под изменения рынка (какие кейсы для этого нужны))
                                            </li>
                                            <li> Какими минимальными знаниями нужно обладать, чтобы быть дизайнером интерфейсов в реальной жизни (Чем на самом деле занимается UI-дизайнер)
                                            </li>
                                            <li>Как стать профессионалом (Теория десяти тысяч часов)
                                            </li>
                                            <li>В каком агентстве работать? (Куда следует устраиваться на работу)</li>
                                            <li>Расти как дизайнер (как не зависнуть на одном месте. Вершина карьеры дизайнера)</li>
                                            <li> Как работать с клиентами (Правила, принципы, схемы)
                                            </li>
                                            <li>Домашнее задание: Разработать дизайн приложение в рамках технического задания преподавателя
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">15</p>
                                <div class="desc">
                                    <p class="title">Разбор полетов</p>
                                    <p class="time">3 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>На примере ваших работ определяем типичные ошибки, ищем способы их решить, улучшаем проект</li>
                                            <li>Домашнее задание: Дорабатываем приложение и готовим кейс</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">16</p>
                                <div class="desc">
                                    <p class="title">Как перейти на фриланс и отправиться путешествовать</p>
                                    <p class="time">2 часа теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Принципы удаленной работы (Нюансы, частые проблемы, тайм-менеджмент)</li>
                                            <li>Как стать фрилансером и получить первого клиента</li>
                                            <li>Куда отправиться зимовать</li>
                                            <li>Сколько потребуется денег</li>
                                            <li>Выпускная работа: Разработать дизайн-концепцию на основе идеи, предложенной преподавателем. Демонстрация - кейс, включающий в себя прототип и дизайн.</li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class="course-content-list-item col-xs-12 col-sm-11 col-md-11 col-lg-11">
                                <a href="#" class="toggle"></a>
                                <p class="num">17</p>
                                <div class="desc">
                                    <p class="title">Заключительная лекция</p>
                                    <p class="time">1 час теории
                                        <!-- , 2 часа практики -->
                                    </p>
                                    <a href="#" class="detail-btn"></a>
                                    <div class="detail">
                                        <ul>
                                            <li>Подводим итоги. Разбираем лучшие кейсы выпускных работ. Благодарность, напутствие. Выдача сертификатов о прохождении курса</li>
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
                                        <div class="img-wrap" style="background: url('img/mac-slider/09.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/mac-slider/10.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/mac-slider/11.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-wrap" style="background: url('img/mac-slider/12.jpg') no-repeat transparent 50% 50%; background-size: cover"></div>
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
                                <p>В чате с коллегами решаете актуальные задачи. Учитесь работать в коллективе.</p>
                            </li>
                            <li class="how-do-it-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="ico-wrap">
                                    <i class="ico-3"></i>
                                </div>
                                <p class="title">Домашние задания</p>
                                <p>Все задания с контролем выполнения и дедлайнами. Вы обучаетесь дисциплине выполнения работы.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Сертификат -->
            <section id="block-8" class="portfolio-wrap" style="padding-bottom:100px;border-bottom:1px solid #c4c8cf;">
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
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="iphone-text fix col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
                                <p class="title">Формируете портфолио</p>
                                <p>В результате прохождения курса у вас появится полноценное конкурентноспособное портфолио, состоящее из 4х качественных работ по дизайну интерфейсов. Это портфолио вы сможете демонстрировать при трудоустройстве либо во время переговоров с заказчиками</p>
                            </div>
                        </div>
                        <div class="sertificat min col-xs-12 col-sm-7 col-md-7 col-lg-7">
                            <img class="img-cert cert-ui-middle" src="img/certmiddle-ui-designer.png" alt="Сертификат" />
                        </div>
                        <div class="sertificat-text col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-2 col-md-offset-1 col-lg-offset-2">
                            <p class="title">Получаете сертификат</p>
                            <p>По прохождению обучения вам выдается сертификат. С ним вы подтверждаете свои навыки и умения.</p>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </section>
            <!-- Ваше резюме после прохождения обучения -->
            <section id="block-9" class="resume-wrap" style="border-bottom: 1px solid #c4c8cf;">
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
                                    <p>Middle UI Designer</p>
                                </div>
                            </div>
                            <div class="resume-middle">
                                <div class="main-info col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <p class="title">Профессиональные качества</p>
                                    <ul>
                                        <li>Выполнение поставленных задач точно в срок. Соблюдение дедлайнов</li>
                                        <li>Знание принципов разработки UI/UX</li>
                                        <li>Photoshop, Sketch</li>
                                        <li>Навыки прототипирования</li>
                                        <li>Умение работать в команде</li>
                                        <li>Чувство вкуса</li>
                                        <li>Работа с типографикой</li>
                                        <li>Дизайн интерфейсов уровня «Middle»</li>
                                        <li>Понимание принципов работы в digital-агентстве</li>
                                        <li>Знание трендов</li>
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
                                    <li class="skill-list-item">Прототипирование</li>
                                    <li class="skill-list-item">UI design</li>
                                    <li class="skill-list-item">Прототипирование</li>
                                    <li class="skill-list-item">Photoshop</li>
                                    <li class="skill-list-item">Sketch</li>
                                    <li class="skill-list-item">Adobe XD</li>
                                    <li class="skill-list-item">iOS design</li>
                                    <li class="skill-list-item">Material Design</li>
                                    <li class="skill-list-item">Гайдлайны</li>
                                    <li class="skill-list-item">Командная работа</li>
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
            <!-- Работы победителей -->
            <section id="block-portfolio" class="portfolio-wrap" style="margin-bottom:50px;">
                <div class="wrap-container">
                    <div class="title-wrap row">
                        <div class="col-xs-1 col-sm-2 col-md-2 col-lg-2 line-wrap">
                            <i class="line"></i>
                        </div>
                        <div class="col-xs-10 col-sm-9 col-md-9 col-lg-9 title-inner">
                            <p class="title">Работы наших выпускников</p>
                        </div>
                    </div>
                    <div class="trend-wrap row">
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 trend-inner">
                            <ul class="trend-list portfolio-list">
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Grigory Uskov">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/nearst-app.png" class="nav-link chocolat-image" data-lightbox="image-1"></a>
                                    <a href="./img/design/students-works/nearst-app2.png" class="nav-link chocolat-image" data-lightbox="image-1"></a>
                                    <a href="./img/design/students-works/nearst-app3.png" class="nav-link chocolat-image" data-lightbox="image-1"></a>
                                    <a href="./img/design/students-works/nearst-app4.png" class="nav-link chocolat-image" data-lightbox="image-1"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/nearst-app-preview.png"></i>
                                        </div>
                                        <p>Nearst app </p>
                                        <p>Grigory Uskov</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Tatiana Mak">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/wardrobe.jpg" class="nav-link chocolat-image"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/wardrobe-preview.jpg" class="ico-1"></i>
                                        </div>
                                        <p>Wardrobe </p>
                                        <p>Tatiana Mak</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Elizaveta Borys">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/costs-tracker.png" class="nav-link chocolat-image"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/cost-tracker-preview.png" class="ico-1"></i>
                                        </div>
                                        <p>Costs Tracker </p>
                                        <p>Elizaveta Borys</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Anna Morozova">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/pizza-alarm.png" class="nav-link chocolat-image" data-lightbox="gallery4"></a>
                                    <a href="./img/design/students-works/pizza-alarm2.png" class="nav-link fancybox" data-lightbox="gallery4"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/pizza-alarm-preview.png"></i>
                                        </div>
                                        <p>Pizza Alarm </p>
                                        <p>Anna Morozova</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Evgeny Baranov">
                                <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/filantrop.png" class="nav-link chocolat-image" data-lightbox="gallery5"></a>
                                    <a href="./img/design/students-works/filantrop2.png" class="nav-link chocolat-image" data-lightbox="gallery5"></a>
                                    <a href="./img/design/students-works/filantrop3.png" class="nav-link chocolat-image" data-lightbox="gallery5"></a>
                                    <a href="./img/design/students-works/filantrop4.png" class="nav-link chocolat-image" data-lightbox="gallery5"></a>
                                    <a href="./img/design/students-works/filantrop5.png" class="nav-link chocolat-image" data-lightbox="gallery5"></a>
                                    <a href="./img/design/students-works/filantrop6.png" class="nav-link chocolat-image" data-lightbox="gallery5"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/filantrop-preview.png">
                                        </div>
                                        <p>Filantrop App</p>
                                        <p>Evgeny Baranov </p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Ksenia Novikova">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/eda-ryadom.png" class="nav-link chocolat-image" data-lightbox="gallery6"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/eda-preview.png">
                                        </div>
                                        <p>Еда рядом </p>
                                        <p>Ksenia Novikova</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Vladimir Voladores">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/walker.png" class="nav-link chocolat-image" data-lightbox="gallery7"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/walker-preview.png">
                                        </div>
                                        <p>Walker </p>
                                        <p>Vladimir Voladores</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4 active" data-chocolat-title="Marat Khusyainov">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/jet-sales.jpg" class="nav-link chocolat-image" data-lightbox="gallery8"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/jet-sales-preview.jpg">
                                        </div>
                                        <p>Jet-sales </p>
                                        <p>Marat Khusyainov</p>
                                    </div>
                                </li>
                                <li class="trend-list-item col-xs-12 col-sm-4 col-md-4 col-lg-4" data-chocolat-title="Владислав Гетманенко">
                                    <a style="position:absolute;width:300px;height:300px;z-index:9;" href="./img/design/students-works/smart-book.png" class="nav-link chocolat-image" data-lightbox="gallery89"></a>
                                    <div class="trend-list-item-inner">
                                        <div class="ico-wrap">
                                            <img src="./img/design/students-works/smart-book-preview.jpg">
                                        </div>
                                        <p>Smart Audiobook Reader 2.0</p>
                                        <p>Владислав Гетманенко</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Отзывы -->
            <section id="block-11" class="review-block-wrap" style="padding-top:60px;">
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
                                            <img src="img/reviews/photo025.jpg" alt="Айнур Мамедова">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Айнур Мамедова</p>
                                                <p class="position">Графический дизайнер в MaxMedya Creative Design</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://www.facebook.com/profile.php?id=100002003089741" target="_blank">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>На курсе не было ничего лишнего - все строго по делу. Каждое занятие было насыщенно как теорией, так и практикой, что в данной сфере очень важно! Здорово! Заданий было много, сроки сжатые - это большой плюс. Четкий дедлайн мобилизирует силы и учит работать в срок, как и требуется в реальной работе с заказчиками. Ни на мгновение не усомнилась в своем выборе курса и сообщества. Интенсив помог мне в определении направления профессиональной деятельности, что было болезненным вопросом долгое время. Искренне желаю дальнейшего развития команде SkillBranch, потому что этот подход к делу ответственный и с душой.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo026.JPG" alt="Жаринова Ксения">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Жаринова Ксения</p>
                                                <p class="position">Дизайнер компании ООО "Южный двор"</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://www.facebook.com/xeniazharinova" target="_blank">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Я проходила обучение на курсе UI Intensive. Очень понравилась атмосфера, созданная командой SkillBranch. Отдельное спасибо лектору Роману Ли за подробные объяснения и рекомендации по моему проекту. В результате, у меня на руках блокнот с большим количеством идей для приложений с их возможными реализациями, а также прототип моего приложения и выполненный для него дизайн. А любоваться на все это позволит созданный кейс-презентация для моего портфолио! P. S. По-настоящему хорошая идея создать Telegram-чаты для каждого курса, которая позволила подружиться с сокурсниками и познакомиться с креативными ребятами, среди которых не только новички, но и UI-дизайнеры с опытом.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo027.jpeg" alt="Алексей Плуталов">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Алексей Плуталов
                                                </p>
                                                <p class="position">Студент 3 курса НИЯУ МИФИ</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://www.facebook.com/alexander.plutalov?ref=bookmarks" target="_blank">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Заинтересовался разработкой web и мобильных приложений и пришёл к выводу: неплохо было бы научиться создавать самому дизайн сайтов и интерфейсов приложений. Долго искал подходящие курсы и уроки. Натолкнулся на сайт Skill-branch.ru. Узнал, что будет проходить курс по UI дизайну. Сразу же записался. Во время прохождения курса узнал много полезного. Теперь я знаю многие аспекты производства дизайна интерфейсов и надеюсь на дальнейшее их использование.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo028.jpg" alt="Елизавета Борис">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Елизавета Борис</p>
                                                <p class="position">Фрилансер</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/fathermuckker" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Я очень рада, что попала на курс по UI-дизайну. Наткнулась на него совершенно случайно и решила поучаствовать. Во время прохождения курса я получила множество супер-полезных знаний, которые теперь могу с легкостью применять на практике. Хочу сказать огромное спасибо всем организаторам, а также Роману (наш спикер, наставник и советчик) за материал, атмосферу и мотивацию во время курса. Всё было очень круто!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo029.png" alt="Ульян Чесноков">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Ульян Чесноков</p>
                                                <p class="position">Дизайнер like it should.be
                                                </p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://www.facebook.com/UlyanChesnokov" target="_blank">
                                                            <i class="fa fa-facebook" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Курс будет полезен, как опытному дизайнеру, так и человеку без опыта вообще. Структурировано подали весь необходимый минимум технологий и показали полезные фишки и приемы. Я получил полезную информацию не только в области разработки интерфейса, но и частично пересмотрел свои взгляды на дизайн в целом. Система домашних заданий дисциплинирует и заставляет выкладываться по максимуму.</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo030.jpg" alt="Татьяна Максимова">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Татьяна Максимова</p>
                                                <p class="position">Разработчик динамических баннеров Amber Pro</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/tanya_mak" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Хочу поблагодарить SkillBranch за пройденный курс UI-дизайна. Это лучшая возможность в кратчайшие сроки повысить свой уровень. За курс была проделана большая работа. Финальный результат очень радует. Отдельное спасибо хочется сказать Роману за настрой и мотивацию к работе!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo031.jpg" alt="Денис Горовенко">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Денис Горовенко</p>
                                                <p class="position">Фрилансер. Разработчик.</p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/id3935152" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Я открыл для себя новые инструменты, а также "глубину" старых, которые я использовал в основном поверхностно. Курс дает не только "Определенный объем знаний", но и открывает в тебе желание искать их, что критически необходимо для развития в профессиональном плане. Материалы подаются в правильном формате. Сам курс сопровождается интенсивной работой на уроках и домашних заданиях. Такой процесс вселяет уверенность участнику в том, что он может выполнить задачи поставленные в рамках курса и профессии. Слушатели курса в чате обмениваются вопросами и делятся результатами своей работы, найденной информацией, советами и здравой критикой. Обучение будто проходило в реальной аудитории, в рабочем процессе, с командой "однодумцев". А это действительно полезное окружение!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 1200px;">
                                        <div class="photo-wrap">
                                            <img src="img/reviews/photo032.jpg" alt="Ксения Новикова">
                                        </div>
                                        <div class="review-text col-xs-12 col-sm-9 col-md-9 col-lg-9 col-xs-offset-0 col-sm-offset-3 col-md-offset-3 col-lg-offset-3">
                                            <div class="review-text-top">
                                                <p class="author">Ксения Новикова</p>
                                                <p class="position">Веб-дизайнер-junior, студия Dr3am
                                                </p>
                                                <ul class="soc-links">
                                                    <li class="soc-links-item">
                                                        <a href="https://vk.com/ksu.kitty" target="_blank">
                                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <p>Общие впечатления о курсе только положительные: реально возможно за какие-то несколько занятий прокачаться до хорошего уровня, если внимательно смотреть все лекции и прислушиваться к замечаниям по домашним заданиям. Очень порадовало наличие дедлайнов, в которые необходимо было вписаться. Благодаря замечаниям лектора, многие ребята выросли на глазах. Отличное комьюнити в телеграмме: всегда друг другу подсказывали, поддерживали, флудили на всякие разные темы. Шикарная дизайнерская атмосфера! Спасибо SkillBranch за этот курс. И увидимся на мидле!
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
            <!-- В итоге вы получите -->
            <section id="block-10" class="result-wrap" style="margin-bottom:0;">
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
                                <p>17 вебинаров в записи</p>
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
                                <p>17 презентаций и методических пособий с ссылками на практические кейсы</p>
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
            <!-- Наши друзья -->
            <!-- Запись на обучение -->
            <section id="block-13" class="entry-training-wrap">
                <div class="bg-opacity"></div>
                <div class="wrap-container">
                    <div class="entry-training-inner row">
                        <div class="left-part col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                            <div class="without-discount">
                                <p class="ps">Цена без скидки:</p>
                                <p class="strike-text">25 900 <i class="fa fa-rub" aria-hidden="true"></i></p>
                            </div>
                            <div class="with-discount-wrap row">
                                <div class="with-discount-inner col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="with-discount">
                                        <p class="ps" style="margin-bottom:5px;">Цена со скидкой 30%</p>
                                        <p class="ps" style="font: 700 50px/52px Muller,sans-serif; text-transform: uppercase; margin-top: 0;">17 700 <i class="fa fa-rub" aria-hidden="true"></i></p>
                                        <p class="ps">до 31.12.2016</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="right-part col-xs-12 col-sm-6 col-md-6 col-lg-6">
                            <p class="title" style="font: 700 40px/44px Muller,sans-serif;">Запись на обучение</p>
                            <p class="ps">дата начала 19.02.2017</p>
                            <form action="#" method="POST" role="form" class="form mailphp5">
                                <input type="hidden" id="name" class="name" value="form7">
                                <input type="hidden" id="form-title" class="form-title" value="Design Middle">
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
                    <div id="block-14" class="stack-wrap share-block share-under-form" style="z-index: 10">
                        <div class="wrap-container">
                            <p class="title">Порекомендуйте курс друзьям!</p>
                            <div class="result-inner row">
                                <div class="footer-bottom row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 share-wrap" style="text-align:center">
                                        <div class="ya-share2" data-services="facebook,vkontakte,twitter" data-image="http://skill-branch.ru/img/ui-soc-share.jpg" data-url="http://skill-branch.ru/ui-design-middle.html" data-url:facebook="http://skill-branch.ru/ui-design-middle.html" data-description="В течении 4-х месяцев буду учиться создавать современные интерфейсы, а также узнаю про все тонкости разработки digital-продукта" data-title=" Я иду на курс Middle UI Designer"></div>
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
        <script>
        // Я ХЗ КАК СДЕЛАТЬ ПО ДРУГОМУ, МИШ
        $('.menu-item:eq(3) a').addClass('active')
        </script>
</body>

</html>
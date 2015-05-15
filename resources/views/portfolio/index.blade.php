<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Tretyakov Pavel - персональное портфолио</title>

	<!-- CSS -->
	{!! Html::style('css/bootstrap/bootstrap.min.css') !!}
	{!! HTML::style('css/font-awesome.min.css') !!}
	{!! HTML::style('css/simple-line-icons.css') !!}
	{!! HTML::style('css/animate.css') !!}
    
	<!-- Custom styles CSS -->
	{!! HTML::style('css/style.css') !!}	
    
    {!! HTML::script('js/modernizr.custom.js') !!}
</head>
<body>

	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start -->

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<div class="start">Привет, меня зовут Павел Третьяков и я</div>
			<h1>Веб-разработчик</h1>
			<div class="start">приложений любой сложности для web-a</div>
		</div>

        <a href="#services">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	<!-- Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Tretyakov Pavel</a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home">Начало</a></li>
						<li><a href="#services">Увлечения</a></li>
                        <li><a href="#portfolio">Работы</a></li>
                        <li><a href="#skills">Навыки</a></li>
						<li><a href="#testimonials">Отзывы</a></li>
						<li><a href="#contact">Контакты</a></li>
					</ul>
				</div>

			</div><!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

    <!-- Services start -->

	<section id="services" class="pfblock pfblock-gray">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Это то, чем я занимаюсь</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							Всякая стена — это дверь. Поэтому, нужно всегда искать что-то новое и интересное!
							А программирование для веба - это тот еще бездонный колодец!
						</div>
					</div>

				</div>

			</div>

			<div class="row">

				

				<div class="col-sm-4">

					<div class="iconbox wow slideInLeft">
						<div class="iconbox-icon">
							<span class="icon-drawer"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Серверная часть</h3>
							<div class="iconbox-desc">
								Работа с базой данных, обработка запросов клиентов, соккеты и массивы данных -
								это только 0,01% задач решаемых серверами. 
							</div>
						</div>
					</div>

				</div>


				<div class="col-sm-4">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-rocket"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Клиентская часть</h3>
							<div class="iconbox-desc">
								Пользовательский интерфейс, онлайн игры и выжимание всех соков из браузеров - тоже широкий простор для полета мыслей!
							</div>
						</div>
					</div>

				</div>

				<div class="col-sm-4">

					<div class="iconbox wow slideInRight">
						<div class="iconbox-icon">
							<span class="icon-shield"></span>
						</div>
						<div class="iconbox-text">
							<h3 class="iconbox-title">Администрирование</h3>
							<div class="iconbox-desc">
								Одно дело собрать приложение, совершенно другое - предоставить безопасный доступ к нему!
							</div>
						</div>
					</div>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Services end -->
    
	<!-- Portfolio start -->

	<section id="portfolio" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Мои работы</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							К сожалению, веб-программистам, не всегда возможно наглядно показать всю цистерну крови и пота,	потраченных на зубрежку мануалов, выявление багов и изучение множества языков программирования для создания приложений. Представляю вам выжившую наглядность!
						</div>
					</div>

				</div>

			</div><!-- .row -->
            
            
            <div class="row">
                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="images/projects/truckus.jpg" alt="Сайт физитка truckus.ru"/>
                            <a href="http://www.truckus.ru">
                            <figcaption>
                                <h2>сайт <span>визитка</span></h2>
                                <p>Электрик-диагност американских грузовиков</p>
                            </figcaption>
                            </a>
                        </figure>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="images/projects/backbone.jpg" alt="Сайт физитка truckus.ru"/>
                            <a href="http://backgammon.tretyakovpavel.ru">
                            <figcaption>
                                <h2>Длинные <span>нарды</span></h2>
                                <p>Онлайн-игра альфа-версия</p>
                            </figcaption>
                            </a>		
                        </figure>
                    </div>
                    
                </div>
                
                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="images/projects/taxi.jpg" alt="База данных такси" />
                            <a href="http://taxi.sibitri.com">
                            <figcaption>
                                <h2>База <span>Такси</span></h2>
                                <p>База данных такси вашего города</p>
                            </figcaption>
                            </a>
                        </figure>
                    </div>
                    
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="images/projects/shop.jpg" alt="Движок интерент магазина" />
                            <a href="http://shop.tretyakovpavel.ru">
                            <figcaption>
                                <h2>Конструктор <span>Интернет-магазинов</span></h2>
                                <p>Альфа версия движка</p>
                            </figcaption>
                            </a>
                        </figure>
                    </div>
                    
                </div>


                <div class="col-xs-12 col-sm-4 col-md-4">
                    
                    <div class="grid wow zoomIn">
                        <figure class="effect-bubba">
                            <img src="images/projects/simpletest.jpg" alt="Программа для тестирования на Delphi"/>
                            <a href="https://github.com/ptretyakov/simpleTest">
                            <figcaption>
                                <h2>Simple <span>Test</span></h2>
                                <p>Программа для тестирования, вместе с редактором тестов, написанная на Delphi</p>
                            </figcaption>
                            </a>
                        </figure>
                    </div>
                    
                </div>

                
            </div>


		</div><!-- .contaier -->

	</section>

	<!-- Portfolio end -->
    
    <!-- Skills start -->
    
    <section class="pfblock pfblock-gray" id="skills">
		
			<div class="container">
			
				<div class="row skills">
					
					<div class="row">

                        <div class="col-sm-6 col-sm-offset-3">

                            <div class="pfblock-header wow fadeInUp">
                                <h2 class="pfblock-title">Ключевые навыки и технологии</h2>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                	<i>"...Пленяет разум<br />
                                     Сладкой неволей отрада кубков полных"</i><br />Вакхилид
                                </div>
                                <div class="pfblock-line"></div>
                                <div class="pfblock-subtitle">
                                	... и мой интерес к ним
                                </div>
                            </div>

                        </div>

                    </div><!-- .row -->
					
					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">PHP</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">NodeJS</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">Laravel 5 MVC</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">JavaScript</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">JQuery</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="90" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">90</span>
                        </span>
						<h3 class="text-center">Backbone.js</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">100</span>
                        </span>
						<h3 class="text-center">Git</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">100</span>
                        </span>
						<h3 class="text-center">CoffeeScript</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">MySQL</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">MongoDB</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="100" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">100</span>
                        </span>
						<h3 class="text-center">Linux</h3>
					</div>	

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="60" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">60</span>
                        </span>
						<h3 class="text-center">CSS 3</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="60" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">60</span>
                        </span>
						<h3 class="text-center">HTML 5</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="75" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">75</span>
                        </span>
						<h3 class="text-center">KineticJS</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="80" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">80</span>
                        </span>
						<h3 class="text-center">Delphi</h3>
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="95" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">95</span>
                        </span>
						<h3 class="text-center">Python</h3>(на стадии изучения)
					</div>

					<div class="col-sm-6 col-md-3 text-center">
						<span data-percent="70" class="chart easyPieChart" style="width: 140px; height: 140px; line-height: 140px;">
                            <span class="percent">70</span>
                        </span>
						<h3 class="text-center">С++</h3>(на стадии изучения)
					</div>


				</div><!--End row -->
			
			</div>
		
    </section>
    
    <!-- Skills end -->

	<!-- CallToAction start -->

	<section class="calltoaction">
		<div class="container">

			<div class="row">

				<div class="col-md-12 col-lg-12">
					<h2 class="wow slideInRight" data-wow-delay=".1s">Вы готовы начать работать со мной?</h2>
					<div class="calltoaction-decription wow slideInRight" data-wow-delay=".2s">
						Я всегда открыт для новых проектов!
					</div>
				</div>

				<div class="col-md-12 col-lg-12 calltoaction-btn wow slideInRight" data-wow-delay=".3s">
					<a href="#contact" class="btn btn-lg">Связь со мной</a>
				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- CallToAction end -->

	<!-- Testimonials start -->

	<section id="testimonials" class="pfblock pfblock-gray">

		<div class="container">
            
            <div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header wow fadeInUp">
						<h2 class="pfblock-title">Что говорят мои клиенты</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							"Отзыв от клиента-призрака - это финальная стадия маркетингового даунизма". (Денис Каплунов)
							У меня реальные отзывы клиентов, честно! :-)
						</div>
					</div>

				</div>

			</div><!-- .row -->

            <div class="row">

			<div id="cbp-qtrotator" class="cbp-qtrotator">
                <div class="cbp-qtcontent">
                    <img src="images/clients/danilaleonov.jpeg" alt="Фото Данилы Леонова" style="width:210px" />
                    <blockquote>
                      <p>Отличное качество выполненых работ и главное все в срок! С *** очень легко находить общий язык. Продолжай в том же духе, удачи!</p>
                      <footer><a href="http://danilaleonov.com">Данила Леонов</a></footer>
                    </blockquote>
                </div>
                <div class="cbp-qtcontent">
                    <img src="images/clients/govorova.jpg" alt="Фото Карины Говоровой" style="width:210px" />
                    <blockquote>
                      <p>Сайт моей мечты готов! ура! Большое спасибо, за отличную работу! За терпение, внимательность ко всем деталям и пожеланиям.
Павел зарекомендовал себя как отличный спецталист, всем советую!</p>
                      <footer>Карина Говорова</footer>
                    </blockquote>
                </div>

            </div>		

            </div><!-- .row -->

					
		</div><!-- .row -->
	</section>

	<!-- Testimonial end -->


	<!-- Contact start -->

	<section id="contact" class="pfblock">
		<div class="container">
			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<div class="pfblock-header">
						<h2 class="pfblock-title">Оставайтесь со мной на связи!</h2>
						<div class="pfblock-line"></div>
						<div class="pfblock-subtitle">
							
						</div>
					</div>

				</div>

			</div><!-- .row -->

			<div class="row">

				<div class="col-sm-6 col-sm-offset-3">

					<form id="contact-form" role="form">
						<div class="ajax-hidden">
							<div class="form-group wow fadeInUp">
								<label class="sr-only" for="c_name">Имя</label>
								<input type="text" id="c_name" class="form-control" name="c_name" placeholder="Имя">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".1s">
								<label class="sr-only" for="c_email">Email</label>
								<input type="email" id="c_email" class="form-control" name="c_email" placeholder="E-mail">
							</div>

							<div class="form-group wow fadeInUp" data-wow-delay=".2s">
								<textarea class="form-control" id="c_message" name="c_message" rows="7" placeholder="Сообщение"></textarea>
							</div>

							<button type="submit" class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s">Отправить сообщение</button>
						</div>
						<div class="ajax-response"></div>
					</form>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</section>

	<!-- Contact end -->

	<!-- Footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-12">

					<ul class="social-links">
						<li><a href="https://www.facebook.com/pavel.tretiakov" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://twitter.com/deadmaestro#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://plus.google.com/u/0/100445432093515053156/posts" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="https://vk.com/id217899236" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-vk"></i></a></li>
						<li><a href="https://github.com/ptretyakov" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-github"></i></a></li>
					</ul>

					<p class="heart">
                        Сделано с <span class="fa fa-heart fa-2x animated pulse"></span> вместе с bootstrap
                    </p>
                    <p class="copyright">
                        © 2015 Pavel Tretyakov
					</p>

				</div>

			</div><!-- .row -->
		</div><!-- .container -->
	</footer>

	<!-- Footer end -->

	<!-- Scroll to top -->

	<div class="scroll-up">
		<a href="#home"><i class="fa fa-angle-up"></i></a>
	</div>
      
    
    <!-- Scroll to top end-->

	<!-- Javascript files -->
	{!! HTML::script('js/jquery-1.11.1.min.js') !!}
	{!! HTML::script('js/bootstrap/bootstrap.min.js') !!}
	{!! HTML::script('js/jquery.parallax-1.1.3.js') !!}
	{!! HTML::script('js/imagesloaded.pkgd.js') !!}
	{!! HTML::script('js/jquery.sticky.js') !!}
	{!! HTML::script('js/smoothscroll.js') !!}
	{!! HTML::script('js/wow.min.js') !!}
	{!! HTML::script('js/jquery.easypiechart.js') !!}
	{!! HTML::script('js/waypoints.min.js') !!}
	{!! HTML::script('js/jquery.cbpQTRotator.js') !!}
	{!! HTML::script('js/custom.js') !!}


</body>
</html>
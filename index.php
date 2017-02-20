<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <title>Наші виставки</title>
</head>
<body>
  <header class="header">
    <div class="container">
		 <div class="col-9">
			<nav>
				<ul class="nav">
				  <li class="nav__item"><a class="nav__link" href="#">Головна</a></li>
				  <li class="nav__item"><a class="nav__link" href="#">F.A.Q.</a></li>
				  <li class="nav__item"><a class="nav__link" href="#">Контакти</a></li>
				</ul>
			</nav>
		</div>
		<div class="col-3">
		  <div class="language">
			<a href="#"><div class="language__english"></div></a>
			<a href="#"><div class="language__russian"></div></a>
		  </div>
		  <div class="references">
			<a href="https://www.facebook.com/pages/Central-State-Electronic-Archives-of-Ukraine/1432110883670839" target="_blank"><div class="references__facebook"></div></a>
			<a href="https://www.youtube.com/channel/UCGzhf0y1ZIB9mLMZVJujXCA" target="_blank"><div class="references__youtube"></div></a>
			<a href="https://uk.wikipedia.org/wiki/Центральний_державний_електронний_архів_України" target="_blank"><div class="references__wikipedia"></div></a>
		  </div>
		  <a href="#" class="map-link"><div class="site-map" title="карта сайту"></div></a>
		 </div>
	</div>
  </header>
  	<section class="logo-search">
		<div class="container">
		  <div class="col-3">
			<a href="index.html"><div class="logo"></div></a>
		  </div>
		  <div class="col-9">
			  <form action="POST" class="search">
				<input type="search" name="search" placeholder="Введіть пошуковий запит...">
				<button type="submit" name="button"></button>
			  </form>
		  </div>
		</div>
	</section>
	<section class="top-menu">
    <div class="container">
        <ul class="menu">
          <li class="menu__item">Про архів
            <ul class="submenu">
               <li class="submenu__item"><a href="#" class="submenu__link">Історія створення</a></li>
			    <li class="submenu__item"><a href="#" class="submenu__link">Положення по ЦДЕА</a></li>
              <li class="submenu__item"><a href="#" class="submenu__link">Структура</a></li>
              <li class="submenu__item"><a href="#" class="submenu__link">Дорадчі органи</a></li>
			   <li class="submenu__item"><a href="#" class="submenu__link">Державні закупівлі</a></li>
			   <li class="submenu__item"><a href="#" class="submenu__link">Очищення влади</a></li>
			   <li class="submenu__item"><a href="#" class="submenu__link">Запобігання коррупції</a></li>
			   <li class="submenu__item"><a href="#" class="submenu__link">Публічна інформація</a></li>
			</ul>
          </li>
          <li class="menu__item">Фонди</li>
          <li class="menu__item">Нормативна база
				<ul class="submenu">
					<li class="submenu__item"><a href="#" class="submenu__link">Закони України</a></li>
				   <li class="submenu__item"><a href="#" class="submenu__link">Нормативно-правові акти</a></li>
				</ul>
			</li>
		   <li class="menu__item">Пресс-центр
		    <ul class="submenu">
				<li class="submenu__item"><a href="#" class="submenu__link">Міжнародні зв'язки</a></li>
			   <li class="submenu__item"><a href="#" class="submenu__link">Наші публікації</a></li>
			   <li class="submenu__item"><a href="#" class="submenu__link">Змі про нас</a></li>
		   </li>
		   </ul>
		   <li class="menu__item">Звернення громадян</li>
          <li class="menu__item">Вакансії</li>
        </ul>
    </div>
	</section>
    <section class="content-area">
	  <div class="container">
		<div class="col-9">
		  <main role="main">
			<div class="slider">
				<div class="slides">
				</div>
				<div class="arrow-left"></div>
				<div class="arrow-right"></div>
			</div>
		  </main>
		</div>
		<div class="col-3">	
			<section class="expositions">
				<h2 class="expo__header">Наші виставки</h2>
				<a href="#">
					<article class="exposition">
						<img src="img/header6.jpg" alt="Виставка №1" class="exposition__img">
						<div class="exposition__date">27.09.2017</div>
						<div class="exposition__name">Ми пам'ятаємо: Революція гідності 2013-2014 років</div>
					</article>
				</a>
				<a href="#">
					<article class="exposition">
						<img src="img/2.png" alt="Виставка №2" class="exposition__img">
						<div class="exposition__date">06.05.2016</div>
						<div class="exposition__name">Перемога над нацизмом у Європі (1939-1945 роки)</div>
					</article>
				</a>
				<a href="#">
					<article class="exposition">
						<img src="img/20_nezalejnist.jpg" alt="Виставка №3" class="exposition__img">
						<div class="exposition__date">23.08.2016</div>
						<div class="exposition__name">До Дня незалежності України</div>
					</article>
				</a>
				<a href="#">
					<article class="exposition">
						<img src="img/konstitution.jpg" alt="Виставка №4" class="exposition__img">
						<div class="exposition__date">26.06.2015</div>
						<div class="exposition__name">До дня прийняття Конституції України</div>
					</article>
				</a>
				<a href="#"><div class="all__expositions">Всі виставки</div></a>
			</section>
		</div>
	  </div>
	</section>
    <footer class="footer"></footer>
	<script src="js/slider.js"></script>
</body>
</html>

<?php include "head.php"; ?>
<body>
<?php include "navigation.php"; ?>

  
<header>
	<?php include "form_myModal.php"; ?>
	
	<div class='container'>
		<div id='header_title'>
			<h1>Гримёрные зеркала и столы с оплатой при получении</h1>
			<h2>или скидкой 10% при полной предоплате</h2>
		</div>
	</div>
</header>

<main>
	<h1>Немного о нас</h1>
	<div class="container">
		<div class="row">
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='content_about_us'>
					<div >
						<img class='img_icon' src='img/icon1.png'>
					</div>
				<div class='text_about_us'>
					<p><b>Доставка по России</b></p>
					<p>во все населённые пункты страны</p>
				</div>
			</div>
		  </div>
		  
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='content_about_us'>
					<div >
						<img class='img_icon' src='img/icon2.png'>
					</div>
				<div class='text_about_us'>
					<p><b>Своё производство</b></p>
					<p>перепродажа -не наша история</p>
				</div>
			</div>
		  </div>
		  
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='content_about_us'>
					<div >
						<img class='img_icon' src='img/icon3.png'>
					</div>
				<div class='text_about_us'>
					<p><b>НЕбанковская рассрочка</b></p>
					<p>без процентов до 3-х месяцев</p>
				</div>
			</div>
		  </div>
		  
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='content_about_us'>
					<div >
						<img class='img_icon' src='img/icon4.png'>
					</div>
				<div class='text_about_us'>
					<p><b>Надёжная упаковка</b></p>
					<p>упаковываем в 3 слоя защитного материала и палетный борт</p>
				</div>
			</div>
		  </div>
		  
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='content_about_us'>
					<div >
						<img class='img_icon' src='img/icon5.png'>
					</div>
				<div class='text_about_us'>
					<p><b>Работа по договору</b></p>
					<p>гарантийные обязательства на изделие 3 года</p>
				</div>
			</div>
		  </div>
		  
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='content_about_us'>
					<div >
						<img class='img_icon' src='img/icon6.png'>
					</div>
				<div class='text_about_us'>
					<p><b>Ваши размеры, Ваш дизайн</b></p>
					<p>более 100 вариантов расцветок</p>
				</div>
			</div>
		  </div>
		 </div>
	  
	  
	<h1>Каталог зеркал с лампами</h1>
	<h2>нашей продукции и это далеко не всё</h2>
	<form method="post" action="./mail2.php" id="myModal2" class="modal fade">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h1 id='form_header'></h1>
				<input  type="text" id="product_name" name="product_name" hidden />
				<input placeholder='Ваше имя' type="text" id="name" name="name" />
				<input placeholder='Ваш телефон' type="tel" id="phone" name="phone" />
				<input placeholder='Ваш email' type="email" id="mail" name="mail" />
				<span id="submit" class="input">
					<label for="submit"></label>		 
					<input id="send" type="submit" value="Заказать" class='red_button details' />
				</span>
    </form>
	<div class="row">
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo1.jpg' >
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='malenkoe-nastolnoe-podsvetka-70x60.php' data-form_header="маленькое настольное гримёрное зеркало 70х60 см">Маленькое настольное гримёрное зеркало</p>
					<p>70х60 см</p>
					<span class='price'><p><b>4800 </b> <del class='gray'>6300<del></p></span>
					<button class='red_button details'>Подробнее</button>
					
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo2.jpg' >
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='stol.php' data-form_header="гримёрный стол 70х160х40см">Гримёрный стол</p>
							<p>70х160х40</p>
							<span class='price'><p><b>9200</b> <del class='gray'>12500<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo3.jpg' >
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='polnyi-rost-napolnoe-180x80.php' data-form_header="напольное зеркало в полный рост 80х180 см">Напольное зеркало в полный рост</p>
					<p>80х180 см</p>
					<span class='price'><p><b>10200</b> <del class='gray'>12710<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo4.jpg' >
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='nedorogoe-40x40.php' data-form_header="гримёрное зеркало 40х40см">Недорогое гримёрное зеркало</p>
							<p>40х40см</p>
							<span class='price'><p><b>3500</b> <del class='gray'>5500<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo5.jpg' >
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='stolik-makiyazh-zerkalo-podsvetka.php' data-form_header="стол для макияжа с зеркалом и подсветкой 132х142х50 см">Стол для макияжа с зеркалом и подсветкой</p>
					<p>132х142х50 см</p>
					<span class='price'><p><b>19400</b> <del class='gray'>27200<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo6.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='grimernoe-zerkalo-s-tumboi.php' data-form_header="зеркало для макияжа с тумбой">Зеркало для макияжа с тумбой</p>
							<p>90-125х145х40 см</p>
							<span class='price'><p><b>12930</b> <del class='gray'>16350<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo7.jpg'>
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='stoyki.php' data-form_header="стойки-светильники">Стойки-светильники (комплект 2 шт.)</p>
					<p>10х170 см</p>
					<span class='price'><p><b>5850</b> <del class='gray'>9570<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo8.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='grimerniy-stolik-zerkalo-podsvetka.php' data-form_header="гримёрный стол с зеркалом и подстветкой 120х155х40 см">Гримёрный стол с зеркалом и подстветкой</p>
							<p>120х155х40 см</p>
							<span class='price'><p><b>19900</b> <del class='gray'>24300<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo9.jpg'>
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='stolspolkoy.php' data-form_header="гримёрный стол 70х145х35 см">Гримёрный стол</p>
					<p>70х145х35 см</p>
					<span class='price'><p><b>7490</b> <del class='gray'> 9590<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo10.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='grimernoe-zerkalo-yashik.php' data-form_header="гримёрное зеркало с ящиком">Гримёрное зеркало с ящиком</p>
							<p>80х170х40 см</p>
							<span class='price'><p><b>10200</b> <del class='gray'>16470<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo11.jpg'>
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='stol-vizazhista-zerkalo-podsvetka.php' data-form_header="стол визажиста с зеркалом и тумбой">Стол визажиста с зеркалом и тумбой</p>
					<p>105х170х40 см</p>
					<span class='price'><p><b>15400</b> <del class='gray'>18300<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo12.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='nastennoe-s-podsvetkoi-lampami.php' data-form_header="настенное зеркало для макияжа">Настенное зеркало для макияжа</p>
							<p>100х85х30 см</p>
							<span class='price'><p><b>9700</b> <del class='gray'>12270<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo13.jpg'>
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='krugloe-grimernoe-lampochki.php' data-form_header="круглое гримёрное зеркало с лампочками">Круглое гримёрное зеркало с лампочками</p>
					<p>70 см</p>
					<span class='price'><p><b>8490</b> <del class='gray'>12230<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo14.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='arch.php' data-form_header="гримёрный стол с аркой">Гримёрный стол с аркой</p>
							<p>90х155х40 см</p>
							<span class='price'><p><b>13200</b> <del class='gray'>16550<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo15.jpg'>
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='tualetniy-stolik-zerkalo-beliy.php' data-form_header="туалетный столик с зеркалом и подсветкой MV lite">Туалетный столик с зеркалом и подсветкой MV lite</p>
					<p>100х145х40 см</p>
					<span class='price'><p><b>14400</b> <del class='gray'>18900<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo16.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='mvmedium.php' data-form_header="гримёрный стол MV medium">Гримёрный стол MV medium</p>
							<p>100х145х40 см</p>
							<span class='price'><p><b>18150</b> <del class='gray'>22300<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo17.jpg'>
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='mvoptimum.php' data-form_header=">гримёрный стол MV optimum">Гримёрный стол MV optimum</p>
					<p>100х142х40 см</p>
					<span class='price'><p><b>18370</b> <del class='gray'>21900<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo18.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='mvgrand.php' data-form_header="гримёрный стол MV grand">Гримёрный стол MV grand</p>
							<p>130-160х145х40 см</p>
							<span class='price'><p><b>20600</b> <del class='gray'>25470<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
				<div class='catalog_item'>
					<img src='img/zerkalo19.jpg'>
					<p class='green'><b>в наличии</b></p>
					<p class='green'>оплата после получения и проверки</p>
					<p class='item_name' data-http_details_page='mvprofi.php' data-form_header="гримёрный стол MV profi">Гримёрный стол MV profi</p>
					<p>100х160х40 см</p>
					<span class='price'><p><b>19300</b> <del class='gray'>24300<del></p></span>
					<button class='red_button details'>Подробнее</button>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
				</div>
			</div>
	
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
						<div class='catalog_item'>
							<img src='img/zerkalo20.jpg'>
							<p class='green'><b>в наличии</b></p>
							<p class='green'>оплата после получения и проверки</p>
							<p class='item_name' data-http_details_page='screen.php' data-form_header="ширму">Ширма</p>
							<p>120х180 см</p>
							<span class='price'><p><b>8790</b> <del class='gray'>12300<del></p></span>
							<button class='red_button details'>Подробнее</button>
							<a href="#myModal2" class="btn" data-toggle="modal"><button class='white_button zakaz'>Заказать</button></a>
						</div>
			</div>
	</div>
	
	</div>
	
	<div id='zayavka'>
		
		<div>
			<h1>Не нашли то, что искали?</h1>
			<h3>С радостью принимаем индивидуальные заказы,не увеличивая стоимость за уникальность.</h3>
			<h3>Оставьте заявку на бесплатный расчёт по Вашим размерам.</h3>	
		</div>
		
		<form method="post" action="./mail1.php" id="contactForm">
				<input placeholder='Ваш телефон' type="tel" id="phone" name="phone" />
				<span id="submit" class="input">
					<label for="submit"></label>		 
					<input id="send" type="submit" value="Перезвоните мне!" class='red_button details' />
				</span>
            </form>
	</div>
	
	<h1>Честные отзывы наших клиентов</h1>
	<div id='slider_otzyvov'>
	<!-- Карусель -->
	<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
		<!-- Индикаторы для карусели -->
		<ol class="carousel-indicators">
			<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
			<li data-target="#myCarousel" data-slide-to="6" ></li>
			<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
			<li data-target="#myCarousel" data-slide-to="7"></li>
			<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
			<li data-target="#myCarousel" data-slide-to="8"></li>
			<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
			<li data-target="#myCarousel" data-slide-to="9" ></li>
			<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
			<li data-target="#myCarousel" data-slide-to="10"></li>
			<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
			<li data-target="#myCarousel" data-slide-to="11"></li>
			<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
			<li data-target="#myCarousel" data-slide-to="12" ></li>
			<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
			<li data-target="#myCarousel" data-slide-to="13"></li>
			
		</ol>
	<!-- Слайды карусели -->
	<div class="carousel-inner">
	<!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
	<div class="active item">
		<img class='center-block img-circle' src="img/otzyv_img1.jpg">
		<p class='client_text'>Теперь у меня есть гримерное зеркало!!!! Безумно счастлива новому приобретению, зеркало удачно вписалось в интерьер спальни. Ребятам, большое спасибо, за вежливое!!!! отношение, помощь в выборе цвета и размеров столика. Осталось купить красивый пуфик)))</p>
		<p class='client_name'>Юлия Мишина</p>
		<a class='client_vk' href='https://vk.com/mishinayuliya1'>vk.com/mishinayuliya1</a>
		<p class='client_profession'>фитнес-тренер</p>
	</div>

	<!-- Слайд №2 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img2.jpg">
			<p class='client_text'>Огромное спасибо за невероятно красивое зеркало. Все было сделано очень качественно, и профессионально. Несмотря на то,что зеркало было сделано по индивидуальным параметрам, это никак не повлияло на сроки доставки. Особенно порадовала цена, самая низкая, которую я нашла, а качество на высшем уровне. Было очень приятно с Вами работать.</p>
			<p class='client_name'>Элеонора Мещерякова</p>
			<a class='client_vk' href='vk.com/id382343099'>vk.com/id382343099</a>
			<p class='client_profession'>визажист</p>
	</div>
	
	<!-- Слайд №3 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img3.jpg">
			<p class='client_text'>Сбылась мечта))Спасибо огромное за такую красоту))Кто еще мечтает о такой красоте,рекомендую)) Качество, обслуживание,сроки все просто на отлично!</p>
			<p class='client_name'>Екатерина Окуличева</p>
			<a class='client_vk' href='vk.com/e.okulicheva'>vk.com/e.okulicheva</a>
			<p class='client_profession'>косметолог</p>
	</div>
	
	<!-- Слайд №4 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img4.jpg">
			<p class='client_text'>Спасибо милому за такую прелесть)))) теперь собираться "в люди" мне будет куда приятнее о таком зеркале мечтает каждая девочка!!! Спасибо-спасибо</p>
			<p class='client_name'>Валентина Савилова</p>
			<a class='client_vk' href='vk.com/valya_trish'>vk.com/valya_trish</a>
			<p class='client_profession'>мастер по маникюру</p>
	</div>
	
	<!-- Слайд №5 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img5.jpg">
			<p class='client_text'>Спасибо вам за такой замечательный предмет интерьера. Здесь всё-и красиво и удобно и модно и стильно,клиентам очень нравится. Качество на высоте,сделано с душой,как говорится</p>
			<p class='client_name'>Елена Сергеевна</p>
			<a class='client_vk' href='vk.com/id407065839'>vk.com/id407065839</a>
			<p class='client_profession'>визажист</p>
	</div>
	
	<!-- Слайд №6 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img6.jpg">
			<p class='client_text'>Невероятно огромное спасибо за такое роскошнейшее зеркало! Это не просто зеркало для обеспечения идеального макияжа, но ещё и отличный свет для делания качественных фотографий)Белый цвет отлично вписался в интерьер комнаты. Даже можно сказать, что это зеркало -неотъемлемая составляющая моей комнаты))Ещё раз большущее спасибо!</p>
			<p class='client_name'>Юлия Соболева</p>
			<a class='client_vk' href='vk.com/id72902062'>vk.com/id72902062</a>
			<p class='client_profession'>модель</p>
	</div>
	
	<!-- Слайд №7 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img7.jpg">
			<p class='client_text'>Хочу сказать огромное спасибо за Вашу работу!! Это просто Сбыча Мечт! А вы с вашей командой,её исполнители! Не описать словами какая это круть! Просто огромное БЛАГОДАРЮ</p>
			<p class='client_name'>Анастасия Буглеева</p>
			<a class='client_vk' href='vk.com/id53142323'>vk.com/id53142323</a>
			<p class='client_profession'>молодая мама</p>
	</div>
	
	<!-- Слайд №8 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img8.jpg">
			<p class='client_text'>Я его как ребёнок ждала))) сразу все поменялось, уютней стало! Вы и ваша команда очень крутые ребята! Надеюсь у вас потом появится что-то ещё интересное и обязательно дополню свою коллекцию!Ещё раз ОГРОМНОЕ СПАСИБО! Я самый довольный из всех клиентов)))))</p>
			<p class='client_name'>Валерия Шильникова</p>
			<a class='client_vk' href='vk.com/beautifulhair2015'>vk.com/beautifulhair2015</a>
			<p class='client_profession'>Основатель студии красоты L`studio</p>
	</div>
	
	<!-- Слайд №9 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img9.jpg">
			<p class='client_text'>Теперь у меня есть самый лучший туалетный столик #мояпрелесть Спасибо большое @apulkin за терпение, профессионализм и честность. Вы учли все мои пожелания и предложения. Отдельное спасибо за приятную скидку, за задержку в несколько дней, безумно рада, что обратилась за столиком мечты именно к Вам. Он шикарен.</p>
			<p class='client_name'>Мария Баркалова</p>
			<a class='client_vk' href='vk.com/id105813492'>vk.com/id105813492</a>
	</div>
	
	<!-- Слайд №10 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img10.jpg">
			<p class='client_text'>Хочу выразить благодарность Вам, Андрей, и всей команде, кто принимал участие в исполнении моей маленькой мечты)))Теперь я обладательница прекрасного гримёрного зеркала! Смотреть в него сплошное удовольствие! Отличный свет, качественное исполнение, а главное быстрое изготовление заказа!А статья "Как убедить мужа купить вам зеркало" в Вашей группе оказалась очень полезной)</p>
			<p class='client_name'>Татьяна Дьяченко </p>
			<a class='client_vk' href='vk.com/tanya_tolina'>vk.com/tanya_tolina</a>
	</div>
	
	<!-- Слайд №11 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img11.jpg">
			<p class='client_text'>Хочу выразить вам огромную благодарность ! За безумную красоту ! Оно из- за дня в день поднимает не только мое настроение ,но и настроение моих клиентов ! Очень рада что обратилась к Вам !!! Процветания Вам !!!</p>
			<p class='client_name'>Светлана Косинова </p>
			<a class='client_vk' href='vk.com/id389012014'>vk.com/id389012014</a>
			<p class='client_profession'>парикмахер</p>
	</div>
	
	<!-- Слайд №12 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img12.jpg">
			<p class='client_text'>Хочу поделиться радостью! У меня теперь есть потрясающий макияжный столик Мечта каждой девушки и женщины!Всё сделано на высшем уровне! Очень качественно, красиво, практично! Делали стол по моему хотению В магазинах есть готовые модели макияжных столиков, но согласитесь, что такой стол не всегда влезет туда, куда бы вы хотели его поставить, ну и конечно, у них их не будет такого волшебного, голливудского освещения! А так же, вы можете выбрать цвет, который вписался бы в Ваш интерьер.У меня растёт сынок, и приходит время когда он проявляет желание везде залесть, всё потрогать. Т.к. в столе хранится разного рода косметика, там, ещё хранятся лаки, гели и т.д. что может взять малыш! Поэтому было решено поставить замочки. Советую всем мамочкам! Потому что деткам всегда интересно: "Что же там мама такое делает и что хранит... ".Всё мои желания были исполнены, я очень довольна! Приятно вести с Вами диалог, всегда тактичны и вежливы.Мечты сбываются, спасибо Вам ребята, и моему любимому супругу за такой шикарный подарок!</p>
			<p class='client_name'>Мария Канашова</p>
			<a class='client_vk' href='vk.com/m.kanashova'>vk.com/m.kanashova</a>
			<p class='client_profession'>молодая мама</p>
	</div>
	
	<!-- Слайд №13 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img13.jpg">
			<p class='client_text'>Спасибо вам ещё раз огромное ! Зеркало просто бомба. Я ни капельки не пожалела, что купила его у вас</p>
			<p class='client_name'>Aelita Ginoble </p>
			<a class='client_vk' href='vk.com/id316845989'>vk.com/id316845989</a>
	</div>
	
	<!-- Слайд №14 -->
	<div class="item">
	<img class='center-block img-circle' src="img/otzyv_img14.jpg">
			<p class='client_text'>Я вообще в восторге))Очень уюта прибавляет дома) Сразу захотелось накраситься. Сидела как царица)) Волшебно))</p>
			<p class='client_name'>Анна Балуева</p>
			<a class='client_vk' href='vk.com/ann.balu'>vk.com/ann.balu</a>
	</div>
 
<!-- сюда добавляем еще код слайдера-->
 
</div>
<!-- Навигация для карусели -->
<!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
<a class="carousel-control left" href="#myCarousel" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
<a class="carousel-control right" href="#myCarousel" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span>
</a>
</div>

</div>	
	
	<div class='dostavka'>
	<h1>Доставляем быстро и аккуратно</h1>
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 dostavka_img">
						<div>
							<img src='img/dostavka_icon1.png'>
							<p><b>Быстро</b></p>
							<p>От 2-х до 7 дней в любую точку России.</p>
						</div>
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 dostavka_img">
						<div>
							<img src='img/dostavka_icon2.png'>
							<p><b>Надёжно</b></p>
							<p>Мы работаем с проверенными транспортными компаниями, упаковываем изделие в три слоя защитного материала и палетный борт, а также страхуем все отправления.</p>
						</div>
		</div>
		
		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 dostavka_img">
						<div>
							<img src='img/dostavka_icon3.png'>
							<p><b>Недорого</b></p>
							<p>Средняя стоимость доставки наших заказов составляет 1107 рублей. При заказе от 25 тыс. руб. доставка до Вашего города за наш счёт.</p>
						</div>
		</div>
	</div>
	
	<div>
		<h1>Как зеркало окажется у Вас</h1>
		<div class="o_dostavke">
				<img  src='img/icon1.jpg'>
				<div >
					<h3 class='o_dostavke'><b>Уточняем параметры изделия</b></h3>
					<p>Определяем размер изделия, цвет корпуса, количество лампочек и особые пожелания по заказу.</p>
					<p>от 3 минут до 1 дня</p>
				</div>
			</div>
			
			<div class="o_dostavke">
				<img  src='img/icon2.jpg'>
				<div >
					<h3><b>Договор</b></h3>
					<p>Заключаем договор со сроками поставки и нашими обязательствами.</p>
					<p>не больше 1 дня после первого этапа</p>
				</div>
			</div>
			
			<div class="o_dostavke">
				<img  src='img/icon3.jpg'>
				<div >
					<h3><b>Отправляем заказ в производство</b></h3>
					<p>Средний срок производства: 5 дней.</p>
				</div>
			</div>
			
			<div class="o_dostavke">
				<img  src='img/icon4.jpg'>
				<div >
					<h3><b>Доставка</b></h3>
					<p>Отправляем заказ аккуратной транспортной компанией.</p>
					<p>доставка от 3 до 7 дней</p>
				</div>
			</div>
			
			<div class="o_dostavke">
				<img  src='img/icon5.jpg'>
				<div >
					<h3><b>Получение и проверка</b></h3>
					<p>После доставки изделия транспортной компанией, Вы проверяете и, если Вам всё нравится, переходим к следующему этапу.</p>
					<p>в течение 1 дня</p>
				</div>
			</div>
			
			<div class="o_dostavke">
				<img  src='img/icon6.jpg'>
				<div >
					<h3><b>Оплата</b></h3>
					<p>Мы доверяем Вам, поэтому Вы платите всю сумму только после получения.</p>
					<p>в течение 3-х дней, после принятия изделия</p>
				</div>
			</div>
		  </div>
		 
		
		<div id='partners'>
		<div class="row">
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
			<h1>Станьте нашим идейным партнёром</h1>
			
			<h3>Предложите свою авторскую модель гримёрного зеркала или стола и она попадет в серийное производство, а Вы будете получать 5% с каждого проданного изделия Вашей модели. </h3>

			<p>плюс Ваше имя на металлическом шильде</p>
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 thumb">
			<img  src='img/maria_setkova.jpg'>
		</div>
		</div>
		</div>
	</div>
	
	
</main>

<?php include "footer.php"; ?>

<script src='jquery-3.3.1.js'></script>
<script src='js/button_zakaz_handler.js'></script>

<script>

$('button.details').click(function() {
    document.location.href = "http:"+$(this).closest('.catalog_item').find('.item_name').data('http_details_page');
});

</script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>    

  </body>
</html>
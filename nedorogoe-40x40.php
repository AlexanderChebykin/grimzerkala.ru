<?php include "head.php"; ?>
<?php include "navigation.php"; ?>
<?php include "form_myModal.php"; ?>
<div class='container'>

<div 
<div class="row" id='details'>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " >
				<img  src='img/details1_img7.jpg'>
				<img  src='img/details1_img8.jpg'>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " >
				<h1>Недорогое гримёрное зеркало</h1>
				
				<p>40х40 см</p>
				<span class='price'><p><b>3500 руб. </b> <del class='gray'>5500 руб.<del></p></span>
				
				<div>
					<p>Самое компактное и недорогое гримёрное зеркало из нашей коллекции. С лёгкостью разместится на любом столе, но при этом будет являться незаменимым помощником в ежедневном процессе нанесения макияжа. </p>
				</div>
				
				<div>
					<p>Габаритный размер (ШхВ): 40х40 см.</p>
				</div>
				
				<div>
					<p>Цвет корпуса: белый;
						Материал: матовый ДСП;
						Количество лампочек: 6 шт.;
						Тип лампочек: LED 3 или 5 Вт;
						Свет: белый дневной (4000К или 4200К).</p>
				</div>
				
				<div>
					<p>ВНИМАНИЕ!</p>
					<p>- Лампы не входят в стоимость.</p>
				</div>
				
				<div>
					<p>Возможно изготовление изделия с изменением следующих параметров:</p>
					<p>- размер;</p>
					<p>- количество ящиков;</p>
					<p>- количество перегородок в верхнем ящике;</p>
					<p>- цвет корпуса и кромки;</p>
					<p>- количество ламп;</p>
					<p>- фактура (матовая, глянцевая, с имитацией дерева).</p>
				</div>
				
				<?php include "repeating_text.php"; ?>
				
				
				<div class='catalog_item'>		
					<p class='item_name'  data-form_header="гримёрное зеркало"></p>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='red_button zakaz' id='btn_zakaz_in_details'>Заказать</button></a>
				</div>
				
			</div>		
</div>
</div>

<?php include "footer.php"; ?>
<script src='jquery-3.3.1.js'></script>
 <script src="js/bootstrap.js"></script> 

 <script src='js/button_zakaz_handler.js'></script>
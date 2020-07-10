<?php include "head.php"; ?>
<?php include "navigation.php"; ?>
<?php include "form_myModal.php"; ?>
<div class='container'>

<div 
<div class="row" id='details'>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " >
				<img  src='img/details1_img3.jpg'>
				<img  src='img/details1_img4.jpg'>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " >
				<h1>Гримёрный стол</h1>
				
				<p>70х160х40</p>
				<span class='price'><p><b>9200 руб. </b> <del class='gray'> 12500 руб.<del></p></span>
				
				<div>
					<p>Гримёрный стол с зеркалом и одним ящиком. Наша самая популярная модель. Прекрасно подходит для домашнего использования, с легкостью вписывается в любой интерьер и вмещает в себя стандартный "боекомплект" косметики самой изысканной модницы</p>
				</div>
				
				<div>
					<p>Габаритный размер (ШхВхГ): 70х160х40 см.</p>
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
					<p class='item_name'  data-form_header="Гримёрный стол"></p>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='red_button zakaz' id='btn_zakaz_in_details'>Заказать</button></a>
				</div>
				
			</div>		
</div>
</div>

<?php include "footer.php"; ?>
<script src='jquery-3.3.1.js'></script>
 <script src="js/bootstrap.js"></script> 

 <script src='js/button_zakaz_handler.js'></script>
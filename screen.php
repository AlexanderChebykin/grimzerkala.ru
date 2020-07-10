<?php include "head.php"; ?>
<?php include "navigation.php"; ?>
<?php include "form_myModal.php"; ?>
<div class='container'>

<div 
<div class="row" id='details'>
		  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " >
				<img  src='img/details1_img39.jpg'>
				<img  src='img/details1_img40.jpg'>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 " >
				<h1>Ширма</h1>
				
				<p>120х180 см</p>
				<span class='price'><p><b>8790 руб. </b> <del class='gray'> 12300 руб.<del></p></span>
				
				<div>
					<p>Ширма, состоящая из трёх модулей. Возможно изготовление из любого количества модулей, различных цветов и размеров.</p>
				</div>
				
				<div>
					<p>Габаритный размер (ШхВ): 120х180 см;</p>
				</div>
				<div>
					<p>Цвет корпуса: белый;
Материал: массив сосны.</p>
				</div>
				<div>
					<p>ВНИМАНИЕ!</p>
					<p>- Лампы не входят в стоимость.</p>
				</div>
				
				<div>
					<p>Возможно изготовление изделия с изменением следующих параметров:
- размер;
- количество модулей;
- цвет изделия.</p>
				</div>
				
				<?php include "repeating_text.php"; ?>
				
				
				<div class='catalog_item'>		
					<p class='item_name'  data-form_header="Ширму"></p>
					<a href="#myModal2" class="btn" data-toggle="modal"><button class='red_button zakaz' id='btn_zakaz_in_details'>Заказать</button></a>
				</div>
				
			</div>		
</div>
</div>

<?php include "footer.php"; ?>
<script src='jquery-3.3.1.js'></script>
 <script src="js/bootstrap.js"></script> 

 <script src='js/button_zakaz_handler.js'></script>
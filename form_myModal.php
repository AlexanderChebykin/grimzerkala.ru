<form method="post" action="./mail.php" id="myModal" class="modal fade">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h1>Заполните форму ниже и мы свяжемся с Вами</h1>
				<input placeholder='Ваше имя' type="text" id="name" name="name" />
				<input placeholder='Ваш телефон' type="tel" id="phone" name="phone" />
				<span id="submit" class="input">
					<label for="submit"></label>		 
					<input id="send" type="submit" value="Отправить" class='red_button' />
				</span>
 </form>
 
 <form method="post" action="./mail2.php" id="myModal2" class="modal fade">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h1 id='form_header'></h1>
				<input  type="text" id="product_name" name="product_name" hidden />
				<input placeholder='Ваше имя' type="text" id="name" name="name" />
				<input placeholder='Ваш телефон' type="tel" id="phone" name="phone" />
				<input placeholder='Ваш email' type="email" id="mail" name="mail" />
				<span id="submit" class="input">
					<label for="submit"></label>		 
					<input id="send" type="submit" value="Заказать" class='red_button' />
				</span>
    </form>
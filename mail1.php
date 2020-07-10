<?php
$to = "chebykin.alexandr@gmail.com"; // емайл получателя данных из формы 
$tema = "Форма обратной связи c сайта zerkalo.ru"; // тема полученного емайла 
$message = "Телефон: ".$_POST['phone']."<br>";//присвоить переменной значение, полученное из формы name=name
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
header('Location: http:/index.php');
?>

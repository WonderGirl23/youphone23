<?php
	if (!empty($_POST) && !empty(trim($_POST['phone']))) {
		//var_dump($_POST['phone']);
		$to = 'forgetmenot2311@gmail.com';
		$subject = 'Отправка формы';
		$message = 'Город: '.$_POST['city']."\r\n".
				   'Имя: '.$_POST['name']."\r\n". 
				   'телефон: '.$_POST['phone']."\r\n".
				   'цена: '.$_POST['price']."\r\n". 
				   'email: '.$_POST['email'];
		if (mail($to, $subject, $message)){
			$result = '<div class="success">Ваш заказ принят! Спасибо</div>';
	} else {
		$result = '<div class="error">Извините, Ваш заказ не отправлен. Повторите отправку</div>';
	}
	} else if (!empty($_POST)){
		if (empty($_post['phone'])){
		$result = '<div class="error">Заполните, пожалуйста, поле "Напишите Ваш телефон"</div>';
		}
	}
 	//&& empty($_POST['phone'])
	//$_POST['phone'] = trim($_POST['phone']);
	//$phone = $_POST['phone'];
	//$phone = trim($phone);
		
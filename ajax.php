<?php
	if (!empty($_POST) && !empty(trim($_POST['phone']))) {
		//var_dump($_POST['phone']);
		$to = 'forgetmenot2311@gmail.com';
		$subject = 'Отправка формы';
		$message = 'Имя: '.$_POST['name']."\r\n". 
				   'телефон: '.$_POST['phone']."\r\n";
		if (mail($to, $subject, $message)){
			$result = '<div class="success">Ваш заказ принят! Спасибо</div>';
			echo 'ok';
	} else {
		$result = '<div class="error">Извините, Ваш заказ не отправлен. Повторите отправку</div>';
		echo $result;
	}
	} else if (!empty($_POST)){
		if (empty(trim($_POST['phone']))){
		$result = '<div class="error">Заполните, пожалуйста, поле "Напишите Ваш телефон"</div>';
		echo $result;
		}
	}
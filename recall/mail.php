<?php




		$message = "Имя: {$_POST['name']}<br>"; // добавляем имя в текст
		$message .= "Телефон: {$_POST['phone']}"; // добавляем телефон в текст
		$em = $_POST['email'];



		require 'phpmailer/PHPMailerAutoload.php';

		$mail = new PHPMailer;
		$mail->isSMTP();

		$mail->Host = 'smtp.mail.ru';
		$mail->SMTPAuth = true;
		$mail->Username = 'barotov.asadbek@mail.ru'; // логин от вашей почты
		$mail->Password = 'your password'; // пароль от почтового ящика
		$mail->SMTPSecure = 'ssl';
		$mail->Port = '465';
		$mail->CharSet = 'UTF-8';
		$mail->From = 'barotov.asadbek@mail.ru';
		$mail->FromName = 'asad';
		$mail->addAddress($em,);
		$mail->isHTML(true);
		$mail->Subject = 'hi';
		$mail->Body = $message;

		if( $mail->send() ){
			echo '<p style="color: green;">Your message has been send</p>';
		}else{
			echo '<p style="color: red;">Error!</p>';
}
<?php 
	require '../includes/config.php';
	print_r($_POST);
	function sendMail($to, $text){
			$headers  = "Content-type: text/html; charset=windows-1251 \r\n"; 
			$headers .= "From: ". $config['sender_email'] ."\r\n"; 
			$headers .= "Reply-To: ". $config['sender_email'] ."\r\n";

			mail($to, "Новый заказ", $text, $headers);
		}
?>
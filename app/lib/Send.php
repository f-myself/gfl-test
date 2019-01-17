<?php

require "app/config/config.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
	$book = strip_tags(trim($_POST['book']));
	$name = strip_tags(trim($_POST['name']));
	$address = strip_tags(trim($_POST['address']));
	$quantity = strip_tags(trim($_POST['quantity']));

	$msg = '';

	if($book) {
		$msg .= 'Книга: ' . $book . "\n";
	}

	if($name) {
		$msg .= 'ФИО: ' . $name . "\n";
	}

	if($address) {
		$msg .= 'Адрес: ' . $address . "\n";
	}

	if($quantity) {
		$msg .= 'Количество: ' . $quantity . "\n";
	}

	$subject='Тестовая заявка';
	$email='<gfl.test>';
	$send = mail (ADMIN_EMAIL, $subject, $msg,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
}
header("Location: ");
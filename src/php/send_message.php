<?php
	include 'functions.php';
	include 'message.php';

	if ($_POST) { 
		$name = clean_variable($_POST["name"]);
		$email = clean_variable($_POST["email"]);
		$subject = clean_variable($_POST["subject"]);
		$message = clean_variable($_POST["message"]);

		$new_message = new Message();
		$new_message->Init($email, $subject, $name, $message);
		$new_message->Send();

	}
	
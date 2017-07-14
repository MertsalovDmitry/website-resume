<?php
	class Message
	{
		private $email_from;
		private $email_to;
		private $subject;
		private $name;
		private $message;
		private $charset_data;
		private $charset_send;
		private $type;
		private $headers;
		
		function __construct()
		{
			$this->email_to = 'ХХХХХХХ@gmail.com';
			$this->charset_data = 'UTF-8';
			$this->charset_send = 'windows-1251';
			$this->type = 'text/plain';
			$this->message = "Letter from mysite\r\n";
		}

		function Init ($email_from, $subject, $name, $message)
		{
			$this->email_from = $email_from;
			$this->subject = $subject;
			$this->name = $name;
			$this->message .= $this->name." wrote:\r\n".$message;
			$this->headers = "MIME-Version: 1.0\r\n";
			$this->headers  .= "Content-type:".$this->type."; charset=".$this->charset_data."\r\n";
			$this->headers .= "From: ".$this->email_from."\r\n";
			$this->headers .= "Reply-To: ".$this->email_from."\r\n";
			$this->headers .= 'X-Mailer: PHP/'.phpversion();

		}

		 function Send ()
		{
			mail($this->email_to, $this->subject, $this->message, $this->headers);
		}
	}
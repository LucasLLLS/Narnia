<?php

	$name 		= $_GET['name'];
	$email 		= $_GET['email'];
	$phone		= $_GET['phone'];
	$subject 	= $_GET['subject'];
	$message 	= $_GET['message'];

	if(empty($name) || empty($email) || empty($subject) || empty($message)){
		echo 'error';
	}else{
		
		if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo 'error email';
			die();
		}

		$email_remetente 	= "contato@lucaslellis.com";
		$email_reply 		= $email; 
		$email_assunto 		= $subject;
		$email_destinatario	= "llellismachado@hotmail.com";

		$email_conteudo = "Nome = $name \n"; 
		$email_conteudo .= "Email = $email \n";
		$email_conteudo .= "Telefone = $phone \n";
		$email_conteudo .= "Assunto = $subject \n";  
		$email_conteudo .= "Mensagem = $message \n"; 

		$email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ));

		if (mail($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
					echo "success"; 
					} 
			else{ 
					echo "fail"; 
				} 

	}
<?php
// Campos do formulário de contato
$nome = $_POST['name'];
$telefone = $_POST['telefone'];
$emailUsu= $_POST['emailUsu'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['textarea1'];


$email = 'solidariuni.contato@gmail.com';
$corpo = 'Nome: '.$nome.'<br/>Telefone: '.$telefone.'<br/>E-mail: '.$emailUsu.'<br/>Mensagem: '.$mensagem;

include 'PHPMailer.php'; 
include 'Exception.php';
include 'SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
$mail = new PHPMailer(true);

try{
	$mail->SMTPDebug = 0; //Enable verbose output 0,1, 2
	$mail->isSMTP();  //Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  
	$mail->SMTPAuth = true;  //Enable SMTP authentication
	$mail->Username = 'ales.toddynho@gmail.com';  //SMTP username
	$mail->Password = 'toddynho';  //SMTP password
	$mail->SMTPSecure = 'tls';  //Enable TLS encryption,`ssl`also accepted  
	$mail->Port = 587;
	$mail->setFrom('ales.toddynho@gmail.com','Cliente SolidariUni');
	$mail->addAddress($email,$nome);
	$mail->isHTML(true);  //Formato Html	
	$mail->Subject = $assunto;
	$mail->Body = $corpo; //Mensagem
	$mail->send();
	
	header('location:../index.php?ErrorInfo=false');
	

}catch(exception $e){
	header('location:../index.php?ErrorInfo=true');
	//echo'<Erro no envio>. Mailer Error: ', $mail->ErrorInfo;
}

?>
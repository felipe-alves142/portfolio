<?php
//Colocar o fuso do local
date_default_timezone_set("America/Sao_Paulo");
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if($_POST){
    $nome = !empty($_POST["nome"]) ? $_POST["nome"]:"Não Informado";
    $email = !empty($_POST["email"]) ? trim($_POST["email"]) :"Não Informado";
    $mensagem = !empty($_POST["mensagem"])? trim($_POST["mensagem"]) : "Não Informado";
    $data = date("d/m/Y H:i:s");

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'felipe.alves1990a@gmail.com';
    $mail->Password = "121243kx";
    $mail->Port = 587;

    $mail->setFrom('felipe.alves1990a@gmail.com');
    $mail->addAddress('felipe.alves1990a@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = '';
    $mail->Body = "Nome:{$nome}<br>
    Email:{$email}<br>
    Mensagem:{$mensagem}
    Data/Hora:{$data}
    ";

    if($mail->send()) {
    echo 'Email enviado com sucesso.';
    } else {
    echo 'Email nao enviado. Tente clonar na sua máquina ou só me mande um email fora do portifólio';
    }
}else{
    echo "Email não enviado: Informar email e mensagem";
}

// } catch (Exception $e) {
//  	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
//  }
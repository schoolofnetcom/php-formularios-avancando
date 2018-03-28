<?php

$to = 'erik@erik.com';
$subject = 'Email de teste com PHP';
$message = "
<p><strong>Nome</strong>: {$nome}</p>
<p><strong>URL</strong>: {$url}</p>
<p><strong>Email</strong>: {$email}</p>
<p><strong>Mensagem</strong>: {$descricao}</p>
";

$additional_headers = 'From: ' . $email . '\r\n';
$additional_headers .= 'Reply-To: ' . $email . '\r\n';
$additional_headers .= 'X-Mailer: ' . phpversion();

if (mail($to, $subject, $message, $additional_headers)) {
    die('Ok, email enviado');
} else {
    die('Falha ao enviar');
}

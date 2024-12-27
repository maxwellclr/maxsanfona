<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $to = $data['email']; 
    $subject = $data['subject'];
    $message = $data['message'];

    // Configurar os cabeçalhos
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "From: Assistencia@maxsanfona.com" . "\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

    // Enviar o e-mail
    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }
} else {
    echo "Dados incompletos.";
}
?>

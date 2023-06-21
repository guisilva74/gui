<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $destinatario = 'agnaldosilva@sapo.pt'; // Substitua pelo seu endereço de e-mail

    $assunto = 'Formulário de Contato';
    $corpo = "Nome: $nome\nE-mail: $email\n\nMensagem:\n$mensagem";

    $headers = "From: $email";

    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Erro ao enviar o e-mail.";
    }

    
// Definir configurações SMTP e smtp_port
ini_set('SMTP', 'servidor_smtp');
ini_set('smtp_port', `porta_smtp`);

// Resto do código do envio de e-mail


}
?>

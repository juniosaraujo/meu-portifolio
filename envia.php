<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura e sanitiza os dados do formulário
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    $telefone = htmlspecialchars(trim($_POST['telefone']));
    $mensagem = htmlspecialchars(trim($_POST['mensagem']));

    // Verifica se todos os campos estão preenchidos corretamente
    if ($nome && $email && $telefone && $mensagem) {
        // Destinatário
        $para = 'junio.araujo085@gmail.com';

        // Assunto do e-mail
        $assunto = 'Contato do Formulário de Portfólio';

        // Corpo do e-mail
        $corpo = "Nome: $nome\n";
        $corpo .= "E-mail: $email\n";
        $corpo .= "Telefone: $telefone\n";
        $corpo .= "Mensagem:\n$mensagem";

        // Cabeçalhos do e-mail
        $cabecalhos = "From: $email\r\n";
        $cabecalhos .= "Reply-To: $email\r\n";
        $cabecalhos .= "X-Mailer: PHP/" . phpversion();

        // Envia o e-mail
        if (mail($para, $assunto, $corpo, $cabecalhos)) {
            echo "E-mail enviado com sucesso!";
        } else {
            echo "Erro ao enviar o e-mail.";
        }
    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
}
?>


<? php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);
    $mensagem = addslashes($_POST['mensagem']);

    $para = "junio.araujo085@gmail.com";
    $assunto = "Contato Portifólio"

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

    $cabeca = "From: juniosa7@gmail.com". "\n"."Replay-to: ".$email."\n"."X=Master:PHP/".version();

    if (mail($para,$assunto,$corpo,$cabeca)){
        echo("e-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email");

    }
   
    
?>

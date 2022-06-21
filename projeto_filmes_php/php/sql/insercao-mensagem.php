<?php

    $email = $_POST['txEmail'];
    $nome = $_POST['txNome'];
    $tel = $_POST['txTel'];
    $assunto = $_POST['txAss'];
    $mensagem= $_POST['txMsg'];


    include("conexao-bd.php");

    $stmt = $pdo->prepare("insert into mensagem values(null,'$nome','$email','$assunto','$mensagem','$tel');");	
    $stmt ->execute();

    header("location:http://localhost/projetos/projeto_filmes_php/php/contato.php");

?>
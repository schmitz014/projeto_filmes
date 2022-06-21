<?php

    $email = $_POST['txEmail'];
    $user = $_POST['txUser'];
    $senha = $_POST['txSenha'];


    include("conexao-bd.php");

    $stmt = $pdo->prepare("insert into usuarios values(null,'$email','$user','$senha');");	
    $stmt = $pdo->prepare("create table meus_filmes(idmeus_filmes int not null, fk_idmeusfilmes foreign key references filmes)default charset utf-8;");	
    $stmt ->execute();

    header("location:http://localhost/projetos/projeto_filmes_php/php/cadastro.php");

?>
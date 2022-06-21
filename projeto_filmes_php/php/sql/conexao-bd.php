<?php
    $servidor = "localhost";
    $bd = "site_meus_filmes";
    $usuario = "root";
    $senha = "";

    global $pdo;

    $pdo = new PDO("mysql:host=$servidor;dbname=$bd",$usuario,$senha);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Filmes</title>
        <link rel="stylesheet" href="css/filmes.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kdam+Thmor+Pro&display=swap');
        </style>
    </head>

    <header>
        <div class="all-header">
            <p><b>MEUS FILMES</b></p>
            <a href="logout.php">Sair</a>
            <a href="contato-login.php">Contato</a>
            <a href="desenvolvedores-login.php">Desenvolvedor</a>
            <a class="activo" href="meus-filmes.php">Meus Filmes</a>
            <a href="index-login.php">Filmes Recomendados</a>
        </div>
    </header>

    <body>

    <section>
            <div>
                <h1 id=cabecalho>
                   Aqui está sua lista de filmes para mais tarde...
                </h1>
            </div>
        </section>

        <section>

        <div class="gallery">
                <a target="_blank" href="sinopses/uma-odisseia.php">
                    <img src="img/2001-odisseia.jpg">
                </a>
                <div class="desc"><p><b>2001: Uma odisséia no espaço</b></p></div>
            </div>

            <div class="gallery">
                <a target="_blank" href="sinopses/sinopse-her.php">
                    <img src="img/her.jpg">
                </a>
                <div class="desc"><p><b>Ela</b></p></div>
            </div>

        </section>

    </body>

<footer>
        <div>
            <img src="img/meus-filmes-logo.png">
        </div>

        <div class="desc-footer">
            <p>Melhores Filmes - 2022, Todos os Direitos Reservados.</p> 
            <p><a id="autor" href="pedroschmitz0000@gmail.com"> Por: Pedro Schmitz</a></p>
        </div>

    </footer>
</html>
<?php
    session_start();

    if(!isset($_SESSION["autorizacao"])==true){
        unset($_SESSION["autorizacao"]);
        session_destroy();
        header("location:index.php");
    }
?>
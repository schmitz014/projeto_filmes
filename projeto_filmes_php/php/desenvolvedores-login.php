<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Desenvolvedor</title>
        <link rel="stylesheet" href="css/desenvolvedores.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kdam+Thmor+Pro&display=swap');
        </style>
    </head>

    <header>
        <div class="all-header">
            <p><b>MEUS FILMES</b></p>
            <a href="logout.php">Sair</a>
            <a href="contato-login.php">Contato</a>
            <a class="activo" href="desenvolvedores-login.php">Desenvolvedor</a>
            <a href="meus-filmes.php">Meus Filmes</a>
            <a href="index-login.php">Filmes Recomendados</a>
        </div>
    </header>

    <body>
        <section>  
            <div class="perfil">
                <div class="card">
                    <img src="img/desenvolvedor-foto.jpeg">
                        <div class="desc">
                            <a href="https://www.instagram.com/livelikeschmitz/"><h4><b>Pedro Schmitz</b></h4></a>
                            <p>Estudante de Desenvolvimento de Sistemas na Etec Camargo Aranha.</p>
                        </div>
                </div>
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
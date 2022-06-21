<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Painel</title>
        <link rel="stylesheet" href="css/painel.css">
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
            <a href="meus-filmes.php">Meus Filmes</a>
            <a href="index-login.php">Filmes Recomendados</a>
        </div>
    </header>

    <body>
    <?php
        session_start();

        if(isset($_SESSION["autorizacao"])==false){
            unset($_SESSION["autorizacao"]);
            session_destroy();
            header("location:index.php");
        }else{
            $usuario = $_SESSION['username'];
            echo "<h1>Bem-vindo $usuario!</h1>
            <p>Continue navegando por novos filmes!</p>";
    }

?>
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


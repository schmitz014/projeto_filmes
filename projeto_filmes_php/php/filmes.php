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
            <a href="contato.php"> Contato</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="login.php">Login</a>
            <a href="desenvolvedores.php"> Desenvolvedor</a>
            <a class="activo" href="Filmes.php"> Filmes</a>
            <a href="index.php">Filmes Recomendados</a>
        </div>
    </header>

    <body>

        <section>
            <div id=cabecalho>
                <h1>Procure aqui os filmes que você deseja saber mais:</h1>
            </div>

        </section>

        <section>
            <form class="busca" method="get" action="sql/procurar.php">
                <input type="text" placeholder="Procurar..." name="procurar_filme">
                <button type="submit"><i class="search1">Pesquisar</i></button>
            </form>
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
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="css/login.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kdam+Thmor+Pro&display=swap');
        </style>
    </head>

    <header>
        <div class="all-header">
            <p><b>MEUS FILMES</b></p>
            <a href="contato.php"> Contato</a>
            <a href="cadastro.php">Cadastrar</a>
            <a class="activo" href="login.php">Login</a>
            <a href="desenvolvedores.php"> Desenvolvedor</a>
            <a href="Filmes.php"> Filmes</a>
            <a href="index.php">Filmes Recomendados</a>
        </div>
    </header>

    <body>

        <form class="form1" method="post" action="login-verificacao.php">
            <div class="card">

            <div class="card-group">
                <label>Digite seu user:</label>
                <input type="text" name="txUser" />
            </div>

            <div class="card-group">
                <label>Digite sua senha:</label>
                <input type="password" name="txSenha" />
            </div>

            <div class="card-group btn">
				    <button type="submit" name="btnEnviar"><label>Enviar</label>
			</div>
        </form>

    </body>

    <footer>
        <div>
            <img id="logo" src="img/meus-filmes-logo.png">
        </div>

        <div class="desc-footer">
            <p>Melhores Filmes - 2022, Todos os Direitos Reservados.</p> 
            <p><a id="autor" href="pedroschmitz0000@gmail.com"> Por: Pedro Schmitz</a></p>
        </div>

    </footer>
</html>
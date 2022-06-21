<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Contato</title>
        <link rel="stylesheet" href="css/contato.css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kdam+Thmor+Pro&display=swap');
        </style>
    </head>

    <header>
        <div class="all-header">
            <p><b>MEUS FILMES</b></p>
            <a class="activo" href="contato.php"> Contato</a>
            <a href="cadastro.php">Cadastrar</a>
            <a href="login.php">Login</a>
            <a href="desenvolvedores.php"> Desenvolvedor</a>
            <a href="Filmes.php"> Filmes</a>
            <a href="index.php">Filmes Recomendados</a>
        </div>
    </header>

    <body>
    
        <form class="form1" method="post" action="sql/insercao-mensagem.php">
            <div class="card">
                <div class="card-group">
                    <label>Digite seu nome:</label>
                    <input type="text" name="txNome" placeholder="Digite seu nome:" />
                </div>

                <div class="card-group">
                    <label>Digite seu email:</label>
                    <input type="email" name="txEmail" required placeholder="xxxxxxx@xxxxxx.com" />
                </div>

                <div class="card-group">
                    <label>Digite seu número de telefone:</label>
                    <input type="tel" name="txTel" required placeholder="(xx) xxxxx-xxxx"/>
                </div>

                <div class="card-group">
                    <label>Digite o assunto (tema da mensagem):</label>
                    <input type="text" name="txAss" />
                </div>

                <div class="card-group">
                    <label>Digite sua mensagem:</label>
                    <input type="text" name="txMsg"/>
                </div>

                <div class="card-group btn">
				    <button type="submit" name="btnEnviar"><label>Enviar</label>
			    </div>
            </div>
        </form>

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

        
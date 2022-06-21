

<?php
    include("conexao-bd.php");

    if(!isset($_GET['procurar_filme'])){
        header("Location:http://localhost/projetos/projeto_filmes_php/php/Filmes.php");
    }

    $procurar_filme = "%".trim($_GET['procurar_filme'])."%";

    $stmt = $pdo -> prepare('SELECT * FROM `filmes` WHERE `nome_filme` like :nome');
    $stmt -> bindParam(':nome', $procurar_filme, PDO::PARAM_STR);
    $stmt -> execute();

    $resultados = $stmt -> fetchAll(PDO::FETCH_ASSOC);

    print_r($resultados);exit;
?>

<section>
    <body>
        <h2>Resultado da busca</h2>
        <?php
            if (count($resultados)) {
	            foreach($resultados as $Resultado) {

                echo "<td> $Resultado[nome] </td>"; 
                echo "<br />";
                }}else {
                echo "<td>Não foram encontrados resultados pelo termo buscado.</td>";
            }
        ?>
    </body>
</section>

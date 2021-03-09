<?php
try 
{
    // DATA SOURCE NAME
    $dsn = "mysql:host=localhost;dbname=sakila";

    // PHP Data Object = PDO
    $conexao = new PDO($dsn, "root", "@MySQL_dev_2020");

    $stmt = $conexao->prepare("SELECT film_id, title, release_year FROM film");
    $stmt->execute();

    $arr_filmes = $stmt->fetchAll(PDO::FETCH_CLASS);
    $qnt_filmes = count($arr_filmes);

} catch(Exception $e) {
    echo "Deu erro, o erro foi: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Comentário: notar a identação -->
    <title>Produtos e Serviços</title>
    <meta charset="utf-8" />
    <link href="estilos/estilos_site.css" rel="stylesheet" type="text/css" />
    <link href="estilos/estilos_tabela.css" rel="stylesheet" type="text/css" />
    
    
    <!-- <script src="js/comportamentos.js" type="text/javascript"></script> -->
</head>

<body>
    <header>
        <nav id="menu-cabecalho">
            <ul>
                <li> <a href="index.php">Inicial</a> </li>
                <li> <a href="sobre.php">Sobre</a> </li>
                <li> <a href="produtos-servicos.php">Produtos Serviços</a> </li>
                <li> <a href="contato.php">Contato</a> </li>
            </ul>
        </nav>
    </header>

    <main>

        <div id="corpo-tabela">    
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Lançamento (Ano)</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php for($i=0; $i<$qnt_filmes; $i++): ?>
                    <tr>
                        <td> <?= $arr_filmes[$i]->film_id ?> </td>
                        <td> <?= $arr_filmes[$i]->title ?> </td>
                        <td> <?= $arr_filmes[$i]->release_year ?> </td>
                    </tr> 
                    <?php endfor ?>

                </tbody>
            </table>
        </div>
        
    </main>
    <footer>
        rodapé.
    </footer>

    <!-- <p>
            <h1>Nome</h1>
            Meu nome é Tiago    
        </p>
        <p>
            <h2>Faculdade</h2>
            Estudo Web na Fatec
        </p> -->
</body>

</html>
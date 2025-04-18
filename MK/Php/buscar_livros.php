<?php
session_start();

if (isset($_GET['search'])) {
    $searchTerm = $_GET['search'];

    // Conexão com o banco de dados (substitua com suas próprias credenciais)
    $host = 'localhost';
    $dbname = 'trem';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Consulta para buscar os livros com base no termo de pesquisa
        $stmt = $pdo->prepare("SELECT * FROM cadastrarlivros WHERE titulo LIKE :searchTerm OR autor LIKE :searchTerm OR genero LIKE :searchTerm");
        $stmt->bindValue(':searchTerm', "%$searchTerm%");
        $stmt->execute();
        $livros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Exibir os resultados da pesquisa
        echo "<div class='container'>";
        if ($livros) {
            echo "<h2>Resultados da Pesquisa</h2>";
            foreach ($livros as $livro) {
                // Exibir informações do livro
                echo "<table>";
                echo "<tr><td><img src='" . $livro['imagem'] . "' alt='Capa do Livro'></td></tr>";
                echo "<tr><td><strong>Título:</strong> " . $livro['titulo'] . "</td></tr>";
                echo "<tr><td><strong>Autor:</strong> " . $livro['autor'] . "</td></tr>";
                echo "<tr><td><strong>Gênero:</strong> " . $livro['genero'] . "</td></tr>";
                echo "<tr><td><strong>Ano de Publicação:</strong> " . $livro['ano_publicacao'] . "</td></tr>";
                echo "<tr><td><strong>Descrição:</strong> " . $livro['descricao'] . "</td></tr>";
                echo "</table>";
            }
        } else {
            echo "<p class='no-books'>Nenhum livro encontrado.</p>";
        }
        echo "</div>";

    } catch (PDOException $e) {
        echo "Erro ao buscar livros: " . $e->getMessage();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/buscar.css">
    <title>Document</title>
</head>
<body>
  

<header>
    <!-----------------LOGO----------------->

<img class="logo" src="../img/logoo.jpeg" width="80px">

<h1>Abc Fanfiction</h1>
</header>

<!---------------------------------MENU---------------------------------->
<div class="barra">
<nav class="link">
<a href="../php/index.php">PAGINA INICIAL</a>
        <a href="../php/tags.php">TAGS</a>
        <a href="navegar.php">NAVEGAR</a>
        <a href="../php/historias.php">MINHAS HISTORIAS</a>
        <a href="../php/sobre.php">SOBRE</a>
      

</nav>
</div>



        
    
</body>
</html>

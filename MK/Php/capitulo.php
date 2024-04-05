
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/capitulo1.css">
    <title>Capítulo</title>
</head>
<body>

<header>
    <!-----------------LOGO----------------->

    <img class="logo" src="../img/logoo.jpeg" width="80px">

<h1>Abc Fanfiction</h1>


</header>
<div class="background-container">

<!---------------------------------MENU---------------------------------->
<div class="barra">


<nav class="link">
<a href="index.php">PAGINA INICIAL</a>
            <a href="../php/tags.php">TAGS</a>
        <a href="navegar.php">NAVEGAR</a>
        <a href="../php/historias.php">MINHAS HISTORIAS</a>
        <a href="../php/sobre.php">SOBRE</a>
        <div id="divBusca">

  <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
  <button id="btnBusca">Pesquisar</button>
</div>

</nav>
</div>
    

<main>
<div class="fundo">

<?php
session_start();

// Conexão com o banco de dados (substitua com suas próprias credenciais)
$host = 'localhost';
$dbname = 'trem';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
// Verifica se o ID do livro foi passado na URL
if (isset($_GET['id'])) {
    $livroId = $_GET['id'];

    // Consulta para obter os capítulos do livro
    $stmt = $pdo->prepare("SELECT * FROM capitulos WHERE livro_id = :livroId");
    $stmt->bindParam(':livroId', $livroId);
    $stmt->execute();
    $capitulos = $stmt->fetchAll();

    if ($capitulos) {
        echo "<h2>Capítulos</h2>";
        foreach ($capitulos as $capitulo) {
            echo "<h3>" . $capitulo['titulo'] . "</h3>";
            echo "<p>" . $capitulo['conteudo'] . "</p>";
        }
    } else {
        echo "<p>Não há capítulos disponíveis para este livro.</p>";
    }
} else {
    echo "<p>ID do livro não especificado.</p>";
}
} catch (PDOException $e) {
    die("Erro na conexão com o Banco de Dados: " . $e->getMessage());
}

?>
</div>




</main>
</body>
</html>

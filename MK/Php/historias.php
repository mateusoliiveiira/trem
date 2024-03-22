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
} catch (PDOException $e) {
    die("Erro na conexão com o Banco de Dados: " . $e->getMessage());
}

$stmt = $pdo->query("SELECT * FROM minhashistorias");
$stmt->execute();
$livros = $stmt->fetchAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/historia.css">
    <title>Minhas Historias</title>
</head>
<body>
    
<header>
    <!-----------------LOGO----------------->

    <img class="logo" src="../img/logoo.jpeg" width="80px">

<h1>Abc Fanfiction</h1>

</header>
<div class="background-container">
<div class="barra">
    

    <nav class="link">
    <a href="../php/index.php">PAGINA INICIAl</a>
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

<div class="fundo"></div>

<div class="barrita">

    <h1 class="ab"><a href="index.php"> Abc Fanfiction   </h1 > </a>
    <h1 class="e"><b> >  Gerenciar Minhas Histórias</h1>
        <h1 class="his"><b>  Gerenciar Histórias | Histórias Excluídas        </h1>
        <h1 class="ai"> Você ainda não postou nenhuma História?<a href="cadastrarmyhistoria.php"> Quer postar uma História?     </a>          </h1>
    <h2 class="que"> </h1>
</div>
<div style="position:absolute; left:20%; top:300px;">

    <?php if (!empty($livros)) : ?>
        <table class="livros-table">
            <thead>
                <!-- Seu cabeçalho da tabela aqui... -->
            </thead>
            <tbody>
                <?php foreach ($livros as $index => $livro) : ?>
                    <?php if ($index % 3 === 0) : ?>
                        <!-- Inicia uma nova linha a cada três livros -->
                        <tr class="livro-row">
                    <?php endif; ?>
                    <td class="livro" style="padding: 20px;"> <!-- Adiciona espaço entre os livros -->
                        <b><p><?= $livro['titulo'] ?></p></b>
                        <a href="#" onclick="emprestarLivro(<?= $livro['id'] ?>)">
                        <img style="max-width: 160px;" src="<?= $livro['imagem'] ?>">
                        </a>
                    </td>
                    <?php if (($index + 1) % 3 === 0 || ($index + 1) === count($livros)) : ?>
                        <!-- Fecha a linha a cada três livros ou no último livro -->
                        </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>Nenhum livro encontrado.</p>
    <?php endif; ?>
</div>


</main>

</body>
</html>
<script>
        function emprestarLivro(livroId) {
            // Adapte a URL de redirecionamento conforme necessário
            window.location.href = 'pagina_emprestimo1.php?id=' + livroId;
        }
    </script>
  
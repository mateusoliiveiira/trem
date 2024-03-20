
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

$stmt = $pdo->query("SELECT * FROM cadastrarlivros ");
$stmt->execute();
$livros = $stmt->fetchAll();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/navegar.css">
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
<a href="index.php">PAGINA INICIAL</a>
            <a href="../php/tags.php">TAGS</a>
        <a href="navegar.php">NAVEGAR</a>
        <a href="../php/tags.php">MINHAS HISTORIAS</a>
        <a href="../php/tags.php">SOBRE</a>
        <div id="divBusca">

  <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
  <button id="btnBusca">Pesquisar</button>
</div>

</nav>
</div>
<main>

<h1>BIBLIOTECA </h1>

</main>

<div class="background-container">
<div class="container">



<style>


</style>
<h2>Listar Livros</h2>

<?php if (!empty($livros)) : ?>
    <table>
        <thead>
            <tr>
                <th>Capa</th>
                <th>Título</th>
                <th>Autor</th>
                <th>Gênero</th>
                <th>Ano de Publicação</th>
                <th>Descrição</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livros as $livro) : ?>
                <tr>
                    <td><img style="max-width: 50px;" src="<?= $livro['imagem'] ?>"></td>
                    <td><?= $livro['titulo'] ?></td>
                    <td><?= $livro['autor'] ?></td>
                    <td><?= $livro['genero'] ?></td>
                    <td><?= $livro['ano_publicacao'] ?></td>
                    <td><?= $livro['descricao'] ?></td>
                    <td><a href="atualizarlivros.php?id=<?php echo $livro['id']; ?>">Atualizar Livro</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else : ?>
    <p>Nenhum livro encontrado.</p>
<?php endif; ?>


















</div>
</body>
</html>
<!------SCRIPT--------->
<script>
function confirmLogout() {
    var confirmLogout = confirm("Realmente que Sair dessa Pagina?");
    if (confirmLogout) {
        window.location.href = 'logout.php';
    }
}
</script>
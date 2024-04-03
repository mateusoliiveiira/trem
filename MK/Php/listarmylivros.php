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
    <title>Document</title>
</head>
<body>

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
    

<a class="pdf" href="pdf-historias.php">Imprimir</a>
</body>
</html>
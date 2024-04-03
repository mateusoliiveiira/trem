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
<style>
/* Estilo para a tabela de livros */
.livros-table {
    width: 100%;
    border-collapse: collapse;
}

.livros-table th,
.livros-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

.livros-table th {
    background-color: #f2f2f2;
}

/* Estilo para cada célula de livro */
.livro {
    width: 33.33%; /* Divide a largura igualmente entre três colunas */
}

/* Estilo para o título do livro */
.livro p {
    margin-top: 0;
    margin-bottom: 5px;
    font-weight: bold;
}

/* Estilo para a imagem do livro */
.livro img {
    max-width: 160px;
    height: auto;
    display: block;
    margin: 0 auto; /* Centraliza a imagem horizontalmente */
}

/* Estilo para o link de impressão */
.pdf {
    display: block;
    margin-top: 20px;
    text-align: center;
    text-decoration: none;
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.pdf:hover {
    background-color: #45a049;
}


</style>
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
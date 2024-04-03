<?php
session_start();
if($_SESSION ['permissao'] == 1){
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

$stmt = $pdo->query("SELECT * FROM  usuarioscadastrador ");
$stmt->execute();
$usuarios = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon-32x32.png" type="image/x-icon">
    <title>Listar Usuarios</title>
    <link rel="stylesheet" href="listarusuarios.css">
</head>

<body>
    <style>
body, h1, h2, p, table {
    margin: 0;
    padding: 0;
}

/* Apply a background color and some basic styling to the body */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

/* Style the container holding your content */
.container {
    max-width: 900px;
    margin:90px auto;
    padding: 20px;
    
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Style the heading */
h2 {
    color: #333;
}

/* Style the table */
table {
    width: 130%;
    border-collapse: collapse;
    margin-top: 20px;

   
}

/* Style table header */
thead {
    background-color: #eee;
}

th, td {
    padding: 1px;
    text-align: left;
}

/* Style alternating rows */
tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Style the link for updating a book */
a {
    text-decoration: none;
    color: #3498db;
}

a:hover {
    text-decoration: underline;
}

/* Style the "Cadastrar Novo usuario" link */
p a {
    display: inline-block;
    margin-top: 20px;
    padding: 10px;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
}

p a:hover {
    background-color: #2980b9;
}


</style>
    <div class="container">
        <h2>Listar Usuarios</h2>

        <?php if (!empty($usuarios)) : ?>
            <table>
                <thead>
                    <tr>
                    <th>Permissão</th>
                    <th>Usuário</th>
                    <th>Email</th>
                    <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <tr>
                            <td><img style="max-width: 50px;" src="<?= $usuario['imagem'] ?>"></td>
                            <td><?= $usuario['permissao'] ?></td>
                            <td><?= $usuario['usuario'] ?></td>
                            <td><?= $usuario['email'] ?></td>
                            <td><?= $usuario['ação'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>Nenhum usuario encontrado.</p>
        <?php endif; ?>

        <p><a href="cadastrarusuarios.php">Cadastrar Novo usuario</a></p>
        <a class="pdf" href="pdf.php">Imprimir</a>
    </div>
    
<?php
} else {
    header('Location: index.php');
}




?>
</body>

</html>
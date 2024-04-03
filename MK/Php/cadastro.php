<?php
session_start();

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = password_hash($_POST["senha"], PASSWORD_BCRYPT);
    $email = $_POST["email"];

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=trem", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão com o Banco de Dados: " . $e->getMessage());
    }

    // Verifica se o usuário já está cadastrado no banco de dados
    $stmt_check = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt_check->execute([$usuario]);

    if ($stmt_check->rowCount() > 0) {
        $mensagem = "Usuário já cadastrado. Escolha um nome de usuário diferente.";
    } else {
        // Insere os dados na tabela 'usuarios'
        $stmt_insert = $pdo->prepare("INSERT INTO usuarios (usuario, senha, email) VALUES (?, ?, ?)");
        $stmt_insert->execute([$usuario, $senha, $email]);

        if ($stmt_insert->rowCount() > 0) {
            $_SESSION["usuario"] = $usuario;
            $mensagem = "Usuário cadastrado com sucesso!";
            header("Location: index.php");
        } else {
            $mensagem = "Erro ao cadastrar o usuário. Tente novamente.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de login</title>
    <link rel="stylesheet" href="../Css/cadastro.css">
   
</head>
<body>
<div class="background-container">
    <img class="logo" src="../img/Gincanca-logo-complet.png" width="300px">
    <div class="container">
        <h1>Cadastrar</h1>
        <h2><?php echo $mensagem; ?></h2>

        <form method="post">
            <table>
                <tr>
                    <td><input type="text" name="usuario" placeholder="Nome de Usuário" required></td>
                </tr>
                <tr>
                    <td><input type="password" name="senha" placeholder="Senha" required></td>
                </tr>
                <tr>
                    <td><input type="email" name="email" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Cadastrar"></td>
                </tr>
            </table>
        </form>

        <h3>Já Tem Login? </h3>
       <h2> <a href="Login.php">Logar  </a> </h2>
        
    </div>
</div>
</body>
</html>

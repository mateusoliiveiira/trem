<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];
    //
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=trem", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Erro na conexão com o Banco de Dados: " . $e->getMessage());
    }

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt->execute([$usuario]);
    $user = $stmt->fetch();

    if ($user && password_verify($senha, $user["senha"])) {
        $_SESSION["usuario"] = $usuario;
        $_SESSION["permissao"] = $user['permissao'];

        if(  $_SESSION["permissao"] == "1"){
            header("location: admin.php");
        }else{
        header("location: index.php");
    }
    } else {
        echo "<script>alert('Login Falhou. Verifique suas credenciais.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
</head>

<body style="background: url('../img/background-corredor.png') no-repeat center center fixed; background-size: cover;">
    <!-----------------LOGO----------------->

<img class="logo" src="../img/Gincanca-logo-complet.png" width="300px">
    <h1>Login</h1>
<form method="post">
        <table>
            <tr>
                <td><input type="text" name="usuario" placeholder="Nome de Usuário" required></td>
            </tr>
            <tr>
                <td><input type="password" name="senha" placeholder="Senha" required></td>
            </tr>
            <tr>
                <td><input type="submit" value="Entrar"></td>
            </tr>
        </table>
    </form>

    <h2>Não tem conta? Se Cadatre Agora</h2>
    <a href="cadastro.php">Cadastrar</a>
</body>

</html>
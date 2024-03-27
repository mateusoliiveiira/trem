<?php
session_start();
if($_SESSION ['permissao'] == 1){
try {
    $pdo = new PDO("mysql:host=localhost;dbname=trem", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o Banco de Dados: " . $e->getMessage());
}

function cadastrarUsuario($pdo, $usuario, $senha, $email, $permissao)
{
    $stmt_check = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
    $stmt_check->execute([$usuario]);

    if ($stmt_check->rowCount() > 0) {
        return "Usuário já cadastrado. Escolha um nome de usuário diferente.";
    } else {
        $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

        $stmt_insert = $pdo->prepare("INSERT INTO usuarios (usuario, senha, email, permissao) VALUES (?, ?, ?, ?)");
        $stmt_insert->execute([$usuario, $senhaHash, $email, $permissao]);

        if ($stmt_insert->rowCount() > 0) {
            $_SESSION["usuario"] = $usuario;
            header("Location: index.php");
        } else {
            return "Erro ao cadastrar o usuário. Tente novamente.";
        }
    }
}

function editarPermissao($pdo, $usuario, $novaPermissao)
{
    $stmt_update = $pdo->prepare("UPDATE usuarios SET permissao = ? WHERE usuario = ?");
    $stmt_update->execute([$novaPermissao, $usuario]);
}

function exibirMensagem($mensagem)
{
    if (isset($mensagem)) {
        echo '<h2>' . $mensagem . '</h2>';
    }
}

function exibirUsuarios($pdo)
{
    $stmt_select = $pdo->prepare("SELECT * FROM usuarios");
    $stmt_select->execute();
    $usuarios = $stmt_select->fetchAll(PDO::FETCH_ASSOC);

    if (!empty($usuarios)) {
        echo '
        <table>
            <thead>
                <tr>
                    <th>Permissão</th>
                    <th>Usuário</th>
                    <th>Email</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>';
        foreach ($usuarios as $usuario) {
            echo '
                <tr>
                    <td>' . $usuario['permissao'] . '</td>
                    <td>' . $usuario['usuario'] . '</td>
                    <td>' . $usuario['email'] . '</td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="usuario" value="' . $usuario['usuario'] . '">
                            <select name="novaPermissao">
                                <option value="0" ' . ($usuario['permissao'] == 0 ? 'selected' : '') . '>Permissão 0</option>
                                <option value="1" ' . ($usuario['permissao'] == 1 ? 'selected' : '') . '>Permissão 1</option>
                                <!-- Adicione outras opções conforme necessário -->
                            </select>
                            <input type="submit" value="Alterar Permissão">
                        </form>
                    </td>
                </tr>';
        }
        echo '
            </tbody>
        </table>';
    } else {
        echo '<p>Nenhum usuário cadastrado.</p>';
    }
}

$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["usuario"]) && isset($_POST["novaPermissao"])) {
    $usuario = $_POST["usuario"];
    $novaPermissao = $_POST["novaPermissao"];
    editarPermissao($pdo, $usuario, $novaPermissao);
    header("Location: usuarioscadastrador.php"); // Redireciona para atualizar a página
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/register.css">

<head>
    <title>Usuários Registrados</title>
</head>

<body style="background: url('img/Tela-fundo-login.png') no-repeat center center fixed; background-size: cover;">

    <img class="logo" src="img/Logo_Horizontal_white.png" width="300px">
    <h1>Usuários Registrados</h1>

    <?php
    exibirMensagem($mensagem);
    exibirUsuarios($pdo);
    ?>

    <h3><a href="admin.php">Voltar para a página de administrador</a></h3>

    <?php
} else {
    header('Location: index.php');
}
?>
<a class="pdf" href="pdf.usuario.php">Imprimir</a>
</body>

</html>

<?php
session_start();

// Verifica se o botão de exclusão foi clicado
if (isset($_POST['excluirLivro']) && isset($_POST['livroId'])) {
    $livroId = $_POST['livroId'];

    // Conexão com o banco de dados (substitua com suas próprias credenciais)
    $host = 'localhost';
    $dbname = 'trem';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar e executar a consulta de exclusão
        $stmt = $pdo->prepare("DELETE FROM minhashistorias WHERE id = :livroId");
        $stmt->bindParam(':livroId', $livroId);
        $stmt->execute();

        // Defina uma mensagem de sucesso e redirecione de volta à página anterior
        $_SESSION['exclusao_mensagem'] = "Livro excluído com sucesso.";
        header("Location: pagina_emprestimo1.php?id=$livroId");
        exit();
    } catch (PDOException $e) {
        // Em caso de erro, defina uma mensagem de erro e redirecione de volta à página anterior
        $_SESSION['exclusao_mensagem'] = "Erro ao excluir o livro: " . $e->getMessage();
        header("Location: pagina_emprestimo1.php?id=$livroId");
        exit();
    }
} else {
    // Se o botão de exclusão não foi clicado, redirecione de volta à página anterior
    header("Location:  pagina_emprestimo1.php");
    exit();
}
?>


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
        <a href="../php/historias.php">MINHAS HISTORIAS</a>
        <a href="../php/sobre.php">SOBRE</a>
        <div id="divBusca">

  <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
  <button id="btnBusca">Pesquisar</button>
</div>

</nav>
</div>
<main>

<h1>BIBLIOTECA </h1>


<style>


table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 95px;
            background-image: url('../img/fundo-preto.png'); /* Substitua 'sua-imagem.jpg' pelo caminho correto da sua imagem */
            background-size: cover; /* Ajusta o dimensionamento da imagem */
            background-position: center; /* Centraliza a imagem */
            background-repeat: no-repeat;
        }

        thead {
            background-color: #007bff;
            color: #fff;
        }

        th,
        td {
            padding: 120px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        img {
            display: block;
            max-width: 100%;
            height: auto;
        }

        p {
            margin-top: 10px;
        }

        
        p.no-books {
            font-style: italic;
            color: #888;
      




.livros-table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 30px;
}

.livro-row {
  
}

.livro {
    padding: 20px; 
    text-align: center; 
    border-bottom: 1px solid #ddd;
    width: calc(33.33% - 40px);
    box-sizing: border-box;
    display: inline-block; 
}

.botao {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
        }

        /* Estilo para a classe "botao" quando o mouse passa por cima */
        .botao:hover {
            background-color: #2980b9;
        }
        }
        p{
            color:white;
            font-size:20px;
            
        }
        @keyframes changeColor {
      0% { color: rgb(255, 0, 0); }
      33% { color: rgb(0, 255, 0); }
      66% { color: rgb(0, 0, 255); }
      100% { color: rgb(255, 0, 0); }
    }
  
    .dev{
        position:absolute;
        top:90px;
        left:92%;
        text-decoration:none;
        color:white;
        font-size:18px;
    }
  
    </style>




    
    <div class="container2">

  
  
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
                          <td class="livro">
                        <b>  <p><?= $livro['titulo'] ?></p></b>
                              <img style="max-width: 160px;" src="<?= $livro['imagem'] ?>">
                              <a href="#" onclick="emprestarLivro(<?= $livro['id'] ?>)" style="display: inline-block; padding: 10px 20px; font-size: 16px; text-align: center; text-decoration: none; background-color: #5F9EA0; color: white; border: 1px solid #4CAF50; border-radius: 5px; cursor: pointer;" onmouseover="this.style.backgroundColor='#45a049'" onmouseout="this.style.backgroundColor='#5F9EA0'">VER</a>
  
  
  
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


</div>

</main>

<div class="background-container">
<div class="container">


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
<!------SCRIPT de emprestimo de livro--------->
<script>
        function emprestarLivro(livroId) {
            // Adapte a URL de redirecionamento conforme necessário
            window.location.href = 'pagina_emprestimo.php?id=' + livroId;
        }
    </script>


  
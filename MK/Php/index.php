<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/index.css">
    <title>Fanfiction</title>
</head>
<body>

<header>
    <!-----------------LOGO----------------->

<img class="logo" src="../img/logoo.jpeg" width="80px">

<h1>Abc Fanfiction</h1>

<a href="#" class="confirm-link" onclick="confirmLogout()">   
<?php

session_start();

if (!isset($_SESSION["usuario"])) {
    echo '<a class="conect" href="login.php">Conecte-se</a>';
} else {
    echo '<h1 class="conect">Olá, ' . $_SESSION["usuario"] . '</h1>';
}
?>

</header>

<!---------------------------------MENU---------------------------------->
<div class="barra">


<nav class="link">
        <a href="../php/tags.php">TAGS</a>
        <a href="../php/tags.php">NAVEGAR</a>
        <a href="../php/tags.php">MINHAS HISTORIAS</a>
        <a href="../php/tags.php">SOBRE</a>
        <div id="divBusca">

  <input type="text" id="txtBusca" placeholder="Pesquisar..."/>
  <button id="btnBusca">Pesquisar</button>
</div>

</nav>
</div>


<main>
<img class="sol"src="../img/sol-logo.png" alt="Sol" id="sol" class="icon">
    <img class="lua"src="../img/lua-logo.png" alt="Lua" id="lua" class="icon">
   
    
    <button class="butao" id="toggleButton">Modo Noturno</button>

        <div class="container">
    <div class="texto">
        <h2>Encontre seus favoritos</h2 >
       <b> <li>TODOS OS FÃS </li>  <li> ANIME E MANGÁ</li>  <li> LIVROS E<br> <li> LITERATURA</li>  <li> DESENHOS<br> <li> ANIMADOS E<br> <li> HISTORIAS EM <br> <li> QUADRINHOS</li>  <li> CELEBRIDADES E<br> <li> PESSOAS REAIS</li>  
      
        <div class="container2">
    <div class="texto2">
       
        <li>FILMES </li>  <li>MUSICA E BANDAS</li>  <li> OUTROS MIDIAS </li>  <li> TEATRO</li>  <li> PROGRAMA DE<br> <li> TELEVISÃO</li> <li> JOGOS DE VIDEOS </li>  <li> FANDOMS SEM<br> <li> CATEGORIA</li>
</b>
        <div class="container3">
    <div class="texto3">
    <h2>Siga-Nos</h2>
    <p><b>Siga-nos no Twitter ou no Tumblr<br> para atualizações de status </p></b>

    <div class="container4">
    <div class="texto4">

    <h3>Um sicriado por fãs, administrado por fãs,<br> sem fins lucrativos e não comercial, para<br> obras de fãs transformadoras, como <br>fanfiction, fanart, vídeos de fãs e podfic</h3>
    <p>mais de 63.990 fandoms | 6.816.000 usuários | 12.630.000 obras</p>

    <div class="quadrado">
  <div class="texto">
  <h3>Com uma conta Abc, você pode:</h3>
  <li>Compartilhe suas próprias obras de fãs</li>
  <li>Seja notificado quando suas obras, séries ou usuários favoritos forem atualizados</li>
  <li>Participe de desafios</li> 
  <li>Acompanhe as obras que você visitou e as que deseja conferir mais tarde</li> 
  Você pode participar recebendo um convite de nossa fila de convites automática. Todos os fãs e fanworks são bem-vindos! ,
  <a href="pergunta.php"><br> <br>
  <button class="glow-on-hover">Seja Convidado!</button>
       
    

    
</main>



<footer>


</footer>
</body>
</html>


<!------------------------------------------------------------SCRIPT---------------------------------------------------------------->
<script>
document.getElementById("toggleButton").addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");
    var sol = document.getElementById("sol");
    var lua = document.getElementById("lua");
    if (document.body.classList.contains("dark-mode")) {
        document.getElementById("toggleButton").textContent = "Modo Claro";
        sol.style.display = "none"; // Oculta o sol no modo noturno
        lua.style.display = "block"; // Mostra a lua no modo noturno
    } else {
        document.getElementById("toggleButton").textContent = "Modo Noturno";
        sol.style.display = "block"; // Mostra o sol no modo claro
        lua.style.display = "none"; // Oculta a lua no modo claro
    }
});

// Verifica o modo atual ao carregar a página
if (document.body.classList.contains("dark-mode")) {
    document.getElementById("sol").style.display = "none"; // Oculta o sol no modo noturno
    document.getElementById("lua").style.display = "block"; // Mostra a lua no modo noturno
} else {
    document.getElementById("sol").style.display = "block"; // Mostra o sol no modo claro
    document.getElementById("lua").style.display = "none"; // Oculta a lua no modo claro
}



</script>
<script>
function confirmLogout() {
    var confirmLogout = confirm("Realmente que Sair dessa Pagina?");
    if (confirmLogout) {
        window.location.href = 'logout.php';
    }
}
</script>


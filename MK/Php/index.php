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
    <p>Bem-vindo ao meu site! Clique no botão abaixo para alternar entre o modo claro e o modo noturno.</p>
    <button id="toggleButton">Modo Noturno</button>

        <div class="container">
    <div class="texto">
        <h2>Encontre seus favoritos</h2>
        <li>TODOS OS FÃS </li>  <li> ANIME E MANGÁ</li>  <li> LIVROS E LITERATURA</li>  <li> DESENHOS ANIMADOS<br> E HISTORIAS EM QUADRINHOS</li>  <li> CELEBRIDADES E PESSOAS REAIS</li>  
      
        <div class="container2">
    <div class="texto2">
       
        <li>FILMES </li>  <li>MUSICA E BANDAS</li>  <li> OUTROS MIDIAS </li>  <li> TEATRO</li>  <li> PROGRAMA DE TELEVISÃO</li> <li> JOGOS DE VIDEOS </li>  <li> FANDOMS SEM CATEGORIA</li>

        <div class="container3">
    <div class="texto3">
    <h2>Encontre seus favoritos</h2>
    <p>Bem-vindo ao meu site! Clique no botão abaixo para alternar entre o modo claro e o modo noturno.</p>
</main>



<footer>


</footer>
</body>
</html>
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
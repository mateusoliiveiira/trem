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
<p>Bem-vindo ao meu site! Clique no botão abaixo para alternar entre o modo claro e o modo noturno.</p>
        <button id="toggleButton">Modo Noturno</button>

        <div class="container">
    <div class="texto-motivação">
        <h2>Encontre seus favoritos</h2>
        <li>As gincanas infantis representam uma ferramenta valiosa no processo de desenvolvimento das crianças </li>  mas também oportunidades  <li>s cognitivo e emocional dos pequenos, promovendo habilidades essenciais para a vida. </li>

</main>



<footer>


</footer>
</body>
</html>
<script>
document.getElementById("toggleButton").addEventListener("click", function() {
    document.body.classList.toggle("dark-mode");
    if (document.body.classList.contains("dark-mode")) {
        document.getElementById("toggleButton").textContent = "Modo Claro";
    } else {
        document.getElementById("toggleButton").textContent = "Modo Noturno";
    }
});


</script>
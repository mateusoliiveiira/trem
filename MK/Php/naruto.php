<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/romance.css">
    <title>Document</title>
</head>

<body>

    <header>
        <img class="logo" src="../img/logoo.jpeg" width="80px">
        <h1>Abc Fanfiction</h1>
    </header>

    <div class="barra">
        <nav class="link">
            <a href="index.php">PAGINA INICIAL</a>
            <a href="../php/tags.php">TAGS</a>
            <a href="../php/tags.php">NAVEGAR</a>
            <a href="../php/tags.php">MINHAS HISTORIAS</a>
        </nav>
    </div>

    <div class="container">
        <div class="title">
            <h2>Tags de Naruto</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/naruto1.jpg" alt="Livro 1">
                <div class="tag-info">
                    <h3>Ruas de Fogo</h3>
                    <p>Autor:   magodasfadas</p>
                    <p>atualizada em: 15/04/2015</p>
                    <button onclick="showSummary('summary1')">Mostrar Resumo</button>
                    <p id="summary1" style="display: none;">Hinata, um anjo de olhos perolados e cabelos azuis escuros. Naruto, um demônio loiro e de olhos azuis. Ele se tornou a força que ela precisava. Ela se tornou o coração que ele não tinha.

                  </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/naruto2.jpg" alt="Livro 2">
                <div class="tag-info">
                    <h3>Desafio dos 42</h3>
                    <p>Autor:  ICLP , linadenile , PandacornTrouxa , HitariAmai e Evil_Queen42</p>
                    <p>atualizada em:  26/12/2018 </p>
                    <button onclick="showSummary('summary2')">Mostrar Resumo</button>
                    <p id="summary2" style="display: none;">Sasuke Uchiha, o meu crush desde o tempo do colégio. Descobri recentemente que um pequeno grande boato ronda em torno dele, e que o número 42 talvez não seja apenas a resposta para a vida, o universo e tudo mais.</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/naruto3.jpg" alt="Livro 3">
                <div class="tag-info">
                    <h3>Seven</h3>
                    <p>Autor: cryomancer</p>
                    <p>atualizada em: 30/12/2014 </p>
                    <button onclick="showSummary('summary3')">Mostrar Resumo</button>
                    <p id="summary3" style="display: none;">Mesmo com a vida atarefada que qualquer universitário tem direito, as meninas do SMH acharam que seria melhor deixar tudo ainda mais 
                    emocionante ao realizar a mais nova “temporada” do seu joguinho interno predileto.Sakura, uma caloura que chega à capital e tenta se enturmar, não vê opções se não meter-se em meio ao fogo cruzado, e o que seria sua “iniciação”, acaba se transformando em um grande caldeirão cheio de problemas, que consiste unicamente nas peripécias que cometerá para
                     acabar com o orgulho do rapaz mais soberbo que já pisou em terra,e sentimentos, que é a inevitável possibilidade de se apaixonar por ele.</p>
                </div>
            </li>
        </ul>
    </div>

    <script>
        function showSummary(id) {
            var summary = document.getElementById(id);
            if (summary.style.display === "none") {
                summary.style.display = "block";
            } else {
                summary.style.display = "none";
            }
        }
    </script>

</body>

</html>
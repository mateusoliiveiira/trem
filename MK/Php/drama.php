<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/romance.css">
    <style>
        /* Estilo do botão */
        .summary-button {
            background-color: #6E6CB6; /* Cor de fundo */
            border: none; /* Remover borda */
            color: white; /* Cor do texto */
            padding: 8px 16px; /* Espaçamento interno */
            text-align: center; /* Alinhar texto ao centro */
            text-decoration: none; /* Remover sublinhado */
            display: inline-block; /* Exibir como bloco */
            font-size: 14px; /* Tamanho da fonte */
            margin-top: 10px; /* Margem superior */
            cursor: pointer; /* Cursor ao passar por cima */
            border-radius: 4px; /* Borda arredondada */
        }
        .summary2-button {
            background-color: #4CAF50; /* Cor de fundo */
            border: none; /* Remover borda */
            color: white; /* Cor do texto */
            padding: 8px 16px; /* Espaçamento interno */
            text-align: center; /* Alinhar texto ao centro */
            text-decoration: none; /* Remover sublinhado */
            display: inline-block; /* Exibir como bloco */
            font-size: 14px; /* Tamanho da fonte */
            margin-top: 10px; /* Margem superior */
            cursor: pointer; /* Cursor ao passar por cima */
            border-radius: 4px; /* Borda arredondada */
        }

        .summary3-button {
            background-color: #4CAF50; /* Cor de fundo */
            border: none; /* Remover borda */
            color: white; /* Cor do texto */
            padding: 8px 16px; /* Espaçamento interno */
            text-align: center; /* Alinhar texto ao centro */
            text-decoration: none; /* Remover sublinhado */
            display: inline-block; /* Exibir como bloco */
            font-size: 14px; /* Tamanho da fonte */
            margin-top: 10px; /* Margem superior */
            cursor: pointer; /* Cursor ao passar por cima */
            border-radius: 4px; /* Borda arredondada */
        }

        /* Mudança de cor ao passar por cima */
        .summary-button:hover {
            background-color: #45a049;
        }

        /* Mudança de cor ao clicar */
        .summary-button:active {
            background-color: #3e8e41;
        }
    </style>
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
            <h2>Tags de Drama</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/drama1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Paixão Sem Limites</h3>
                    <p>Autor:  Cereijinha-</p>
                    <p>atualizada em: 20/07/2014</p>
                    <button class="summary-button" onclick="showSummary('summary1')">VER</button>
                    <p id="summary1" style="display: none;">Sasuke Uchiha é um garoto rebelde que não superou a morte da mãe. Correr com sua moto é sua única paixão, e quando ela foi tirada de si e o mesmo foi obrigado a ir para o melhor internato de Konoha, 
                    o garoto não esperava encontrar a garota que mudaria seu mundo.Sakura Haruno é a garota certinha sufocada com sua vida calculada, e faz de tudo para chamar a atenção dos pais. É a filha dos sonhos de qualquer casal de pais controladores, uma garota boa mas que sente aprisionada em sua própria vida chata, com o sonho de poder sair da seu casulo um dia. Até que o garoto mal encarado e tatuado aparece, 
                    lhe mostrando a verdadeira liberdade.A garota viu sua vida virar de cabeça para baixo com a chegada do Uchiha, e não esperava que um cara tão diferente de si transformaria seu mundo cinzento em cores quentes.
                  </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/drama2.png" alt="Livro 2">
                <div class="tag-info">
                    <h3>Lightning In The Dark</h3>
                    <p>Autor:  whylelis</p>
                    <p>atualizada em:  30/12/2014</p>
                    <button class="summary-button" onclick="showSummary('summary2')">VER</button>
                    <p id="summary2" style="display: none;">Justin Bieber estava se envolvendo com vários problemas e isso estava começando a prejudicar sua imagem de bom moço no ramo da música. Todos os dias saia alguma coisa em sites dizendo o quanto ele fumou na noite passada, ou que bebeu após brigar com Selena Gomez. Seu relacionamento com ela teria terminado 
                    a dois meses e o fim era por conta dos altos e baixos do garoto.Lucy, ainda não formada em psicologia porém no ultimo ano da faculdade mais famosa de Nova York,
                     foi chamada pra trabalhar com ele na área que irá se especializar futuramente.Mas no meio de tanta fama, erros, acertos e perfeição, haverá algo ainda maior chamado paixão e desejo. Como será que ambos vai lidar com isso?</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/drama3.png" alt="Livro 3">
                <div class="tag-info">
                    <h3>Flatline</h3>
                    <p>Autor:  whylelis</p>
                    <p>atualizada em: 30/12/2014 </p>
                    <button class="summary-button" onclick="showSummary('summary3')">VER</button>
                    <p id="summary3" style="display: none;">Porque a vida pode te tirar todos os planos que você criou durante anos e te dar uma data prevista da sua partida através de uma doença cerebral, mas eu parei de ver o lado ruim das coisas a partir 
                    da hora que eu ignorei cada segundo que se passava no relógio e me dei conta de que apesar do nosso tempo estar esgotando, eu só queria ficar com você.
                    Uchiha Sasuke é um empresário prodígio que corre o risco de perder o domínio da própria empresa devido as palavras de seu pai em testamento. Para que ele continuasse como CEO 
                    da GoK9, seria necessário que ele casasse com uma mulher que nunca viu na vida em detrimento do próprio relacionamento amoroso.</p>
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
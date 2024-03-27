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
            <h2>Tags de Amizade</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/amizade1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Chains</h3>
                    <p>Autor:  stealmyziall</p>
                    <p>atualizada em: 24/06/2018</p>
                    <button class="summary-button" onclick="showSummary('summary1')">Mostrar Resumo</button>
                    <p id="summary1" style="display: none;">Em meio de uma época de sequestros intencionando fortalecer o mercado negro, os moradores costumeiros de uma pequena cidade acreditavam intensamente que o motivo disto seria posto sobre uma lenda local. Wachowski, um ser das trevas condenado a vagar pela terra..
Enquanto isto, Sophia Hummel, uma estudante sonhadora, corre contra o tempo para tentar reverter a situação de sua mãe em coma. Porém, vê seu mundo virar de ponta cabeça ao cair nas teias venenosas do destino cruel. Ao que parecia ela ser apenas mais uma vítima dos inúmeros sequestros, trazia descobertas sobre seu passado escondido por uma antiga profecia. Os mistérios sombrios do mundo batem a porta, causando-a dificuldade em discernir a realidade da imaginação. Ela jurou odiar o insensível Nicholas, mas não imaginaria que seu destino havia se entrelaçado ao dele antes mesmo que nascesse. Juntos, deverão conter suas indiferenças, lutar contra criaturas mitológicas e controlar uma ansiedade crônica. O emocional fica a loucura com tantas aventuras alucinógenas, 
mas o trabalho duro é constante para desvendar a famosa profecia, que ronda as dimensões:
                    </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/amizade2.jpg" alt="Livro 2">
                <div class="tag-info">
                    <h3>Asas Da Noite</h3>
                    <p>Autor: jemiBelieber</p>
                    <p>atualizada em: 07/09/2019</p>
                    <button class="summary-button" onclick="showSummary('summary2')">Mostrar Resumo</button>
                    <p id="summary2" style="display: none;">Eu deveria saber que aquele dia não poderia me render o melhor. A sombria escuridão espreitava cada passo meu, pronta a me embarcar em uma viagem sem fim no mar do desequilíbrio emocional. Nada poderia mudar o meu verdadeiro destino. Aquela ponta metálica tão ponte aguda e dolorosa pertencia à faca do sofrimento, a qual me apunhalou de forma devastadora. Em meus planos, cada detalhe do dia era planejado com precisão, mas na prática nada previsto por mim realmente acontecia. Sempre surgiam pequenos problemas com consequências gigantescas, que sempre embaralham minhas ideias. A ansiedade constante que insiste em consumir toda minha razão, leva-me cada vez mais ao fundo do poço, torna minha vida um frequente estado de medo, preocupação e pânico, dominando meus pensamentos e atrapalhando minhas atividades diárias. Por isto, para ao menos ter coragem de enfrentar o dia que se inicia, dependo de terapias e medicamentos. 
                    Talvez, um dia, eu consiga me libertar disto, e me permitir viver o lado mais leve da vida..." — Sophia Hummel, protagonista.</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/amizade3.gif" alt="Livro 3">
                <div class="tag-info">
                    <h3>Chains 2</h3>
                    <p>Autor:  stealmyziall</p>
                    <p>atualizada em: 27/05/2020 </p>
                    <button class="summary-button" onclick="showSummary('summary3')">Mostrar Resumo</button>
                    <p id="summary3" style="display: none;">Encarei o escuro do quarto. Um frio percorreu a minha espinha e eu soube que não estava sozinha. A janela aberta, levando o vento da noite até mim fazia meu corpo estremecer. Janela essa cujo eu havia fechado. Eu tinha certeza que havia. A saliva desceu forçada na minha garganta e no ímpeto do medo, puxei o edredom até me cobrir inteira. Mas eu precisava fechar a janela ou não teria paz. Morar perto de uma floresta não ajudava em nada, ainda mais quando o lugar era regado a lendas de vampiros. E pelo o que conta as histórias, hoje era um dia especial, era a data que eles estavam livres para ir onde bem entenderem sem que mascarem a verdadeira identidade. Livres para matar, talvez.
                    </p>
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
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
            <h2>Tags de Romance</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/romance1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Namorado Quase Perfeito</h3>
                    <p>Autor: ORUMAITOU</p>
                    <p>Data Da Publicação: 30/07/2019</p>
                    <button class="summary-button" onclick="showSummary('summary1')">VER</button>
                    <p id="summary1" style="display: none;">Park Jimin levava uma vida tecnicamente feliz; tinha uma boa casa, 
                    cursava uma boa faculdade e tinha um bom namorado. Tudo estava excepcionalmente bem, até receber a terrível notícia de que seu namorado havia se apaixonado por outro e estava terminando seu relacionamento. Frustrado o bastante para sequer querer sair de casa, é persuadido por uma boba propaganda de um “namorado perfeito”, na qual os vendedores garantiam um boneco-humano capaz de ser um excelente namorado, 
                    e acreditando ser uma brincadeira idiota, o Park não pensa duas vezes antes de fazer sua encomenda no site.
                  </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/romance2.jpg" alt="Livro 2">
                <div class="tag-info">
                    <h3>Girl Meets Evil</h3>
                    <p>Autor: Ghost_Fanfics</p>
                    <p>Ano Da Publicação: 13/11/2020</p>
                    <button class="summary-button" onclick="showSummary('summary2')">VER</button>
                    <p id="summary2" style="display: none;">Nasci em Juggi, uma cidadezinha perdida na Coreia do Sul, mas a deixei por não suportar a dor da perda da minha mãe e da minha irmã mais velha. Appa e eu nos mudamos para Seul, que me acolheu e me reergueu como um lar. Mudei de escola, fiz novos amigos, 
                    gostava da minha nova casa. Ali, nada era lembrança de um tempo que não voltaria. Era onde eu criava novas memórias para tornar minha vida suportável.Tudo parecia bem, até agora. De repente, Appa anuncia seucasamento com a Srta. Jeon. De uma vez só preciso arrumar minhas malas, sair da escola, me despedir dos meus amigos e voltar a Juggi, um lugar que odeio. A única parte boa da história é ganhar uma madrasta tão boa, mas até mesmo ela tem seu porém. Seu filho, 
                    que se tornará meu "irmão" em poucos dias, Jeon "Arrogante" Jungkook. Ele é um espécime detestável da raça humana. Implicante, prepotente, encrenqueiro e espaçoso. Eu não o suporto, e não quero nem respirar o mesmo ar que ele, quanto mais dividir a casa, o pai, a vida.</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/romance3.png" alt="Livro 3">
                <div class="tag-info"
                    <h3>Danger (Imagine Park Jimin)</h3>
                    <p>Autor: deepsuga</p>
                    <p>Ano de Publicação: 16/08/2016</p>
                    <button class="summary-button" onclick="showSummary('summary3')">VER</button>
                    <p id="summary3" style="display: none;">Park Jimin, o maior traficante de Seul.Eu? Só uma garota como qualquer outraComo nos conhecemos? Em uma das piores noites da minha vida.Ele é possessivo, frio, egocêntrico e sarcástico,
                     um completo psicopata.Por outro lado é sedutor e extremamente lindo.Se eu tenho medo dele? Não sei.Mas eu o desejo como nunca desejei alguém.
                     -Você está mexendo com o perigo, ________ -ele disse e eu sorri fraco.-E você está mexendo comigo, Park Jimin.</p>
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
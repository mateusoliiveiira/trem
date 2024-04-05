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
            <h2>Tags de Poesia</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/poesia1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Me disseram que poetas sangram poesia</h3>
                    <p>Autor: meldysama</p>
                    <p>atualizada em: 20/07/2014</p>
                    <button class="summary-button" onclick="showSummary('summary1')">VER</button>
                    <p id="summary1" style="display: none;"> há muito tempo me disseram que poetas sangram poesia, e eu resolvi pensar sobre isso.

                    </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/poesia2.png" alt="Livro 2">
                <div class="tag-info">
                    <h3>Silêncio de Saturno</h3>
                    <p>Autor: souhamucek </p>
                    <p>atualizada em: 30/12/2014</p>
                    <button class="summary-button" onclick="showSummary('summary2')">VER</button>
                    <p id="summary2" style="display: none;">Os ruídos incomodam-me. Embarco com meu silêncio à Via Láctea e apaixono-me mais. Todavia, nada compara-se a Saturno.</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/poesia3.jpg" alt="Livro 3">
                <div class="tag-info">
                    <h3>Me ouça</h3>
                    <p>Autor: silenciei</p>
                    <p>atualizada em: 30/12/2014 </p>
                    <button class="summary-button" onclick="showSummary('summary3')">VER</button>
                    <p id="summary3" style="display: none;">mãe, o meu tormento diário é conviver em sociedade.
                        angst ! social phobia</p>
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
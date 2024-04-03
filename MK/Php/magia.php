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
            <h2>Tags de Magia</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/amizade1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Dominante</h3>
                    <p>Autor: Aella</p>
                    <p>atualizada em: 24/06/2018</p>
                    <button class="summary-button" onclick="showSummary('summary1')">VER</button>
                    <p id="summary1" style="display: none;">Rebecca Young sempre soube da existência de lobisomens, 
                    mas após ter contato com o outro lado do sobrenatural se vê tentada a se tornar parte desse mundo 
                    encoberto dos humanos. Becca tenta viver uma vida em alcateia, mas por causa de vários incidentes ela percebe que ela nunca conseguiria fazer parte de uma. Sua insubordinação e espírito rebelde são rotulados de dominância, e assim ela parte de onde estavam seus últimos laços com família e amigos. Porém, ser uma fêmea sozinha tem seus perigos e consequências no mundo lupino. Em seu caminho para se encontrar, ela se defrontará com vários oponentes, sejam eles vampiros, outros lobos e principalmente um Alpha poderoso e controlador que fará de tudo para tê-la sob seu comando.
                    </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/amizade2.jpg" alt="Livro 2">
                <div class="tag-info">
                    <h3>Até Que O Feitiço Acabe</h3>
                    <p>Autor: jikooKause</p>
                    <p>atualizada em: 19/01/2015</p>
                    <button class="summary-button" onclick="showSummary('summary2')">VER</button>
                    <p id="summary2" style="display: none;">Correndo o risco de repetir o último 
                    ano e tendo apenas um instrumento magico em suas mãos — essa sendo uma caneta enfeitiçada — J
                    ungkook decide a usar para encantar seu professor mais incontestável através de um bilhete mágico, tentando fazer o mesmo ter mais apreço por si e por fim lhe disponibilizar provas extras. Porém, por causa da maldita distração que sempre foi uma fiel companheira, Jungkook acaba se confundindo e dando a carta encantada a Park Jimin, um aluno de sua escola que Jeon sequer conhecia.
</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/amizade3.gif" alt="Livro 3">
                <div class="tag-info">
                    <h3>Paraíso Sombrio</h3>
                    <p>Autor: biasensei</p>
                    <p>atualizada em: 27/05/2020 </p>
                    <button class="summary-button" onclick="showSummary('summary3')">VER</button>
                    <p id="summary3" style="display: none;">Mesmo depois de tantos anos, Hinata ainda carregava consigo traumas de um passado que tentava a todo custo esquecer. Sufocando todas aquelas memórias em um lugar escuro de seu inconsciente, ela vagava por esse mundo, sentindo suas emoções endurecerem-se cada dia mais. Já não reagia à vida, e a vida 
                    também não reagia à ela. Seu destino não passava de um espaço em branco, e ela não tinha expectativas de preencher esse vazio em sua vida.Mesmo assim, tudo está sujeito à mudanças. E, curiosamente, 
                    seu destino entrelaça-se ao de um jovem loiro e misterioso, que apesar de também carregar um passado doloroso e sofrido, escolheu viver em vez de se deixar apagar pela amargura que ainda o consumia. Este era Naruto.
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
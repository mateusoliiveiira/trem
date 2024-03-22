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
            <h2>Tags de Ação</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/familia1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Dominante</h3>
                    <p>Autor: Aella</p>
                    <p>atualizada em: 20/07/2014</p>
                    <button onclick="showSummary('summary1')">Mostrar Resumo</button>
                    <p id="summary1" style="display: none;">Rebecca Young sempre soube da existência de lobisomens, mas após ter contato com o outro lado do sobrenatural se vê tentada a se tornar parte desse mundo encoberto dos humanos. Becca tenta viver uma vida em alcateia, mas por causa de vários incidentes ela percebe que ela nunca conseguiria fazer parte de uma. Sua insubordinação e espírito rebelde são rotulados de dominância, e assim ela parte de onde estavam seus últimos laços com família e amigos. Porém, ser uma fêmea sozinha tem seus perigos e consequências no mundo lupino. Em seu caminho para se encontrar, ela se defrontará com vários oponentes, sejam eles vampiros, outros lobos 
                    e principalmente um Alpha poderoso e controlador que fará de tudo para tê-la sob seu comando.

                    </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/familia2.jpg" alt="Livro 2">
                <div class="tag-info">
                    <h3>A Traição - Jungkook</h3>
                    <p>Autor: Powlledy </p>
                    <p>atualizada em: 30/12/2014</p>
                    <button onclick="showSummary('summary2')">Mostrar Resumo</button>
                    <p id="summary2" style="display: none;">Haruno Sakura, subchefe do maior hospital de Tóquio, se viu obrigada a voltar para sua cidade natal – Konoha – após longos oito anos sem colocar os pés no local, para o casamento de sua prima com seu primeiro namorado, dali a quinze dias.
                        Mas não era isso que era o pior, o que estava tirando todo o sossego e sono da Haruno era o fato dela e de seu atual namorado terem que ser os padrinhos daquele desastre chamado casamento; mas a questão principal era: Que namorado?
                        Estava solteira há mais de seis meses após pegar seu “namorado” na cama com outra mulher, porém não teve coragem de contar aos seus pais ou familiares sobre tal fato, pois seus pais não conseguiam entender como uma mulher de vinte e sete anos bem resolvida financeiramente ainda não está casada e com filhos.</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/familia3.png" alt="Livro 3">
                <div class="tag-info">
                    <h3>Crazy And Criminal Love - (Imagine Jeon JungKook)</h3>
                    <p>Autor: picxin</p>
                    <p>atualizada em: 30/12/2014 </p>
                    <button onclick="showSummary('summary3')">Mostrar Resumo</button>
                    <p id="summary3" style="display: none;">Cassandra era só uma jovem garota que vira a mira de um dos garotos mais egoísta de todo o colégio, Justin Bieber. Um jovem que só pensa em si mesmo. Para ele tudo ao seu redor era uma diversão, qualquer novidade o levava a imaginar que poderia
                     se aproveitar de tal situação e quando vê a garota pela primeira vez, vários planos entram em sua mente. No entanto, quando se tem um plano e não toma cuidado com os possíveis "erros", algo pode vir a acontecer e aconteceu, mas nenhum dos dois estavam prontos pra isso... Principalmente ele.</p>
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
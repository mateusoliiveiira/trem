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
            <h2>Tags de Amor</h2>
        </div>
        <ul class="tags">
            <li class="tag">
                <img src="../img/amor1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Married and marked</h3>
                    <p>Autor: paulinhamrs3</p>
                    <p>atualizada em: 24/06/2018</p>
                    <button onclick="showSummary('summary1')">Mostrar Resumo</button>
                    <p id="summary1" style="display: none;">Para Park Jimin se casar não era somente um ato perante à lei de sua época e às pessoas, era acima de tudo um ato de amor. Ele sempre imaginou que quando subisse no altar seria com alguém que estimasse, respeitasse e amasse. Uma marca verdadeira não seria apenas aquela que o alfa deixaria em seu corpo, e sim aquela que ele deixaria em sua alma. Porém a situação em que se encontrava era deveras diferente. Ele não se importava se sua mãe, os Jeon, ou qualquer outra pessoa queria que ele se casasse com aquele homem. O que realmente tinha significância naquela situação toda para Jimin, era o fato de que a felicidade de seu irmão mais amado estava em jogo. E o que Park Jimin não faria por Park Yoongi? Ele realmente faria de tudo para que aquele 
                    sorriso tão único nunca saísse dos lábios do irmão mais velho, até mesmo se casar com alguém que ele odiava e repudiava: Jeon Jungkook.
                    </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/amor2.jpg" alt="Livro 2">
                <div class="tag-info">
                    <h3>Ruas de Fogo</h3>
                    <p>Autor: magodasfadas</p>
                    <p>atualizada em: 07/09/2019</p>
                    <button onclick="showSummary('summary2')">Mostrar Resumo</button>
                    <p id="summary2" style="display: none;">Hinata, um anjo de olhos perolados e cabelos azuis escuros. Naruto, um demônio loiro e de olhos azuis. Ele se tornou a força que ela precisava. Ela se tornou o coração que ele não tinha.</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/amor3.jpg" alt="Livro 3">
                <div class="tag-info">
                    <h3>Just Married</h3>
                    <p>Autor: Kjunn</p>
                    <p>atualizada em: 27/05/2020 </p>
                    <button onclick="showSummary('summary3')">Mostrar Resumo</button>
                    <p id="summary3" style="display: none;">Uchiha Sasuke é um empresário prodígio que corre o risco de perder o domínio da própria empresa devido as palavras de seu pai em testamento. Para que ele continuasse como CEO da GoK9, seria necessário que ele casasse com uma mulher que nunca viu na vida em detrimento do próprio relacionamento amoroso.
Não pensa duas vezes em esquecer que tem "namorada" e descobre que Sakura, a moça em questão, está com problemas e por sorte: solteira.
O que lhe poupa trabalho, pois pode "conquistá-la" com um contrato que favorecerá os dois.
Tudo certo até... Perceber os próprios sentimentos por Sakura, que o vê como um grande mal necessário e é apaixonada pelo melhor amigo.
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
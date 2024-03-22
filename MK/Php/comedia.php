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
                <img src="../img/comedia1.png" alt="Livro 1">
                <div class="tag-info">
                    <h3>Married and marked</h3>
                    <p>Autor: inosukie</p>
                    <p>atualizada em: 24/06/2018</p>
                    <button onclick="showSummary('summary1')">Mostrar Resumo</button>
                    <p id="summary1" style="display: none;">1) Sobreviver e passar com notas boas.2) Não terminar o colegial como um zero à esquerda.3) Conhecer gente nova.
                        Meu nome é Min Yoongi, e se vocês querem algo dos três itens ali, a única coisa que tem que fazer é não ser eu.
                    </p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/comedia2.png" alt="Livro 2">
                <div class="tag-info">
                    <h3>Ruas de Fogo</h3>
                    <p>Autor: Myung-</p>
                    <p>atualizada em: 07/09/2019</p>
                    <button onclick="showSummary('summary2')">Mostrar Resumo</button>
                    <p id="summary2" style="display: none;">Jeon Jungkook não era o tipo de pessoa que acreditava em seres sobrenaturais.Até a noite que é desafiado por seus amigos a invocar um demônio e acaba trazendo para terra um ser que irá virar sua vida de cabeça para baixo. Arrogante, carente; essas não deveriam ser características de um demônio, porém Park Jimin nunca gostou de ser igual a ninguém mesmo.</p>
                </div>
            </li>
            <li class="tag">
                <img src="../img/comedia3.png" alt="Livro 3">
                <div class="tag-info">
                    <h3>Just Married</h3>
                    <p>Autor: NamieK</p>
                    <p>atualizada em: 27/05/2020 </p>
                    <button onclick="showSummary('summary3')">Mostrar Resumo</button>
                    <p id="summary3" style="display: none;">Meu maior sonho seria ser notado por Hoseok,
                        meu crush, ou quem sabe me tornar próximo dele. Porém, sempre tem um porém, ele tinha um amigo que
                        complicava tudo.Jeon Jungkook era o meu pesadelo em forma de pessoa, que fazia de tudo para me provocar e me deixar confuso. Eu o odiava, nunca desgruda de Hoseok e não me deixa chegar perto o suficiente para alegrar o meu dia.Ah, eu mereço isso. Agora além de ter um crush, disputado por todos, tenho um demônio super gato em minha cola.E sabe qual é a pior? Jungkook era só o amigo do popular Hoseok, de cabelos extremamente descuidados e longos, e agora, por minha culpa, ele se tornou o rival de meu crush. Tudo porque eu resolvi cortar seu cabelo como uma forma de irritá-lo.
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
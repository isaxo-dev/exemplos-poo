<?php
require_once "src/livro.php";

$livroA = new Livro();
$livroB = new Livro();
$livroC = new Livro();

$livroA->titulo = "Harry Potter e a Pedra Filosofal";
$livroA->autor = "J.K. Rowling";
$livroA->paginas = 264;

$livroB->titulo = "O Senhor dos Anéis: A Sociedade do Anel";
$livroB->autor = "J.R.R Tolkien";
$livroB->paginas = 576;

$livroC->titulo = "O Pequeno Príncipe";
$livroC->autor = "Antoine de Saint-Exupéry";
$livroC->paginas = 96;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>

<body>

    <h1>Biblioteca de livros</h1>
    <h2>Veja abaixo 3 dos nossos principais livros</h2>
    <hr>

    <div>
        <h3>Livro 1</h3>
        <details>
            <summary> <?= $livroA->titulo ?> </summary>
            <p>O livro "<?= $livroA->titulo ?>" tem <?= $livroA->paginas ?> páginas.</p>
        </details>
    </div>

    <hr>

    <div>
        <h3>Livro 2</h3>
        <details>
            <summary> <?= $livroB->titulo ?> </summary>
            <p>O livro "<?= $livroB->titulo ?>" tem <?= $livroB->paginas ?> páginas. </p>
        </details>
    </div>

    <hr>

    <div>
        <h3>Livro 3</h3>
        <details>
            <summary> <?= $livroC->titulo ?> </summary>
            <p>O livro "<?= $livroC->titulo ?>" tem <?= $livroC->paginas ?> páginas. </p>
        </details>
    </div>

    <hr>

</body>

</html>
<?php
require_once "src/livro.php";

$livroA = new Livro("Harry Potter e a Pedra Filosofal", "J.K. Rowling");
$livroB = new Livro( "O Senhor dos Anéis: A Sociedade do Anel", "J.R.R Tolkien", 576);
$livroC = new Livro("O Pequeno Príncipe", "Antoine de Saint-Exupéry", 96);


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

        <?= $livroA->verificarTitulo() ?>

        <details>
            <summary> <?= $livroA->titulo ?> </summary>

            <!-- Aqui, usamos uma condicional if/else para mostrar parágrafos diferentes de acordo com a condição -->
            <?php if($livroA->paginas): ?>
                <!-- Se tem páginas, mostramos isso: -->
            <p>O livro "<?= $livroA->titulo ?>" tem <?= $livroA->paginas ?> páginas.</p>
            <?php else: ?>
                <!-- Se não tem, mostramos isso: -->
                <p style="color: red;"><b>Não foram informadas as páginas. </b> </p>
            <?php endif; ?>
        </details>
    </div>

    <hr>

    <div>
        <h3>Livro 2</h3>

        <?= $livroA->verificarTitulo() ?>

        <details>
            <summary> <?= $livroB->titulo ?> </summary>
            <p>O livro "<?= $livroB->titulo ?>" tem <?= $livroB->paginas ?> páginas. </p>
        </details>
    </div>

    <hr>

    <div>
        <h3>Livro 3</h3>

        <?= $livroA->verificarTitulo() ?>

        <details>
            <summary> <?= $livroC->titulo ?> </summary>
            <p>O livro "<?= $livroC->titulo ?>" tem <?= $livroC->paginas ?> páginas. </p>
        </details>
    </div>

    <hr>

</body>

</html>
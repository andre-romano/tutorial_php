<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>
    <link href="http://localhost/tutorial_php/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php
    // iremos incluir a biblioteca do bootstrap para PHP
    // o "include_once" garante que o arquivo bootstrap_components.php so sera incluido uma vez na pagina
    // ja o "include" simples permite que façamos vários includes do mesmo arquivo varias vezes
    include_once '../src/bootstrap_components.php';

    // iremos incluir a biblioteca do projetos_components (contem funcões como createHeadingExemplos())
    include_once '../src/projetos_components.php';

    // cria o menu (navbar) para que possamos navegar com mais facilidade pelo site
    // para alterar o menu, acesse o arquivo nav_bar.php e faca os ajustes necessarios
    include_once '../src/nav_bar.php';
    ?>

    <div class="container">

        <!-- Simply set the `src` attribute to your MD file and win -->
        <zero-md src="README.md"></zero-md>

        <div class="mb-5"></div>

    </div>

    <script src="http://localhost/tutorial_php/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="http://localhost/tutorial_php/js/zero-md.min.js"></script>

</body>

</html>
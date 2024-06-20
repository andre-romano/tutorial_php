<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 'breve' de PHP e MySQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once './include/bootstrap_components.php';
    include_once './include/nav_bar.php';
    ?>

    <!-- criar container bootstrap -->
    <div class="mb-3 container justify-content-center">
        <h1 class="text-center">Projeto de DB usando PHP v8.0</h1>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <h5>Para esse trabalho, <mark style="background-color: yellow;">o uso de Javascript esta PROIBIDO!</mark> Os
            dados devem ser validados e manipulados somente pelo servidor, seja no PHP (so quando necessario) ou no SQL
            (preferencialmente).</h5>
        <br>
        <h5><mark style="background-color: yellow;">Nao é preciso estudar o Bootstrap!</mark> Nossa preocupacao aqui é
            com a funcionalidade do sistema (acesso ao DB e manipulacao de dados usando uma servidor backend PHP, capaz
            de criar paginas HTML com o conteudo presente no DB MySQL).</h5>
        <br>

        <!-- criar margem superior -->
        <div class="mt-4"></div>
        <h2 class="text-center">Como usar o PHPMyAdmin para administrar um DB</h2>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <p>Para acessar a interface do PHPMyAdmin, digite <a target="_blank" href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a> no seu navegador.</p>

        <ol>
            <li class="mb-3">
                <p>Selecione o banco de dados que voce deseja trabalhar. Caso o banco de dados nao exista, crie ele usando o botao "Novo", conforme figura abaixo.</p>
                <img src="./img/phpmyadmin_criar_db.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Digite o nome do banco de dados e clique em "Criar", conforme figura abaixo.</p>
                <img src="./img/phpmyadmin_criar_db2.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Ao clicar no DB que voce acabou de criar voce vera a seguinte tela. Nela voce pode acessar varios recursos do PHPMySQL, como a aba SQL, Exportar, Importar, e o Designer .</p>
                <img src="./img/phpmyadmin_tela_db.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Nesse momento voce pode importar um arquivo <kbd>.SQL</kbd> para este DB que voce acabou de criar. Desta forma voce podera trabalhar em casa e importar o arquivo para um computador do laboratorio, ou vice-versa. Para isso, clique na aba "Importar" e em seguida no botao "Choose File" .</p>
                <img src="./img/phpmyadmin_importar.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Em seguida clique no botao "Importar" .</p>
                <img src="./img/phpmyadmin_importar2.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Voce tambem pode exportar um DB, para poder fazer um backup ou trabalhar nesse DB em outra maquina. Para isso, clique na aba "Exportar" e em seguida clique no botao "Exportar". Escolha o nome e local para salvar o arquivo SQL na janela que ira aparecer para voce. </p>
                <img src="./img/phpmyadmin_exportar.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>O PHPMyAdmin possui uma ferramenta grafica que permite que voce visualize as tabelas e as suas relacoes entre si, chamada de Designer. Para acessa-la clique na aba "Designer". Voce pode reorganizar as tabelas para a posicao que desejar e depois salvar essas posicoes no PHPMyAdmin para ter de referencia no futuro, quando for usar o Designer novamente. </p>
                <img src="./img/phpmyadmin_designer.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para executar uma consulta SQL, clique na aba "SQL", digite sua consulta e em seguida clique no botao "Executar". </p>
                <img src="./img/phpmyadmin_sql.jpg" alt="">
            </li>
        </ol>


        <h5>Para maiores detalhes acerca do PHPMyAdmin leia
            <a target="_blank" href="https://www-tutorialspoint-com.translate.goog/phpmyadmin/phpmyadmin_quick_guide.htm?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=en&_x_tr_pto=wapp">esse
                tutorial</a>.
        </h5>

        <!-- criar margem superior -->
        <div class="mt-4"></div>
        <h2 class="text-center">Como criar uma pagina PHP v8.0</h2>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <p>
            Crie uma pasta dentro do diretorio <b><mark>C:\xampp\htdocs</mark></b>. Dentro dessa pasta crie um arquivo <b><i>.php</i></b>.
        </p>
        <p>
            Quando digitamos o nome de um website qualquer, como <mark>www.google.com</mark>, o
            servidor HTTP ira abrir por padrao o arquivo com nome <b><i>index.php</i></b>.
        </p>
        <p>
            Esse arquivo contem tags HTML5 e instrucoes PHP. As instrucoes PHP devem estar apos o comando <kbd>
                < ?php</kbd>(sem o espaco entre < ?) e antes do comando <kbd>? >
            </kbd> (sem o espaco). Tudo que estiver fora dessas instrucoes é interpretado pelo PHP como sendo uma tag HTML.
        </p>
        <p>Abra este <a href="exemplo.html">examplo de arquivo HTML</a> para ver uma pagina HTML5 pura, sem comandos PHP.</p>
        <p>Abra este <a href="exemplo.php">examplo de arquivo PHP</a> para ver como construir uma pagina HTML usando o PHP. </p>

        <!-- criar margem superior -->
        <div class="mt-4"></div>
        <h2 class="text-center">Como usar o HTML5 no PHP para construir paginas</h2>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <h5>Estudem sobre o <a target="_blank" href="https://blog.soaresdev.com/guia-rapido-html-iniciante/">HTML5
                aqui</a> e sobre os
            <a target="_blank" href="https://www-w3schools-com.translate.goog/html/html_forms.asp?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=en&_x_tr_pto=wapp"> Formularios HTML aqui</a>.
            Estes dois sites tem quase tudo que é necessario para o nosso projeto.
        </h5>
        <br>

        <p>Seguem os componentes Bootstrap que voces podem usar para construir seu APP usando PHP.</p>
        <p>O arquivo <i><b>./include/bootstrap_components.php</b></i> descreve como usar as funcoes. Abaixo tem alguns
            exemplos.</p>

        <form class="col">
            <?php
            createInput("inputTeste", "text", "Teste");
            createInput("inputSenha", "password", "Senha");
            createInput("inputEmail", "email", "Email");
            createRadioCheckbox("teste", "checkbox", "Isso é um teste", "1");
            createSelect(
                "testeSelect",
                "Selecione uma das opcoes",
                array(
                    "1" => "Opcao 1",
                    "2" => "Segunda Opcao"
                ),
                "2"
            );
            createRadioCheckbox("nomeDoRadio", "radio", "Este radio tem valor 1", "1", true);
            createRadioCheckbox("nomeDoRadio", "radio", "Este radio tem valor 2", "2");
            createRadioCheckbox("nomeDoRadioDif", "radio", "Este radio é um outro campo, diferente dos demais", "1");
            createSwitchCheckbox("switchNome", "Isto é um switch");
            createSwitchCheckbox("switchNome2", "Outro switch", true);
            ?>

            <!-- criar margem inferior -->
            <div class="mb-3"></div>
            <button type="submit" class="btn btn-primary">Enviar formulario</button>
        </form>

        <!-- criar margem inferior -->
        <div class="mb-4"></div>
        <h3 class="text-center">Como criar tabelas HTML para mostrar dados do DB</h3>
        <p class="mb-4">Use o comando PHP abaixo. Esse comando cria uma tabela com os dados de uma matriz (vetor de vetores). Isso pode ser usado pra mostrar dados de consultas SQL que iremos fazer no DB. Veja um exemplo de uma consulta SQL <a href="exemplo_db.php">sendo executada aqui</a>.</p>

        <?php
        // cria uma tabela usando PHP
        createTable(
            array("cabecalho 1", "cabecalho 2", "cabecalho 3"),
            array(
                array("item 1", "item 2", "item 3"),
                array("item 4", "item 5", "item 6"),
                array("item 7", "item 8", "item 9"),
            )
        );
        ?>


    </div>

    <!-- carrega bootstrap (unico arquivo JS ou script Javascript permitido neste trabalho!) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
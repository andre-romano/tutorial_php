<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial BrModelo / PHP / MySQL</title>
    <link href="http://localhost/tutorial_php/css/bootstrap.min.css" rel="stylesheet">

    <link href="http://localhost/tutorial_php/css/index.css" rel="stylesheet">
</head>

<body>
    <?php
    include_once './src/bootstrap_components.php';
    include_once './src/nav_bar.php';
    ?>

    <!-- criar container bootstrap -->
    <div class="mb-3 container justify-content-center">
        <h1 class="text-center">Projeto de DB usando PHP v8.0</h1>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <h5>Os dados devem ser validados preferencialmente pelo DBMS, e caso nao seja possível realizar uma validação especifica pelo DBMS, os dados podem ser validados pelo PHP.</h5>
        <br>
        <h5><mark style="background-color: yellow;">Não é preciso estudar o Bootstrap!</mark> Nossa preocupação aqui é
            com a funcionalidade do sistema (acesso ao DB e manipulação de dados usando uma servidor backend PHP, capaz
            de criar paginas HTML com o conteúdo presente no DB MySQL).</h5>
        <br>

        <!-- criar margem superior -->
        <div class="mt-4"></div>
        <h2 class="text-center">Como criar um Projeto Conceitual usando o BrModelo</h2>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <ol>
            <li class="mb-3">
                <p>Abra o BrModelo e clique em "Novo". Selecione o modelo que deseja criar (conceitual), conforme printscreen abaixo.</p>
                <img class="border" src="img/brmodelo_novo.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Se clicarmos no modelo conceitual, teremos a seguinte tela abaixo. Nela podemos criar <b>Entidades, Relacionamentos e Especializações</b>. Para isso basta clicar no ícone do menu na direita e em seguida, clicar em qualquer lugar da grade em cinza (espaço do lado esquerdo da barra de rolagem do programa.)</p>
                <img class="border" src="img/brmodelo_menu_direita.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para construir as associações entre Entidades e Relacionamentos, basta usar clicar na ferramenta Ligação no menu à direita. Em seguida clique na Entidade e depois no Relacionamento que voce quer ligar. </p>
                <img class="border" src="img/brmodelo_associacoes.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para criar os Atributos das Entidades, basta clicar na ferramenta "Criar atributo" no menu à direita. Depois clique na Entidade que deseja criar o Atributo. </p>
                <img class="border" src="img/brmodelo_criar_atributo.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para renomear Atributos, Entidades ou Relacionamentos, basta clicar nelas e, no menu à esquerda, alterar o nome e apertar "Enter" no teclado para confirmar a alteração. Quando estiver satisfeito com seu projeto, voce pode salva-lo no ícone do "Disquete". </p>
                <img class="border" src="img/brmodelo_alterar_nome.jpg" alt="">
            </li>
        </ol>


        <!-- criar margem superior -->
        <div class="mt-4"></div>
        <h2 class="text-center">Como criar um Projeto Lógico usando o BrModelo</h2>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <ol>
            <li class="mb-3">
                <p>Abra o BrModelo e clique em "Novo". Selecione o modelo que deseja criar (logico), conforme printscreen abaixo.</p>
                <img class="border" src="img/brmodelo_novo.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Se clicarmos no modelo lógico, teremos a seguinte tela abaixo. Nela podemos criar <b>Tabelas, Campos, Chaves e Associações (entre tabelas)</b>. Para criar uma tabela basta clicar no ícone do menu na direita e em seguida, clicar em qualquer lugar da grade em cinza (espaço do lado esquerdo da barra de rolagem do programa). Para criar um campo em uma tabela, basta clicar no ícone do "Campo" do menu à direita, e em seguida clicar na tabela.</p>
                <img class="border" src="img/brmodelo_criar_tabela.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para construir as associações entre Tabelas, basta usar clicar na ferramenta Ligação no menu à direita. Em seguida clique na primeira Tabela e depois na segunda que voce quer ligar. </p>
                <img class="border" src="img/brmodelo_associacoes_tabelas.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para renomear Tabelas ou Campos, basta clicar nelas e, no menu à esquerda, alterar o nome e apertar "Enter" no teclado para confirmar a alteração. Para alterar o tipo de dados de um campo é so seguir o mesmo procedimento, alterando agora o "Tipo de Dados".</p>
                <img class="border" src="img/brmodelo_renomear_campo.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para definir um Atributo como chave primaria, basta clicar nele e, no menu à esquerda, clicar em "Chave Primária" para mudar a opção de "Nao" para "Sim" (quando fizer isso deve aparecer uma chave preta ao lado do atributo). Para a chave estrangeira é o mesmo procedimento usando clicando no campo "Chave Estrangeira" (nesse caso, aparecera uma chave verde ao lado do atributo). </p>
                <img class="border" src="img/brmodelo_chaves.jpg" alt="">
            </li>
        </ol>


        <!-- criar margem superior -->
        <div class="mt-4"></div>
        <h2 class="text-center">Como usar o PHPMyAdmin para administrar um DB</h2>
        <!-- criar margem superior -->
        <div class="mt-4"></div>

        <p>Para acessar a interface do PHPMyAdmin, digite <a target="_blank" href="http://localhost/phpmyadmin">http://localhost/phpmyadmin</a> no seu navegador.</p>

        <ol>
            <li class="mb-3">
                <p>Selecione o banco de dados que voce deseja trabalhar. Caso o banco de dados não exista, crie ele usando o botão "Novo", conforme figura abaixo.</p>
                <img class="border" src="./img/phpmyadmin_criar_db.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Digite o nome do banco de dados e clique em "Criar", conforme figura abaixo.</p>
                <img class="border" src="./img/phpmyadmin_criar_db2.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>ão clicar no DB que voce acabou de criar voce vera a seguinte tela. Nela voce pode acessar varios recursos do PHPMySQL, como a aba SQL, Exportar, Importar, e o Designer .</p>
                <img class="border" src="./img/phpmyadmin_tela_db.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Nesse momento voce pode importar um arquivo <kbd>.SQL</kbd> para este DB que voce acabou de criar. Desta forma voce podera trabalhar em casa e importar o arquivo para um computador do laboratorio, ou vice-versa. Para isso, clique na aba "Importar" e em seguida no botão "Choose File" .</p>
                <img class="border" src="./img/phpmyadmin_importar.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Em seguida clique no botão "Importar" .</p>
                <img class="border" src="./img/phpmyadmin_importar2.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Voce também pode exportar um DB, para poder fazer um backup ou trabalhar nesse DB em outra maquina. Para isso, clique na aba "Exportar" e em seguida clique no botão "Exportar". Escolha o nome e local para salvar o arquivo SQL na janela que ira aparecer para voce. </p>
                <img class="border" src="./img/phpmyadmin_exportar.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>O PHPMyAdmin possui uma ferramenta grafica que permite que voce visualize as tabelas e as suas relacões entre si, chamada de Designer. Para acessa-la clique na aba "Designer". Voce pode reorganizar as tabelas para a posicão que desejar e depois salvar essas posicões no PHPMyAdmin para ter de referencia no futuro, quando for usar o Designer novamente. </p>
                <img class="border" src="./img/phpmyadmin_designer.jpg" alt="">
            </li>
            <li class="mb-3">
                <p>Para executar uma consulta SQL, clique na aba "SQL", digite sua consulta e em seguida clique no botão "Executar". </p>
                <img class="border" src="./img/phpmyadmin_sql.jpg" alt="">
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
            servidor HTTP ira abrir por padrão o arquivo com nome <b><i>index.php</i></b>.
        </p>
        <p>
            Esse arquivo contem tags HTML5 e instrucões PHP. As instrucões PHP devem estar apos o comando <kbd>
                < ?php</kbd>(sem o espaco entre < ?) e antes do comando <kbd>? >
            </kbd> (sem o espaco). Tudo que estiver fora dessas instrucões é interpretado pelo PHP como sendo uma tag HTML.
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
        <p>O arquivo <i><b>./src/bootstrap_components.php</b></i> descreve como usar as funcoes. Abaixo tem alguns
            exemplos.</p>

        <form class="col" action="index.php" method="POST">
            <?php
            createInput("inputTeste", "text", "Teste");
            createInput("inputSenha", "password", "Senha");
            createInput("inputEmail", "email", "Email", "emailDeAlguem@gmail.com");
            createRadioCheckbox("teste", "checkbox", "Isso é um teste", "1");
            createRadioCheckbox("outroTeste", "checkbox", "Isso é OUTRO teste", "1", true);
            createSelect(
                "testeSelect",
                "Selecione uma das opcoes",
                array(
                    "1" => "Opcão 1",
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

        <!-- criar margem inferior -->
        <div class="mb-4"></div>
        <h3 class="text-center">Onde encontrar os projetos de sistemas da disciplina ?</h3>
        <p class="mb-4">Os projetos que iremos usar na disciplina, que envolvem a construcão e utilizacão de DBs relacionais SQL, estão descritos na pasta <b><a href="projetos">./projetos/</a></b>. Nessa pasta voce encontrará a descricão detalhada de cada projeto e o que é esperado que o sistema seja capaz de realizar. Voce também pode acessar os projetos atraves do menu (NAVBAR) que esta no inicio desta pasta, através do botão "Projetos".</p>

        <!-- criar margem inferior -->
        <div class="mb-4"></div>
        <h3 class="text-center">Como fazer testes unitários em PHP ?</h3>
        <div class="mb-4"></div>
        <ol>
            <li class="mb-3">Crie um arquivo no seguinte formato <kbd>classeQueQueremosTestarTest.php</kbd> dentro da pasta <kbd>./tests</kbd></li>
            <li class="mb-3">
                <span>Dentro desse arquivo voce deve ter o seguinte código:</span><br>
                <kbd>
                    <span>require_once __DIR__ . '/../src/classeQueQueremosTestar.php'</span><br>
                    <span> use PHPUnit\Framework\TestCase;</span><br>
                    <span> class ClasseQueQueremosTestarTest extends TestCase {</span><br>
                    <span> &nbsp;&nbsp;&nbsp;&nbsp;public function testNomeDoTesteAqui() {</span><br>
                    <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$myClass = new ClasseQueQueremosTestar(); </span><br>
                    <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$this->assertEquals($resultadoEsperado, $myClass->funcaoQueQueroTestar(parametrosDaFuncao));</span><br>
                    <span> &nbsp;&nbsp;&nbsp;&nbsp;}</span><br>
                    <span> }</span>
                </kbd>
            </li>
            <li class="mb-3">
                <p>Agora, dentro da raiz do projeto (<kbd>C:\xampp\htdocs\tutorial_php</kbd>) voce deve digitar o comando <kbd>.\vendor\bin\phpunit</kbd> no terminal do Windows (cmd.exe), como mostra o printscreen abaixo:</p>
                <img class="border" src="img/phpunit_execution.jpg" alt="">
            </li>
        </ol>



    </div>

    <!-- carrega bootstrap  -->
    <script src="http://localhost/tutorial_php/js/bootstrap.bundle.min.js"></script>

</body>

</html>
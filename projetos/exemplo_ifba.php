<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto IFBA</title>
    <link href="http://localhost/tutorial_php/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php
    // iremos incluir a biblioteca do bootstrap para PHP
    // o "include_once" garante que o arquivo bootstrap_components.php so sera incluido uma vez na pagina
    // ja o "include" simples permite que façamos vários includes do mesmo arquivo varias vezes
    include_once '../src/bootstrap_components.php';

    // iremos incluir a biblioteca do projetos_components (contem funcões  como createHeadingExemplos())
    include_once '../src/projetos_components.php';

    // cria o menu (navbar) para que possamos navegar com mais facilidade pelo site
    // para alterar o menu, acesse o arquivo nav_bar.php e faca os ajustes necessarios
    include_once '../src/nav_bar.php';
    ?>

    <div class="container">

        <!-- Simply set the `src` attribute to your MD file and win -->
        <zero-md src="exemplo_ifba.md"></zero-md>

        <div class="mb-3"></div>
        <zero-md src="dicas.md"></zero-md>
        <div class="mb-5"></div>

        <?php
        createHeadingExemplos();
        ?>

        <h3>Controle de frequência:</h3>

        <p>ão enviar o formulário abaixo, o dia e horário atual serão salvos no DB. Com isso podemos calcular quanto tempo o servidor permaneceu na instituição, para fins de calculo de carga horaria. </p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputMatricula", "text", "Matricula SUAP:", "123456789");
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Bater ponto</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->

        </form>

        <h3>Busca por carga horaria incompleta</h3>

        <p>ão enviar o formulário abaixo, o sistema deve nos informar quais servidores não cumpriram sua carga horaria (CH) em um determinado mes. </p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputMes", "number", "Mês:", "12");
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Verificar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>

        <p>Exemplo de lista de servidores que não cumpriram sua carga horaria (CH) em um determinado mes. </p>
        <?php
        createTable(array("Matricula SUAP", "Nome", "Cargo", "Regime", "CH Calculado", "CH Faltando"), array(
            array("123456789", "Cicrano", "Professor", "DE", "38.00", "2.00"),
            array("987654321", "Fulana", "Tecnico", "20H", "9.58", "10.42"),
            array("111222333", "Beltrano", "Professor", "40H", "35.48", "4.52"),
            array("000555777", "Alguem", "Professor", "20H", "19.44", "0.56"),
        ));
        ?>

        <div class="mb-3"></div> <!-- criar margem inferior -->
        <h3>Cadastro de empregados</h3>

        <p>ão enviar o formulário abaixo, o sistema deve cadastrar os servidores e terceirizados. </p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputMatricula", "text", "Matricula SUAP:", "123456789");
            createInput("inputNome", "text", "Nome:", "Fulano");
            createInput("inputEndereco", "text", "Endereço:", "Rua Vla bla, 157, Apto 101");
            createInput("inputTelefone", "text", "Telefone:", "(75) 99876-5432");
            createSelect("selectCargo", "Cargo:", array(
                "-1" => "Selecione",
                "0" => "Professor",
                "1" => "Técnico",
                "2" => "Terceirizado"
            ));
            createSelect("selectRegime", "Regime:", array(
                "-1" => "Selecione",
                "0" => "20H",
                "1" => "40H",
                "2" => "DE"
            ));
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>

        <p>Para vincular o professor com uma turma:</p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputMatricula", "text", "Matricula SUAP:", "123456789");
            createSelect("selectTurma", "Turma:", array(
                "-1" => "Selecione",
                "0" => "631",
                "1" => "632",
                "2" => "621",
                "3" => "622",
                "4" => "431",
                "5" => "432"
            ));
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>

        <div class="mb-3"></div> <!-- criar margem inferior -->
        <h3>Cadastro de Alunos</h3>

        <p>ão enviar o formulário abaixo, o sistema deve cadastrar os alunos. </p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputMatricula", "text", "Matricula:", "123456789");
            createInput("inputNome", "text", "Nome:", "Fulano");
            createInput("inputEndereco", "text", "Endereço:", "Rua Vla bla, 157, Apto 101");
            createInput("inputTelefone", "text", "Telefone:", "(75) 99876-5432");
            createSelect("selectCurso", "Curso:", array(
                "-1" => "Selecione",
                "0" => "Técnico",
                "1" => "Superior"
            ));
            createSelect("selectModalidade", "Modalidade:", array(
                "-1" => "Selecione",
                "0" => "Informática",
                "1" => "ADS",
                "2" => "Licenciatura em Informática"
            ));
            createInput("inputDataIngresso", "text", "Data de Ingresso:", "05/2023");
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>

        <p>Para cadastrar o aluno como matriculado em alguma turma:</p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputMatricula", "text", "Matricula:", "123456789");
            createSelect("selectTurma", "Turma:", array(
                "-1" => "Selecione",
                "0" => "631",
                "1" => "632",
                "2" => "422",
                "3" => "421"
            ));
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>


        <div class="mb-3"></div> <!-- criar margem inferior -->
        <h3>Controle de notas</h3>

        <p>ão enviar o formulário abaixo, o sistema deve registrar a nota de um aluno. </p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputMatricula", "text", "Matricula:", "123456789");
            createSelect("selectDisciplina", "Disciplina:", array(
                "-1" => "Selecione",
                "0" => "Informática",
                "1" => "ADS",
                "2" => "Licenciatura em Informática"
            ));
            createSelect("selectUnidade", "Unidade:", array(
                "-1" => "Selecione",
                "0" => "Unidade 1",
                "1" => "Unidade 2",
                "2" => "Unidade 3"
            ));
            createInput("inputNota", "text", "Nota:", "7.25");
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Registrar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>


        <div class="mb-3"></div> <!-- criar margem inferior -->
        <h3>Controle de frequência</h3>

        <p>ão enviar o formulário abaixo, o sistema deve registrar a frequência do aluno. </p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createInput("inputData", "text", "Data:", "01/03/2024");
            createInput("inputMatricula", "text", "Matricula:", "123456789");
            createSelect("selectDisciplina", "Disciplina:", array(
                "-1" => "Selecione",
                "0" => "Informática",
                "1" => "ADS",
                "2" => "Licenciatura em Informática"
            ));
            createSelect("selectUnidade", "Turma:", array(
                "-1" => "Selecione",
                "0" => "631",
                "1" => "632",
                "2" => "412"
            ));
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Registrar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>

        <div class="mb-3"></div> <!-- criar margem inferior -->
        <h3>Controle de status (aprovado/reprovado)</h3>

        <p>ão enviar o formulário abaixo, o sistema deve mostrar os alunos aprovados e os reprovados. </p>

        <form class="col" action="ifba.php" method="POST">
            <?php
            createSelect("selectUnidade", "Turma:", array(
                "-1" => "Selecione",
                "0" => "631",
                "1" => "632",
                "2" => "412"
            ));
            createSelect("selectDisciplina", "Disciplina:", array(
                "-1" => "Selecione",
                "0" => "Informática",
                "1" => "ADS",
                "2" => "Licenciatura em Informática"
            ));
            ?>
            <div class="mb-3"></div> <!-- criar margem inferior -->
            <button type="submit" class="btn btn-primary">Verificar</button>
            <div class="mb-3"></div> <!-- criar margem inferior -->
        </form>

        <p>Exemplo de lista de alunos aprovados e reprovados em uma disciplina especifica, pertencentes a uma determinada turma. </p>
        <?php
        createTable(array("Matricula", "Nome", "Turma", "Curso", "Disciplina", "Nota", "Frequência", "Resultado", "Motivo"), array(
            array("123456789", "Cicrano", "789123", "Superior", "Banco de Dados", "7.80", "80.0 %", "Aprovado", ""),
            array("987654321", "Fulana", "789123", "Superior", "Banco de Dados", "4.80", "92.5 %", "Reprovado", "por Nota"),
            array("111222333", "Beltrano", "789123", "Superior", "Banco de Dados", "6.50", "76.2 %", "Reprovado", "por Nota"),
            array("000555777", "Alguem", "789123", "Superior", "Banco de Dados", "9.75", "60.1 %", "Reprovado", "por Faltas"),
        ));
        ?>

    </div>

    <script src="http://localhost/tutorial_php/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="http://localhost/tutorial_php/js/zero-md.min.js"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto IFBA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    // iremos incluir a biblioteca do bootstrap para PHP
    // o "include_once" garante que o arquivo bootstrap_components.php so sera incluido uma vez na pagina
    // ja o "include" simples permite que façamos vários includes do mesmo arquivo varias vezes
    include_once '../src/bootstrap_components.php';

    // iremos incluir a biblioteca do projetos_components (contem funcões  como createDicas() e createHeadingExemplos())
    include_once '../src/projetos_components.php';

    // cria o menu (navbar) para que possamos navegar com mais facilidade pelo site
    // para alterar o menu, acesse o arquivo nav_bar.php e faca os ajustes necessarios
    include_once '../src/nav_bar.php';
    ?>

    <div class="container">

        <h2 class="text-center">Projeto de Sistema para o IFBA</h2>

        <p>O sistema deve atender aos seguintes requisitos:</p>
        <ol>
            <li><b>Controle de frequência</b>: Controlar a frequência dos professores e técnicos (controle de ponto).</li>
            <li><b>Busca por carga horaria incompleta:</b> Permitir buscar pelos servidores que não estão cumprindo com sua carga horaria (DE, 40H, ou 20h). Lembre-se, o sistema deve levar a carga horaria de cada servidor em consideração na hora de realizar a busca. Isto é, servidores 20h deveriam cumprir 20h e aqueles que não o fazem devem aparecer na lista de "inadimplentes". O mesmo deve ser feito com aqueles que são 40h. Considere que os servidores dedicação exclusiva (DE) tem carga horaria de 40h. </li>
            <li><b>Cadastro de empregados:</b> Terceirizados e servidores, sejam eles professores, técnicos ou outros, devem ser cadastrados no sistema. O cadastro deve conter o nome, endereço, telefone, cargo, e regime de carga horaria do servidor (DE, 40H, ou 20H). No caso dos professores, o sistema deve registrar também as turmas que ele leciona para que os chefes de departamento possam planejar o ano letivo (ou semestre, no caso dos cursos superiores). </li>
            <li><b>Cadastro de alunos:</b> Os aluno devem ser cadastrados no sistema. O cadastro deve conter o nome, endereço, telefone, curso (superior, técnico), modalidade (técnico em informática, ADS, ou Licenciatura em Informática), data de ingresso no curso (ano e mes), e a qual(is) turma(s) ele pertence. Lembre-se que alunos do curso superior pertencem a varias turmas, cada uma associada a uma disciplina (1 turma -> 1 disciplina). Ja os alunos do ensino técnico pertencem a uma unica turma, que possui aulas de várias disciplinas (1 turma -> N disciplinas). </li>
            <li><b>Controle de notas dos alunos:</b> O sistema deve controlar as notas dos alunos, por unidade e por disciplina. Considere que os alunos do curso técnico tem 3 unidades e os alunos dos cursos superiores tem apenas 1 unidade. O professor pode colocar N notas em cada unidade para cada aluno, e o sistema deve ser capaz de calcular a media do aluno (por unidade) usando essas notas. O sistema também deve ser capaz de fornecer uma média final (aritmética) para cada aluno.</li>
            <li><b>Controle de frequência dos alunos:</b> O sistema deve controlar a frequência dos alunos. Considere que o professor da turma insere no sistema os dias que o aluno esteve presente ou ausente em sala de aula. Dessa forma, a frequencia é calculada como <kbd>frequencia = total de presenças / total de aulas</kbd>. </li>
            <li><b>Controle de aprovação/reprovação:</b> O sistema deve informar se o aluno foi reprovado ou aprovado. No caso da reprovação, o sistema deve detalhar o motivo (reprovação por falta, ou reprovação por media). Considere que alunos do ensino técnico são aprovados com média >= 5.0, enquanto que alunos do ensino superior precisam de média >= 7.0. Ambos necessitam de uma frequência >= 75.0 % para conseguir a aprovação. </li>
        </ol>

        <?php
        createDicas();
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
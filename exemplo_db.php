<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Consulta ao DB</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    // iremos incluir a biblioteca do bootstrap para PHP
    // o "include_once" garante que o arquivo bootstrap_components.php so sera incluido uma vez na pagina
    // ja o "include" simples permite que façamos varios includes do mesmo arquivo varias vezes
    include_once './include/bootstrap_components.php';

    // cria o menu (navbar) para que possamos navegar com mais facilidade pelo site
    // para alterar o menu, acesse o arquivo nav_bar.php e faca os ajustes necessarios
    include_once './include/nav_bar.php';

    // cria a conexao com o DB "teste" (a informacao do nome do DB "teste" esta dentro do arquivo './db_connection_pdo.php'.
    //    Caso voce precisse usar outro nome de DB, é so alterar o nome "teste" la no arquivo para o nome do novo DB.)
    include './include/db_connection_pdo.php';
    ?>

    <div class="container">
        <h2 class="text-center">Siga os passos abaixo:</h2>
        <ol>
            <li>Crie um DB chamado "teste" usando o PHPMyAdmin (se o DB nao existir, aparecera uma mensagem de erro no final dessa pagina).</li>
            <li>Importe o arquivo "teste.sql" usando o PHPMyAdmin para o DB "teste" (<a href="index.php">siga o passo a passo para fazer a criacao do DB e Importacao do arquivo SQL usando o PHPMyAdmin aqui</a>).</li>
            <li>Clique no botao abaixo para executar a consulta SQL. Esta consulta ira criar a tabela "Produto" e inserir 3 produtos nela.</li>
            <li>Em seguida ira mostrar na tela os produtos inseridos.</li>
        </ol>

        <h2 class="text-center">Consulta SQL na tabela "produtos" do DB "teste"</h2>
        <p>Digite o preco minimo que voce deseja buscar no DB. Se existir um produto com esse preco no DB, ele sera mostrado na tabela abaixo. </p>
        <!-- estamos fazendo um POST para esta pagina (exemplo_db.php)  -->
        <!-- O PHP consegue detectar isso usando a variavel $_POST[id_do_campo] -->
        <!-- No nosso caso é $_POST["precoId"] -->
        <form class="col mb-4" action="exemplo_db.php" method="post">
            <?php
            createInput("precoId", "text", "Digite um preco:");
            ?>
            <button type="submit" class="btn btn-primary">Enviar consulta</button>
        </form>

        <?php


        // Verifica se o usuario enviou alguma coisa usando o campo "precoId" atraves do metodo POST do HTTP
        if (isset($_POST['precoId'])) {
            // pega o preco que o usuario envio usando o botao "Enviar consulta", 
            // atraves do metodo HTTP POST e campo "precoId" do HTML.
            $precoUsuario = $_POST["precoId"];
        } else {
            // O usuario nao enviou consulta nenhuma usando o metodo POST, 
            // entao definir precoUsuario = 0 (pra que a consulta SQL busque por todos os produtos com preco 
            // maior que 0 reais)
            $precoUsuario = 0;
        }

        // faz a consulta SELECT na tabela Produtos
        // "Pesquise pelos produtos cujo preco seja maior ou igual que um determinado valor, definido no comando execute"
        $consulta_sql = <<<HEREDOC
            SELECT id,nome,preco FROM produtos WHERE preco >= ? ;
        HEREDOC;
        $matriz_tabela = array();
        $resultados = $conn->prepare($consulta_sql);
        // vincula o valor $precoUsuario ao primeiro ? da consulta SQL
        // Logo, a consulta se torna:
        //      SELECT id,nome,preco FROM produtos WHERE preco >= $precoUsuario ;    
        // Este recurso é importante pra evitar SQL Injections.    
        $resultados->execute(array($precoUsuario));
        // Se nenhuma ? existir na consulta, podemos simplesmente fazer:
        //     $resultados->execute();
        // Se mais de um ? existir, basta passar os valores pelo vetor abaixo na ordem das ?
        // Suponha a seguinte consulta SQL:
        //      SELECT id,nome,preco FROM produtos WHERE preco >= ? AND nome LIKE ? ;
        // Nesse caso teriamos que fazer:
        //      $resultados->execute( array(15, "nome_do_produto") );
        foreach ($resultados as $linha) {
            // aqui devemos usar o nome das colunas para acessar cada dado da linha. 
            // No caso do SELECT da tabela Produto, estamos buscando pelas colunas "id", "nome" e "preco".
            array_push($matriz_tabela, array(
                $linha["id"], $linha["nome"], $linha["preco"]
            ));
        }

        // mostrar a tabela (primeiro parametro é o cabecalho da tabela, o segundo é matriz de dados)
        createTable(array("ID", "Nome", "Preço"), $matriz_tabela);
        ?>

    </div>

    <?php
    // desconecte o PHP do DB teste (importante fazer isso sempre que terminarmos de acessar o DB)
    include './include/db_disconnect_pdo.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>
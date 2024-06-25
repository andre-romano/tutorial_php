<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <?php
    include './include/nav_bar.php';
    ?>

    <div class="container">

        <p>Existe um comando PHP acima e varios abaixo desta tag HTML:</p>

        <?php
        echo "Esse texto foi criado usando PHP. O comando 'echo' é parecido com o comando print de outras linguagens de programacao. <br><br>";
        echo "Todo comando PHP precisa ser terminado com ; ";
        echo "<br><br>";

        echo "Strings em PHP são concatenadas usando o operador . <br><br>";
        echo "Exemplo: essa string foi criada usando " . "uma concatenacão <br><br>";

        function soma($a, $b)
        {
            return $a + $b;
        }
        echo "Esse é o resultado da funcão soma(2,3) = " . soma(2, 3) . " <br><br>";

        echo "O PHP tbm é usado para criar tags HTML dinamicamente, como no exemplo abaixo: <br><br>";
        echo "<h3> Essa tag foi criada pelo PHP </h3>";

        echo "Variaveis no PHP são escritas usando o simbolo \$ seguido do nome da variavel (ex: <kbd>\$NOME_VARIAVEL</kbd>). O PHP possui todas as operacões  aritmeticas e logicas basicas ( + - / *,  if / else, for / while / foreach) presentes na maioria das linguagens de programacao.<br><br>";
        $numero1 = 1;
        $numero2 = 2;
        echo "Strings iniciadas com aspas duplas (\") permitem ão PHP buscar por variaveis escritas dentro da string. Pra isso basta usar o simbolo <kbd>\$</kbd> seguido do nome da variavel (ex: <kbd>\$NOME_VARIAVEL</kbd>). <br><br>";
        echo "Exemplo: soma($numero1, $numero2) = " . soma($numero1, $numero2) . "<br><br>";

        echo "O PHP tbm possui bibliotecas que podem ser importadas usando o comando <kbd>include 'NOME_PASTA/NOME_ARQUIVO.php'</kbd>. Para usar essas bibliotecas basta chamar as funcões  que desejar. <br><br>";

        echo "Por convencão usamos a pasta <kbd>./include</kbd> para armazenar bibliotecas que nos mesmos criamos (ou baixamos da internet). <br><br>";

        include './include/bootstrap_components.php';

        createInput("teste", "text", "Este input foi criado:", "usando a biblioteca 'bootstrap_components.php'");
        ?>

        <p>A partir daqui, o ambiente PHP foi fechado. Tudo que for escrito sera interpretado como HTML simples!</p>

        <p>O ambiente PHP pode ser aberto e fechado quantas vezes forem necessarias dentro de um mesmo arquivo. Veja o exemplo abaixo:</p>

        <?php
        echo "O ambiente PHP foi aberto novamente. Essa string foi escrita por ele, inclusive.<br><br>";
        ?>

        <p id="front-end" class="footnote">O PHP é uma <b>linguagem de back-end</b>, pois ele é capaz de interagir com o DBMS diretamente, usando bibliotecas.</p>

        <p>Ja as linguagens que são utilizadas para construir a interface gráfica de uma página são chamadas de <b>linguagem de front-end</b> (ex: HTML, Javascript, CSS). Como o PHP pode ser utilizado para construir a interface gráfica (como estamos fazendo com as funções PHP que criam os componentes Bootstrap) podemos também dizer que, nesse caso, o PHP também faz parte do front-end do sistema.</p>

        <p>Considerando o PHP como linguagem de front-end, dizemos que o PHP é uma <b>linguagem <i>server-side</i></b>. Isto é, ele gera conteúdo dinamicamente do lado do servidor (server-side) e envia o conteúdo gerado (página HTML estática) para o navegador do usuário. Esta característica torna o PHP mais seguro do que as <b>linguagens de front-end <i>client-side</i></b> (que geram a pagina HTML usando Javascript, dentro do navegador de cada usuário). Porém isto também faz com que o PHP não seja capaz de criar paginas dinâmicas (que tem animações).</p>

        <p> É possível usar o PHP junto com linguagens client-side (como o Angular e o React) para ter o melhor de ambos (segurança no sistema e animação nas paginas). Para maiores detalhes vejam essas discussões <a href="https://www.webdesignemfoco.com/cursos/react-js/integrando-react-js-php-e-mysql">aqui</a> e <a href="https://www.computersciencemaster.com.br/como-criar-api-rest-com-php/">aqui</a>.</p>


        <p>Para mais detalhes sobre o PHP, veja <a target="_blank" href="https://www-w3schools-com.translate.goog/php/php_syntax.asp?_x_tr_sl=en&_x_tr_tl=pt&_x_tr_hl=en&_x_tr_pto=wapp">esse tutorial</a>.</p>

    </div>

    <!-- carrega bootstrap (unico arquivo JS ou script Javascript permitido neste trabalho!) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
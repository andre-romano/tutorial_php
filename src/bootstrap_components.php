<?php
// o PHP é como o Python, não verifica os tipos das variaveis (por padrao)
// isto é, uma variavel pode ter um tipo em um momento e outro em outro momento 
// ex: $nome = "Carlos"
//     $nome = 5
// Para evitar problemas associados aos tipos de variaveis, usamos o declare abaixo
// que forca o PHP a verificar o tipo das variaveis (int, float, str, etc) no momento 
// da execucão do script. So funciona com PHP >= 7.0
declare(strict_types=1); // isto 

// variaveis globais
// -- contador de radios HTML
$radioCount = 0;

/**
 * Cria um input HTML5 usando Bootstrap
 *
 * @param string $id ID do input (usado pelo PHP para pegar dados enviados pelo usuario atraves das variaveis $_GET e $_POST)
 * @param string $type define o tipo do input (vide https://www.w3schools.com/html/html_form_input_types.asp)
 * @param string $texto 
 * @param string $valor 
 * @return void
 */
function createInput(string $id, string $type = "text", string $texto = "Exemplo", string $valor = ""): void
{
    // o echo imprime na tela uma string
    // o <<<HEREDOC informa que essa string possui varias linhas e termina quando o texto HEREDOC aparecer
    //     IMPORTANTE: depois do <<<HEREDOC não pode ter nenhum caracter (nem mesmo um espaco sequer !!! )
    // $VARIAVEL indica que nesse local a variavel de nome VARIAVEL deve ser colocada no texto
    echo <<<HEREDOC
    <div class="row mb-3">
        <label for="$id" class="col-sm-2 col-form-label">$texto</label>
        <div class="col">
            <input type="$type" class="form-control" id="$id" name="$id" value="$valor">
        </div>
    </div>
    HEREDOC;
}

/**
 * Cria um input select HTML5 usando Bootstrap
 *
 * @param string $id ID do select (usado pelo PHP para pegar dados enviados pelo usuario atraves das variaveis $_GET e $_POST)
 * @param string $texto Texto a ser mostrado para o usuario ão lado do INPUT
 * @param array $options Opcões  que o usuario pode selecionar, no formato array("valor" => "texto")
 * @param string $selected Identifica qual das opcões  deve estar selecionada
 * @return void
 */
function createSelect(string $id, string $texto, array $options, string $selected = ""): void
{
    echo <<<HEREDOC
    <div class="row mb-3">
        <label for="$id" class="col-sm-2 col-form-label">$texto</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="$id" name="$id">                                
    HEREDOC;
    foreach ($options as $valor => $texto) {
        $selectedAttr = ($valor == $selected ? "selected" : "");
        echo "<option value=\"$valor\" $selectedAttr>$texto</option>";
    }
    echo <<<HEREDOC
            </select>
        </div>
    </div>
    HEREDOC;
}

// cria um input radio HTML5 
// o nome associa os radios diferentes para o envio do FORM HTML 
//     (isto é radios com mesmo nome definem um campo que o PHP ira receber no $_POST ou $_GET)
// se $type = "radio" cria um radio, 
// se $type = "checkbox" cria um checkbox
// o $checked indica se ele é criado selecionado ou nao
function createRadioCheckbox(string $nome, string $type, string $texto, string $valor,  bool $checked = false)
{
    global $radioCount; // declare que iremos usar essa variavel global nessa funcão    
    $radioCount++;
    $id = $nome . "_" . $radioCount; // o . é a concatenacão de strings no PHP
    $checkedAttr = ($checked ? "checked" : "");
    echo <<<HEREDOC
    <div class="form-check">
        <input id="$id" class="form-check-input" type="$type" name="$nome" value="$valor" $checkedAttr>
        <label class="form-check-label" for="$id">
            $texto
        </label>
    </div>
    HEREDOC;
}

// cria um input checkbox HTML5 com estilo de switch (do Android e iOS)
// o $id associa os checkboxes diferentes para o envio do FORM HTML 
//     (isto é checkboxes com mesmo nome definem um campo que o PHP ira receber no $_POST ou $_GET)
// $texto  é uma string
// o $checked indica se ele é criado selecionado ou nao
function createSwitchCheckbox(string $id, string $texto, bool $checked = false)
{
    $checkedAttr = ($checked ? "checked" : "");
    echo <<<HEREDOC
        <div class="form-check form-switch ">
            <input id="$id" class="form-check-input" type="checkbox" role="switch" name="$id" $checkedAttr>
            <label class="form-check-label" for="$id">$texto</label>
        </div>
    HEREDOC;
}

/*
 cria uma tabela 
 $header é o cabecalho da tabela.
 ex: $header = array("cabecalho 1", "cabecalho 2", ...);
 $body é o corpo da tabela.
 ex: $body = array(
        array("linha 1 - item 1", "linha 1 - item 2", ...), 
        array("linha 2 - item 1", "linha 2 - item 2", ...), 
        ...
     );
*/
function createTable(array $header, array $body)
{
    echo <<<HEREDOC
    <div class="container table-responsive">
        <table class="table table-hover align-middle border ">
            <thead>
                <tr>
    HEREDOC;
    foreach ($header as $cabecalho) {
        echo "<th scope=\"col\">$cabecalho</th>";
    }
    echo <<<HEREDOC
                </tr>
            </thead>
            <tbody>
    HEREDOC;
    foreach ($body as $linha) {
        echo "<tr>";
        foreach ($linha as $item) {
            echo "<td scope=\"row\">$item</td>";
        }
        echo "</tr>";
    }
    echo <<<HEREDOC
            </tbody>
        </table>
    </div>
    HEREDOC;
}

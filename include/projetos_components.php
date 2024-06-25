<?php

function createDicas()
{
    echo <<<HEREDOC
        <p><b>DICAS</b>:
        <ol>
        <li> <b>Pensem o projeto do DB com cuidado e cautela</b> pois é ele quem define o desempenho e recursos do sistema, que os usuários terão acesso. Mudar um esquema é MUITO mais fácil do que mudar um DB ja implementado em SQL. Este é o melhor momento para verificar se as tabelas satisfazem as formas normais.</li>
        <li> <b>Utilizem o <a href="https://sourceforge.net/projects/brmodelo/">BrModelo</a> para construir seu Projeto Lógico</b> do DB (modelo de tabelas relacionais, com atributos e chaves). Somente após voces terem revisado o modelo e verificado que ele é capaz de satisfazer a todos os requisitos do sistema é que vocês devem partir para a implementação em SQL. </li>
        <li> <b>Salvem o projeto do esquema logico</b> do BrModelo (arquivos .brM3) na pasta <kbd>./db</kbd> do seu projeto. </li>
        <li> <b>Utilizem o <a href="http://localhost/phpmyadmin">PHPMyAdmin</a> para criar e testar o DB</b> usando comandos SQL. </li>
        <li> <b>É o DBMS (ex: MySQL) quem deve garantir que as restrições de integridade</b> exigidas pelo projeto foram implementadas corretamente. OIsto é, a validação de dados (tamanho de uma string, se o dado é um numero ou texto, se existe a chave estrangeira na tabela referenciada, etc) deve ser feita pelo DB.</li>
        <li> <b>O PHP deve servir como uma ferramenta para interface DBMS <--> usuário</b>. Isto é, enviar e receber dados do usuário. Para isso, consultas SQL devem ser escritas no PHP instruindo como o DBMS deve acessar as tabelas para buscar ou armazenar informações. </li>
        <li> <b>Apos testar o DB, exportem ele usando o PHPMyAdmin</b> para um arquivo <kbd>.sql</kbd> que deve estar salvo na pasta <kbd>./db</kbd> do seu projeto.  Incluam neste arquivo SQL comentários explicando como cada tabela deve ser utilizada , descrevendo se necessário as relações com outras tabelas (chaves primarias e estrangeiras , consultas JOIN , etc). </li>
        <li> <b>Comentários no SQL</b> são escritos usando <kbd>/*</kbd> para iniciar o comentário e para terminar o comentário voce coloca <kbd>*/</kbd> .</li>
        <li> <b>Os arquivos de documentação (ex: Esquema Lógico, SQL, etc) facilitam o entendimento sobre o funcionamento do sistema</b>, tornando sua implementação no PHP mais fácil, rápida e livre de <i>bugs</i>. </li>        
        <li> <b>Sintam-se livres para modificar e utilizar os componentes Bootstrap</b> do arquivo "bootstrap_components.php" e "nav_bar.php". O NAVBAR em particular sera muito util para facilitar a navegação pelas telas do sistema. </li>        
        </ol>                
    HEREDOC;
}

function createHeadingExemplos()
{
    echo <<<HEREDOC
        <br>
        <h2 class="text-center">Exemplos de telas do sistema</h2>
        <div class="mb-4"></div>
        
        <p>Veja o exemplo de cada tela que voces podem construir abaixo. Lembrem-se, esses são <mark><b>APENAS EXEMPLOS</b></mark>. Cada um tem total liberdade para construir seu próprio sistema, com suas telas próprias. Inclusive, voces podem criar varias telas para implementar cada requisito do projeto, seguindo uma sequencia de passos/telas.</p>
    HEREDOC;
}

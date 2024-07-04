
## DICAS:

- **Pensem o projeto do DB com cuidado e cautela** pois é ele quem define o desempenho e recursos do sistema, que os usuários terão acesso. Mudar um esquema é MUITO mais fácil do que mudar um DB ja implementado em SQL. Este é o melhor momento para verificar se as tabelas satisfazem as formas normais.
- **Utilizem o BrModelo para construir seu Projeto Lógico** do DB (modelo de tabelas relacionais, com atributos e chaves). Somente após voces terem revisado o modelo e verificado que ele é capaz de satisfazer a todos os requisitos do sistema é que vocês devem partir para a implementação em SQL.
- **Salvem o projeto do esquema logico do BrModelo** (arquivos .brM3) na pasta ``./db`` do seu projeto.
- **Utilizem o PHPMyAdmin** para criar e testar o DB usando comandos SQL.
- **É o DBMS (ex: MySQL) quem deve garantir que as restrições de integridade exigidas pelo projeto foram implementadas corretamente**. OIsto é, a validação de dados (tamanho de uma string, se o dado é um numero ou texto, se existe a chave estrangeira na tabela referenciada, etc) deve ser feita pelo DB.
- **O PHP deve servir como uma ferramenta para interface DBMS <--> usuário**. Isto é, enviar e receber dados do usuário. Para isso, consultas SQL devem ser escritas no PHP instruindo como o DBMS deve acessar as tabelas para buscar ou armazenar informações.
- **Apos testar o DB**, exportem ele usando o PHPMyAdmin para um arquivo **.sql** que deve estar salvo na pasta ``./db`` do seu projeto. Incluam neste arquivo SQL comentários explicando como cada tabela deve ser utilizada , descrevendo se necessário as relações com outras tabelas (chaves primarias e estrangeiras , consultas JOIN , etc).
- **Comentários no SQL** são escritos usando ``/*`` para iniciar o comentário e para terminar o comentário voce digita ``*/`` .
- **Os arquivos de documentação (ex: Esquema Lógico, SQL, etc) facilitam o entendimento sobre o funcionamento do sistema**, tornando sua implementação no PHP mais fácil, rápida e livre de bugs.
- Sintam-se livres para **modificar e utilizar os componentes Bootstrap** dos arquivos ``src/bootstrap_components.php`` e ``src/nav_bar.php``. O NAVBAR em particular sera muito util para facilitar a navegação pelas telas do sistema.
- Os arquivos ``src/db_*.php`` servem para conectar e desconectar de um DB usando uma biblioteca PHP que se conecta com o MySQL. Vejam esses arquivos para mais detalhes.
- A pasta ``tests/`` contem arquivos de teste unitario, caso voces desejam realizar esse tipo de verificacao automatica do sistema. 
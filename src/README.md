# PASTA INCLUDE

Contem arquivos PHP que serão utilizados por outros scripts PHP.

Scripts PHP que serão utilizados varias vezes também devem ser colocados aqui. Por exemplo, bibliotecas, funções, ou códigos HTML que serão usados em varias telas (ex: NAVBAR).

Para usar um script desta pasta, basta usar o comando:

```php
include "src/NOME_DO_SCRIPT.php"
```

Se o script que esta usando o **include** estiver em uma sub pasta (como a pasta `projetos`), voce precisara colocar  um `../` antes do **src** para que ele funcione (vide exemplo abaixo).

```php
include "../src/NOME_DO_SCRIPT.php"
```

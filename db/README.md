# Pasta DB

Coloque nesta pasta os arquivos de projeto do BrModelo (arquivos .brM3) e o arquivode dump do banco de dados (arquivo .SQL criado pela aba Exportar do PHPMyAdmin).

**IMPORANTE:** Quando o PHPMyAdmin cria o arquivo .SQL (dump do banco de dados), <mark>ele pode não incluir os comandos</mark> `DROP DATABASE`, `CREATE DATABASE` e `USE`. Caso isso aconteça, voce deve adiciona-los antes de todos os comandos `CREATE TABLE`, conforme o exemplo abaixo. Lembre-se de incluir os comentários no arquivo, como foi feito no exemplo abaixo.

```sql
-- Tudo que começa com -- é um comentário

-- APAGA O DB SE ELE EXISTIR NO MYSQL DA SUA MAQUINA 
-- (isso evita problemas na hora de criar tabelas e dados no DB )
DROP DATABASE IF EXISTS `nome_do_seu_db`;

-- CRIA O DB NO MYSQL DA SUA MAQUINA 
CREATE DATABASE `nome_do_seu_db`;

-- FAZ O MYSQL USAR O SEU DB PARA RODAR TODOS OS 
-- COMANDOS SQL DAQUI PRA FRENTE
-- (isto é importante pois esse comando 
-- em qual DB as tabelas abaixo devem ser criadas) 
USE `nome_do_seu_db`;

-- CRIA A TABELA NO DB DEFINIDO PELO COMANDO "USE" ACIMA
CREATE TABLE `nome_da_tabela` (
  `nome_do_atributo` TIPO RESTRICOES_DE_INTEGRIDADE,
  OUTRAS_RESTRICOES_DE_INTEGRIDADE
);

-- INSERE DADOS NA TABELA ACIMA
INSERT INTO `nome_da_tabela` (`nome_do_atributo`, ...) 
VALUES ('item_de_uma_tupla_da_tabela', ...);

```

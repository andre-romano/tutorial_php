<?php

/*
Alem disso, o nome dos arquivos deve estar no formato classeQueQueremosTestarTest.php

Ex: Considere um classe chamada Exemplo, entao esse arquivo precisa ser nomeado exemploTest.php 
    (sem underline)
*/

/* Classes que queremos testar aqui 
 
elas podem ser importadas usando "include" ou "require" tbm 
(ao inves de definidas em um unico arquivo, como esta aqui)
*/
class Exemplo
{
    public function concatenateStrings($str1, $str2)
    {
        return $str1 . $str2;
    }
}

/* TestSuites aqui */

use PHPUnit\Framework\TestCase;

class ExemploTest extends TestCase
{
    public function testConcatenateStrings()
    {
        $myClass = new Exemplo();
        $expectedResult = 'helloworld';

        $result = $myClass->concatenateStrings('hello', 'world');

        $this->assertEquals($expectedResult, $result);
    }
}

// Para executar os testes acima, execute o seguinte comando dentro da pasta "tutorial_php":
// .\vendor\bin\phpunit

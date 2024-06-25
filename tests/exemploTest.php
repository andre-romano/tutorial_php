<?php

/*
Alem disso, o nome dos arquivos deve estar no formato classeQueQueremosTestarTest.php

Ex: Considere um classe chamada Exemplo, entao esse arquivo precisa ser nomeado exemploTest.php 
    (sem underline)
*/

/* Classes que queremos testar aqui */
require_once __DIR__ . '/../src/exemplo.php';

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

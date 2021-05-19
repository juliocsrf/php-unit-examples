<?php

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
    /**
     * @dataProvider somaDataProvider // PHPUnit vai utilizar o retorno dessa função como somaDataProvider
     */
    public function testSoma($n1, $n2, $esperado)
    {
        $calc = new Calculadora();

        self::assertEquals(
            $esperado,
            $calc->soma($n1, $n2)
        );
    }

    public function somaDataProvider()
    {
        return [
            [1, 1, 2],
            [20, 10, 30],
            [-100, 30, -70],
            [10.5, 0.5, 11.5]
        ];
    }
}
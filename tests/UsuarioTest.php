<?php

use PHPUnit\Framework\TestCase;

class UsuarioTest extends TestCase
{
    public function testExpectNomeCompleto()
    {
        $this->expectOutputString('Julio Fonseca');

        $usuario = new Usuario();
        $usuario->setNome('Julio');
        $usuario->setSobrenome('Fonseca');
        echo $usuario->getNomeCompleto();
    }

    public function testIdade() // Teste incompleto
    {

//        $usuario = new Usuario();
//        $usuario->setIdade(90);
//
//        $this->assertEquals(90, $usuario->getIdade());

        $this->markTestIncomplete('Falta finalizar os itens');
    }
}
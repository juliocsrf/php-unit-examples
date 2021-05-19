<?php

use PHPUnit\Framework\TestCase;

class ArquivoTest extends TestCase
{

    public function testFalhaNoInclude()
    {
        $this->expectError();
        include 'config.php';
    }

    public function testInclude()
    {
        self::assertFileExists('config.php');
    }
}
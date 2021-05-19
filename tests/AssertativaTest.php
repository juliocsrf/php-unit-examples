<?php

use PHPUnit\Framework\TestCase;

class AssertativaTest extends TestCase
{
    public function testArrayHasKey()
    {
        // assert ArrayHasKey

        $a = new Assertativa();
        $array = $a->getArray();

        $this->assertArrayHasKey('idade', $array);
    }

    public function testCount()
    {
        $a = new Assertativa();
        $array = $a->getArray();

        $this->assertCount(2, $array);
    }

    public function testEmpty()
    {
        $array = [];

        $this->assertEmpty($array);
    }

    public function testContain()
    {
        $array = [1, 2, 3, 4, 5];

        $this->assertContains(3, $array);
    }

    public function testContainsOnly()
    {
        $array = [1, 2, 3, 4, 5];

        $this->assertContainsOnly('int', $array);
    }

    public function testAttributeExists()
    {
        $this->assertClassHasAttribute('numero', Assertativa::class);
    }

    public function testRegex()
    {
        $this->assertMatchesRegularExpression('/^[a-z]{3}$/', 'bom');
    }

    public function testDirExists()
    {
        $this->assertDirectoryExists('classes');
    }

    public function testDirPermission1()
    {
        $this->assertDirectoryIsReadable('tests');
    }

    public function testDirPermission2()
    {
        $this->assertDirectoryIsWritable('tests');
    }

    public function testFileExists()
    {
        $this->assertFileExists('composer.json');
    }

    public function testFileEquals()
    {
        $this->assertFileEquals('lista1.txt', 'lista2.txt');
    }

    public function testBoolean1()
    {
        $this->assertTrue(is_file('lista1.txt'));
    }

    public function testBoolean2()
    {
        $this->assertFalse(is_file('vendor'));
    }

    public function testNull()
    {
        $var = null;

        $this->assertNull($var);
    }

    public function testString()
    {
        $this->assertIsString('Teste');
    }

    public function testStartString()
    {
        $this->assertStringStartsWith('Tes', 'Teste');
    }

    public function testEndtString()
    {
        $this->assertStringEndsWith('ste', 'Teste');
    }

    public function testNumeros()
    {
        $num = 20;
        $this->assertGreaterThan(10, $num);
        $this->assertGreaterThanOrEqual(20, $num);
        $this->assertLessThan(30, $num);
    }
}
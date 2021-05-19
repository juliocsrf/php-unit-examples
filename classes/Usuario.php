<?php

class Usuario
{
    private $nome;
    private $sobrenome;
    private $idade;

    public function setNome($n)
    {
        $this->nome = $n;
    }

    public function setSobrenome($n)
    {
        $this->sobrenome = $n;
    }

    public function getNomeCompleto()
    {
        return $this->nome . ' ' . $this->sobrenome;
    }
}
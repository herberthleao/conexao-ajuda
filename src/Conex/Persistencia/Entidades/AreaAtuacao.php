<?php

namespace Conex\Persistencia\Entidades;

class AreaAtuacao extends AbsId
{
    protected $nome;

    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }
}
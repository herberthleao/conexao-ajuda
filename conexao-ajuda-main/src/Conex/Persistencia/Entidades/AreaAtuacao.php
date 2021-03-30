<?php

namespace Conex\Persistencia\Entidades;

class AreaAtuacao extends AbsId
{
    protected $nome;

    public function __construct(
        $id = 0,
        $nome = ''
    ) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->table = 'area_atuacao';
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
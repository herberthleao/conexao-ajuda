<?php

namespace Conex\Persistencia\Entidades;

class Cidade extends AbsId
{
    protected $codCidade;
    protected $nome;
    protected $uf;

    public function __construct(
        $id = 0,
        $codCidade = '',
        $nome = '',
        $uf = ''
    ) {
        parent::__construct($id);
        $this->codCidade = $codCidade;
        $this->nome = $nome;
        $this->uf = $uf;
        $this->table = 'Cidade';
    }

    public function setCodCidade($codCidade)
    {
        $this->codCidade = $codCidade;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    function getCodcidade()
    {
        return $this->codCidade;
    }
    function getNome()
    {
        return $this->nome;
    }
    function getUf()
    {
        return $this->uf;
    }
}
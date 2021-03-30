<?php

namespace Conex\Persistencia\Entidades;

class Parceiros extends AbsId
{
    protected $nome;
    protected $cnpj;
    protected $senha;

    public function __construct(
        $id = 0,
        $nome = '',
        $cnpj = '',
        $senha = ''
    ) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->senha = $senha;
        $this->table = 'parceiros';
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    function getNome()
    {
        return $this->nome;
    }
    function getCnpj()
    {
        return $this->cnpj;
    }
    function getSenha()
    {
        return $this->senha;
    }
}
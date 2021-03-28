<?php

namespace Conex\Persistencia\Entidades;

class Ong extends AbsId
{
    protected $nome;
    protected $cnpj;
    protected $descricao;
    protected $telefone;
    protected $cidade;
    protected $numero;
    protected $cep;
    protected $bairro;
    protected $senha;

    public function __construct($nome, $cnpj, $descricao, $telefone, $cidade, $numero, $cep, $bairro, $senha)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->descricao = $descricao;
        $this->telefone = $telefone;
        $this->cidade = $cidade;
        $this->numero = $numero;
        $this->cep = $cep;
        $this->bairro = $bairro;
        $this->senha = $senha;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
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
    function getDescricao()
    {
        return $this->descricao;
    }
    function getTelefone()
    {
        return $this->telefone;
    }
    function getCidade()
    {
        return $this->cidade;
    }
    function getNumero()
    {
        return $this->numero;
    }
    function getCep()
    {
        return $this->cep;
    }
    function getBairro()
    {
        return $this->bairro;
    }
    function getSenha()
    {
        return $this->senha;
    }
}
<?php

namespace Conex\Persistencia\Entidades;

class Voluntario extends AbsId
{
    protected $nome;
    protected $email;
    protected $cpf;
    protected $telefone;
    protected $disponibilidade;
    protected $tipoSangue;
    protected $descricao;
    protected $cidade;
    protected $logradouro;
    protected $numero;
    protected $complemento;
    protected $cep;
    protected $bairro;
    protected $senha;

    public function __construct(
        $id = 0,
        $nome = '',
        $email = '',
        $cpf = '',
        $telefone = '',
        $disponibilidade = '',
        $tipoSangue = '',
        $descricao = '',
        $cidade = '',
        $logradouro = '',
        $numero = '',
        $complemento = '',
        $cep = '',
        $bairro = '',
        $senha = ''
    ) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->email = $email;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
        $this->disponibilidade = $disponibilidade;
        $this->tipoSangue = $tipoSangue;
        $this->descricao = $descricao;
        $this->cidade = $cidade;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->complemento = $complemento;
        $this->cep = $cep;
        $this->bairro = $bairro;
        $this->senha = $senha;
        $this->table = 'voluntario';
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }
    public function setDisponibilidade($disponibilidade)
    {
        $this->disponiblidade = $disponibilidade;
    }
    public function setTipoSangue($tipoSangue)
    {
        $this->tipoSangue = $tipoSangue;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
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
    function getEmail()
    {
        return $this->email;
    }
    function getCpf()
    {
        return $this->cpf;
    }
    function getTelefone()
    {
        return $this->telefone;
    }
    function getDisponibilidade()
    {
        return $this->disponibilidade;
    }
    function getTipoSangue()
    {
        return $this->tipoSangue;
    }
    function getDescricao()
    {
        return $this->descricao;
    }
    function getCidade()
    {
        return $this->cidade;
    }
    function getLogradouro()
    {
        return $this->logradouro;
    }
    function getNumero()
    {
        return $this->numero;
    }
    function getComplemento()
    {
        return $this->complemento;
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
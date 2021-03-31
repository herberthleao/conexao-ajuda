<?php

namespace Conex\Persistencia\Entidades;

class Eventos extends AbsId
{
    protected $nome;
    protected $descricao;
    protected $idOng;
    protected $idArea;
    protected $uf;
    protected $cidade;
    protected $data;

    public function __construct(
        $id = 0,
        $nome = '',
        $descricao = '',
        $idOng = '',
        $idArea = '',
        $tipo = '',
        $uf = '',
        $cidade = '',
        $data = ''
    ) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->idOng = $idOng;
        $this->idArea = $idArea;
        $this->tipo = $tipo;
        $this->uf = $uf;
        $this->cidade = $cidade;
        $this->data = $data;
        $this->table = 'eventos';
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    
    public function setIdOng($idOng)
    {
        $this->idOng = $idOng;
    }
    
    public function setIdArea($idArea)
    {
        $this->idArea = $idArea;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function setUF($uf)
    {
        $this->uf = $uf;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    function getNome()
    {
        return $this->nome;
    }
    
    function getDescricao()
    {
        return $this->descricao;
    }
    
    function getIdOng()
    {
        return $this->idOng;
    }

    function getIdArea()
    {
        return $this->idArea;
    }

    function getTipo()
    {
        return $this->tipo;
    }

    function getUF()
    {
        return $this->uf;
    }

    function getCidade()
    {
        return $this->cidade;
    }

    function getData()
    {
        return $this->data;
    }
}
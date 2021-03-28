<?php

namespace Conex\Persistencia\Entidades;

class Eventos extends AbsId
{
    protected $nome;
    protected $descricao;
    protected $idOng;
    protected $idArea;

    public function __construct($nome, $descricao, $idOng, $idArea)
    {
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->idOng = $idOng;
        $this->idArea = $idArea;
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
}
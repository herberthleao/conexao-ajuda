<?php

namespace Conex\Persistencia\Entidades;

class VolunAtuacao
{
    protected $idVolun;
    protected $idAtuacao;

    public function __construct($idVolun, $idAtuacao)
    {
        $this->idVolun = $idVolun;
        $this->idAtuacao = $idAtuacao;
    }

    public function setIdVolun($idVolun)
    {
        $this->idVolun = $idVolun;
    }
    public function setIdAtuacao($idAtuacao)
    {
        $this->idAtuacao = $idAtuacao;
    }

    function getIdVolun()
    {
        return $this->idVolun;
    }
    function getIdAtuacao()
    {
        return $this->idAtuacao;
    }
}
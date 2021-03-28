<?php

namespace Conex\Persistencia\Entidades;

class VolunEvento
{
    protected $idVolun;
    protected $idEvento;

    public function __construct($idVolun, $idEvento)
    {
        $this->idVolun = $idVolun;
        $this->IdEvento = $idEvento;
    }

    public function setIdVolun($idVolun)
    {
        $this->idVolun = $idVolun;
    }
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;
    }

    function getIdVolun()
    {
        return $this->idVolun;
    }
    function getIdEvento()
    {
        return $this->idEvento;
    }
}
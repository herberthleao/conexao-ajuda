<?php

namespace Conex\Persistencia\Entidades;

abstract class AbsId
{
    protected $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    function getId()
    {
        return $this->id;
    }
}
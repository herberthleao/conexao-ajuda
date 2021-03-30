<?php

namespace Conex\Persistencia\Entidades;

abstract class AbsId
{
    protected $id;
    protected string $table;

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

    public function getTable(): string
    {
        return $this->table;
    }
}
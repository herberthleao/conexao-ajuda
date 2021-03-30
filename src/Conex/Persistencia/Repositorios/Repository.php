<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Database;
use Conex\Persistencia\Entidades\AbsId;

abstract class Repository
{
    protected Database $database;
    protected AbsId $entidade;

    public function __construct()
    {
        $this->database = Database::getInstance();
    }
}
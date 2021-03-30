<?php

namespace Conex\Services;

use Conex\Persistencia\Repositorios\Repository;

abstract class Service
{
    protected Repository $repository;
}
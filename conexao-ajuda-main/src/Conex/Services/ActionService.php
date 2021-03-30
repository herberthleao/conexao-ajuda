<?php

namespace Conex\Services;

use Conex\Persistencia\Repositorios\AcaoRepository;

final class ActionService extends Service
{
    public function __construct()
    {
        $this->repository = new AcaoRepository();
    }

    public function getActions(): array
    {
        $data = [];
        foreach ($this->repository->getAcoes() as $key => $action) {
            $data[$key]['id'] = $action->getId();
            $data[$key]['name'] = $action->getNome();
            $data[$key]['description'] = $action->getDescricao();
            $data[$key]['institution'] = $action->getIdOng();
            $data[$key]['area'] = $action->getIdArea();
        }

        return $data;
    }
}
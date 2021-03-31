<?php

namespace Conex\Services;

use Conex\Persistencia\Repositorios\AcaoRepository;
use Conex\Utils\Date;

final class ActionService extends Service
{
    public function __construct()
    {
        $this->repository = new AcaoRepository();
    }

    public function getActions(int $limit): array
    {
        $data = [];
        foreach ($this->repository->getAcoes($limit) as $key => $action) {
            $data[$key]['id'] = $action->getId();
            $data[$key]['name'] = $action->getNome();
            $data[$key]['description'] = $action->getDescricao();
            $data[$key]['institution'] = $action->getIdOng();
            $data[$key]['area'] = $action->getIdArea();
            $data[$key]['type'] = $action->getTipo();
            $data[$key]['location'] = $action->getCidade()
                . ', ' . $action->getUF();
            $data[$key]['date'] = Date::format($action->getData());
        }

        return $data;
    }
}
<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Entidades\AreaAtuacao;

final class AcaoAreaAtuacao extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->entidade = new AreaAtuacao();
    }

    public function getAcoes(): array
    {
        $entidades = [];
        $result = $this->database->query(
            'SELECT acao.*, area.nome as areaAtuacao
            FROM ' . $this->entidade->getTable() . 'as acao,
            areaAtuacao, area_atuacao as area '
        );

        if ($result) {
            foreach ($result as $entidade) {
                $entidades[] = new areaAtuacao(
                    $entidade->id,
                    $entidade->nome
                );
            }
        }

        return $entidades;
    }
}
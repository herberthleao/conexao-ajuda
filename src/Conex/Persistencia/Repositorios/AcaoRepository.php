<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Entidades\Eventos;

final class AcaoRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->entidade = new Eventos();
    }

    public function getAcoes(): array
    {
        $entidades = [];
        $result = $this->database->query(
            'SELECT acao.*, ong.nome as ong, area.nome as area
            FROM ' . $this->entidade->getTable() . ' as acao,
            ong, area_atuacao as area'
        );

        if ($result) {
            foreach ($result as $entidade) {
                $entidades[] = new Eventos(
                    $entidade->id,
                    $entidade->nome,
                    $entidade->descricao,
                    $entidade->ong,
                    $entidade->area
                );
            }
        }

        return $entidades;
    }

    public function setAcoes(): void
    {
        $result = $this->database->insertQuery(
            'INSERT INTO eventos(nome, descricao, ong, area) values'
        );
    }
}
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

    public function getAcoes(int $limit): array
    {
        $actions = [];
        $query = 'SELECT acao.*, ong.nome as ong, area.nome as area
            FROM ' . $this->entidade->getTable() . ' as acao,
            ong, area_atuacao as area ORDER BY data DESC';
        $query .= ($limit > 0) ? ' LIMIT ' . $limit : ''; 

        $result = $this->database->query($query);

        if ($result) {
            foreach ($result as $action) {
                $actions[] = new Eventos(
                    $action->id,
                    $action->nome,
                    $action->descricao,
                    $action->ong,
                    $action->area,
                    $action->tipo,
                    $action->uf,
                    $action->cidade,
                    $action->data
                );
            }
        }

        return $actions;
    }

    public function setAcoes(): void
    {
        $query = 'INSERT INTO'.$this->entidade->getTable().'() VALUES ()';
        $result = $this->database->insertQuery($query);
    }
}
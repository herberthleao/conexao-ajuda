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

    public function findActions(array $words): array
    {
        $where = <<< WHERE
        (UPPER(eventos.nome) LIKE "%{word}%"
        OR UPPER(eventos.descricao) LIKE "%{word}%"
        OR UPPER(ong.nome) LIKE "%{word}%"
        OR UPPER(area.nome) LIKE "%{word}%"
        OR UPPER(eventos.tipo) LIKE "%{word}%"
        OR UPPER(eventos.cidade) LIKE "%{word}%"
        OR UPPER(eventos.uf) LIKE "%{word}%")
WHERE;
        $query = <<< QUERY
            SELECT eventos.*, ong.nome as ong, area.nome as area
            FROM eventos, ong, area_atuacao as area
            WHERE ong.id = eventos.id_ong AND area.id = eventos.id_area
            AND (%s)
QUERY;
        $search = str_replace('{word}', $words[0], $where);
        for ($i = 1; $i < count($words); $i++) {
            $search .= ' OR ' . str_replace('{word}', $words[0], $where);
        }

        $result = $this->database->query(sprintf($query, $search));

        $actions = [];
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
}
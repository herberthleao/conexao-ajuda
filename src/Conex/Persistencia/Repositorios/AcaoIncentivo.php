<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Entidades\Incentivo;

final class AcaoIncentivo extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->entidade = new Incentivo();
    }

    public function getAcoes(): array
    {
        $entidades = [];
        $result = $this->datbase->query(
            'SELECT acao.*, incentivo.titulo as incentivo FROM ' .
                $this->entidade->getTable() . 'as acao,incentivo,
             incentivo as area'
        );

        if ($result) {
            foreach ($result as $entidade) {
                $entidades[] = new Incentivo(
                    $entidade->titulo,
                    $entidade->descricao,
                    $entidade->idParceiro
                );
            }
        }

        return $entidades;
    }

    public function setAcoes(): void
    {
        $result = $this->database->insertQuery(
            'INSERT INTO incentivo(titulo, descricao, idParceiro) values'
        );
    }
}
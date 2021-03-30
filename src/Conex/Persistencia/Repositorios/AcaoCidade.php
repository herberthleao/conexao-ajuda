<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Entidades\Cidade;

final class Acaocidade extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->entidade = new Cidade();
    }

    public function getAcoes(): array
    {
        $entidades = [];
        $result = $this->database->query(
            'SELECT acao.*, cidade.nome as cidade FROM '
                . $this->entidade->getTable() . ' as acao, cidade'
        );

        if ($result) {
            foreach ($result as $entidade) {
                $entidades[] = new Cidade(
                    $entidade->id,
                    $entidade->codCidade,
                    $entidade->nome,
                    $entidade->uf
                );
            }
        }

        return $entidades;
    }

    public function setAcoes(): void
    {
        $result = $this->database->insertQuery(
            'INSERT INTO cidade(codCidade, nome, uf) values '
        );
    }
}
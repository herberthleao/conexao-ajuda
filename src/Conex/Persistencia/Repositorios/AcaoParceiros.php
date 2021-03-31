<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Entidades\Parceiros;

final class AcaoParceiros extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->entidade = new Parceiros();
    }

    public function getAcoes(): array
    {
        $entidades = [];
        $result = $this->database->query(
            'SELECT acao.*, parceiros.nome as parceiros, FROM' .
                $this->entidade->getTable() . 'as acao, parceiros, 
            parceiros as parceiros'
        );

        if ($result) {
            foreach ($result as $entidade) {
                $entidades[] = new Parceiros(
                    $entidade->id,
                    $entidade->nome,
                    $entidade->cnpj,
                    $entidade->senha,
                );
            }
        }

        return $entidades;
    }

    public function setAcoes(): void
    {
        $result = $this->database->insertQuery(
            'INSERT INTO parceiros(nome, cnpj, senha) values'
        );
    }
}
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

    public function checkPartner(string $cnpj): bool
    {
        $result = $this->database->query(
            "SELECT COUNT(*) FROM parceiros WHERE cnpj = '$cnpj'"
        );

        if ($result > 0) {
            return true;
        }

        return false;
    }

    public function checkPass(string $cnpj, string $pass): bool
    {
        $result = $this->database->query(
            "SELECT COUNT(*) FROM parceiros WHERE cnpj = '$cnpj' AND senha = '$pass'"
        );

        if ($result > 0) {
            return true;
        }

        return false;
    }

    public function getName(string $cnpj): string
    {
        $result = $this->database->query(
            "SELECT * FROM parceiros WHERE cnpj = '$cnpj'"
        );

        if ($result) {
            return $result[0]->nome;
        }

        return '';
    }

    public function setAcoes(): void
    {
        $result = $this->database->insertQuery(
            'INSERT INTO parceiros(nome, cnpj, senha) values'
        );
    }
}
<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Entidades\Ong;

final class AcaoOng extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->entidade = new Ong();
    }

    public function getAcoes(): array
    {
        $entidades = [];
        $result = $this->database->query(
            'SELECT acao.*, ong.nome as ong
            FROM ' . $this->entidade->getTable() . ' as acao,
            ong,'
        );

        if ($result) {
            foreach ($result as $entidade) {
                $entidades[] = new Ong(
                    $entidade->id,
                    $entidade->nome,
                    $entidade->cnpj,
                    $entidade->descricao,
                    $entidade->telefone,
                    $entidade->cidade,
                    $entidade->numero,
                    $entidade->cep,
                    $entidade->bairro,
                    $entidade->senha
                );
            }
        }

        return $entidades;
    }

    public function setAcoes(): void
    {
        $result = $this->database->insertQuery(
            'INSERT INTO ong(nome, cnpj, descricao, telefone, cidade, numero, cep, bairro, senha) values'
        );
    }
}
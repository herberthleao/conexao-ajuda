<?php

namespace Conex\Persistencia\Repositorios;

use Conex\Persistencia\Entidades\Voluntario;

final class AcaoVolunt extends Repository
{
    public function __construct()
    {
        parent::__construct();
        $this->entidade = new Voluntario();
    }

    public function getAcoes(): array
    {
        $entidades = [];
        $result = $this->database->query(
            'SELECT acao.* voluntario.nome as voluntario, area.nome as area
            FROM ' . $this->entidade->getTable() . ' as acao, voluntario, 
            area_atuacao as area'
        );

        if ($result) {
            foreach ($result as $entidade) {
                $entidades[] = new Voluntario(
                    $entidade->id,
                    $entidade->nome,
                    $entidade->email,
                    $entidade->cpf,
                    $entidade->telefone,
                    $entidade->disponibilidade,
                    $entidade->tipoSangue,
                    $entidade->descricao,
                    $entidade->logradouro,
                    $entidade->numero,
                    $entidade->complemento,
                    $entidade->cep,
                    $entidade->bairro,
                    $entidade->senha
                );
            }
        }

        return $entidades;
    }
}
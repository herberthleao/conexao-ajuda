<?php

namespace Conex\Persistencia\Entidades;

class Incentivo extends AbsId
{
    protected $titulo;
    protected $descricao;
    protected $idParceiro;


    public function __construct(
        $id = 0,
        $titulo = '',
        $descricao = '',
        $idParceiro = ''
    ) {
        parent::__construct($id);
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->idParceiro = $idParceiro;
        $this->table = 'incentivo';
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function setIdParceiro($idParceiro)
    {
        $this->iDparceiro = $idParceiro;
    }
    function getTitulo()
    {
        return $this->titulo;
    }
    function getDescricao()
    {
        return $this->descricao;
    }
    function getIdParceiro()
    {
        return $this->idParceiro;
    }
}
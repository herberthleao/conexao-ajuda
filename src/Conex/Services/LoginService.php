<?php

namespace Conex\Services;

use Conex\Persistencia\Repositorios\AcaoVolunt;

final class LoginService extends Service
{
    public function __construct()
    {
        $this->repository = new AcaoVolunt();
    }

    public function validarLogin(string $login, string $pass): string
    {
        if (!empty($login) && !empty($pass)) {
            $value = $this->repository->selecionaLogin($login, $pass);

            if ($value == true) 
            {
                return '';
            } else
            {
                return 'Dados inválidos!';
            }
        }
    }
}
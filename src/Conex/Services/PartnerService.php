<?php

namespace Conex\Services;

use Conex\Persistencia\Repositorios\AcaoParceiros;

final class PartnerService extends Service
{
    public function __construct()
    {
        $this->repository = new AcaoParceiros();
    }

    public function checkData(string $cnpj, string $pass): ?string
    {
        if (!empty($cnpj) && !empty($pass)) {
            if ($this->repository->checkPartner($cnpj)) {
                if ($this->repository->checkPass($cnpj, $pass)) {
                    return $this->repository->getName($cnpj);
                } else {
                    return null;
                }
            }
        }

        return '';
    }
}
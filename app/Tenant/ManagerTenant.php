<?php

namespace App\Tenant;

class ManagerTenant
{

    public function subdomain()
    {
        $piecesHost = explode('.', request()->getHost());

        return $piecesHost[0];
    }
}

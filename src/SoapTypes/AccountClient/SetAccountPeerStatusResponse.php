<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SetAccountPeerStatusResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $success = null;

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }


}


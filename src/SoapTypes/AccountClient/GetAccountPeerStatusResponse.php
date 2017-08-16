<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetAccountPeerStatusResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $status = null;

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }


}


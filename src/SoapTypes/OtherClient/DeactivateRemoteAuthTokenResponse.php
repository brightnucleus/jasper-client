<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class DeactivateRemoteAuthTokenResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $status = null;

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }


}


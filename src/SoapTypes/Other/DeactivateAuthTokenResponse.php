<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class DeactivateAuthTokenResponse extends JasperResponse
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


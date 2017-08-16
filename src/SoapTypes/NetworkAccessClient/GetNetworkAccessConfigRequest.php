<?php

namespace BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetNetworkAccessConfigRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}


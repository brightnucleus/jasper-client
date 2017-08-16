<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetRoamingSteeringProfileInfoRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $RSPID = null;

    /**
     * @return string
     */
    public function getRSPID()
    {
        return $this->RSPID;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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


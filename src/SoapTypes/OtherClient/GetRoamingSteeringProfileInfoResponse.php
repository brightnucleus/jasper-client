<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetRoamingSteeringProfileInfoResponse extends JasperResponse
{

    /**
     * @var RoamingSteeringProfileInfoResponseType
     */
    private $RSPID_RES = null;

    /**
     * @return RoamingSteeringProfileInfoResponseType
     */
    public function getRSPID_RES()
    {
        return $this->RSPID_RES;
    }


}


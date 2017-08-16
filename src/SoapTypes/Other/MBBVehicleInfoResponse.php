<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class MBBVehicleInfoResponse extends JasperResponse
{

    /**
     * @var MBBVehicleInfoResponseType
     */
    private $VehicleInfo = null;

    /**
     * @return MBBVehicleInfoResponseType
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }


}


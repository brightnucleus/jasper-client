<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class MBBVehicleInfoRequest extends JasperRequest
{

    /**
     * @var MBBVehicleInfoRequestType
     */
    private $VehicleInfo = null;

    /**
     * @return MBBVehicleInfoRequestType
     */
    public function getVehicleInfo()
    {
        return $this->VehicleInfo;
    }


}


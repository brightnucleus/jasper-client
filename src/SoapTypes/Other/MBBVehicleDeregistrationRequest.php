<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class MBBVehicleDeregistrationRequest extends JasperRequest
{

    /**
     * @var MBBVehicleDeregistrationRequestType
     */
    private $VehicleDeregistration = null;

    /**
     * @return MBBVehicleDeregistrationRequestType
     */
    public function getVehicleDeregistration()
    {
        return $this->VehicleDeregistration;
    }


}


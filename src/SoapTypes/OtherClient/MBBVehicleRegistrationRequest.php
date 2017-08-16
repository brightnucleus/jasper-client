<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class MBBVehicleRegistrationRequest extends JasperRequest
{

    /**
     * @var MBBVehicleRegistrationRequestType
     */
    private $VehicleRegistration = null;

    /**
     * @return MBBVehicleRegistrationRequestType
     */
    public function getVehicleRegistration()
    {
        return $this->VehicleRegistration;
    }


}


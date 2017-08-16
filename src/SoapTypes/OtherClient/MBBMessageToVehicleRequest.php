<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class MBBMessageToVehicleRequest extends JasperRequest
{

    /**
     * @var MBBMessageToVehicleRequestType
     */
    private $MessageToVehicle = null;

    /**
     * @return MBBMessageToVehicleRequestType
     */
    public function getMessageToVehicle()
    {
        return $this->MessageToVehicle;
    }


}


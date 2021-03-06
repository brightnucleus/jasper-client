<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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


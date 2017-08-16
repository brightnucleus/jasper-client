<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class DevicesType
{

    /**
     * @var DeviceType
     */
    private $Device = null;

    /**
     * @return DeviceType
     */
    public function getDevice()
    {
        return $this->Device;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class MBBVehicleDeregistrationRequestType
{

    /**
     * @var string
     */
    private $VIN = null;

    /**
     * @var string
     */
    private $Brand = null;

    /**
     * @var string
     */
    private $Country = null;

    /**
     * @var DevicesType
     */
    private $Devices = null;

    /**
     * @return string
     */
    public function getVIN()
    {
        return $this->VIN;
    }

    /**
     * @return string
     */
    public function getBrand()
    {
        return $this->Brand;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @return DevicesType
     */
    public function getDevices()
    {
        return $this->Devices;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class MBBVehicleInfoRequestType
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
     * @var string
     */
    private $DeviceType = null;

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
     * @return string
     */
    public function getDeviceType()
    {
        return $this->DeviceType;
    }


}


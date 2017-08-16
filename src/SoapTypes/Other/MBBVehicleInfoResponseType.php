<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class MBBVehicleInfoResponseType
{

    /**
     * @var ResultType
     */
    private $Result = null;

    /**
     * @var string
     */
    private $VIN = null;

    /**
     * @var DevicesType
     */
    private $Devices = null;

    /**
     * @return ResultType
     */
    public function getResult()
    {
        return $this->Result;
    }

    /**
     * @return string
     */
    public function getVIN()
    {
        return $this->VIN;
    }

    /**
     * @return DevicesType
     */
    public function getDevices()
    {
        return $this->Devices;
    }


}


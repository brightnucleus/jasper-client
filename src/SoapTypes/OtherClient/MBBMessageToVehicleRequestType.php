<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class MBBMessageToVehicleRequestType
{

    /**
     * @var string
     */
    private $VIN = null;

    /**
     * @var string
     */
    private $DeviceType = null;

    /**
     * @var string
     */
    private $MessageType = null;

    /**
     * @var string
     */
    private $Message = null;

    /**
     * @var positiveInteger
     */
    private $ValidityPeriod = null;

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
    public function getDeviceType()
    {
        return $this->DeviceType;
    }

    /**
     * @return string
     */
    public function getMessageType()
    {
        return $this->MessageType;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->Message;
    }

    /**
     * @return positiveInteger
     */
    public function getValidityPeriod()
    {
        return $this->ValidityPeriod;
    }


}


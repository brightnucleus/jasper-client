<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class DeviceType
{

    /**
     * @var string
     */
    private $Type = null;

    /**
     * @var Identification
     */
    private $Identification = null;

    /**
     * @var string
     */
    private $IMSI = null;

    /**
     * @var string
     */
    private $IMEI = null;

    /**
     * @var string
     */
    private $ICCID = null;

    /**
     * @var string
     */
    private $MSISDN = null;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * @return Identification
     */
    public function getIdentification()
    {
        return $this->Identification;
    }

    /**
     * @return string
     */
    public function getIMSI()
    {
        return $this->IMSI;
    }

    /**
     * @return string
     */
    public function getIMEI()
    {
        return $this->IMEI;
    }

    /**
     * @return string
     */
    public function getICCID()
    {
        return $this->ICCID;
    }

    /**
     * @return string
     */
    public function getMSISDN()
    {
        return $this->MSISDN;
    }


}


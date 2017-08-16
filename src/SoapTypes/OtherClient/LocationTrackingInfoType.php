<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class LocationTrackingInfoType
{

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var locationEvent
     */
    private $locationEvent = null;

    /**
     * @var string
     */
    private $networkId = null;

    /**
     * @var string
     */
    private $gtAddress = null;

    /**
     * @var MSC
     */
    private $MSC = null;

    /**
     * @var SGSN
     */
    private $SGSN = null;

    /**
     * @var string
     */
    private $operatorMccMnc = null;

    /**
     * @var \DateTime
     */
    private $eventDateTime = null;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return locationEvent
     */
    public function getLocationEvent()
    {
        return $this->locationEvent;
    }

    /**
     * @return string
     */
    public function getNetworkId()
    {
        return $this->networkId;
    }

    /**
     * @return string
     */
    public function getGtAddress()
    {
        return $this->gtAddress;
    }

    /**
     * @return MSC
     */
    public function getMSC()
    {
        return $this->MSC;
    }

    /**
     * @return SGSN
     */
    public function getSGSN()
    {
        return $this->SGSN;
    }

    /**
     * @return string
     */
    public function getOperatorMccMnc()
    {
        return $this->operatorMccMnc;
    }

    /**
     * @return \DateTime
     */
    public function getEventDateTime()
    {
        return $this->eventDateTime;
    }


}


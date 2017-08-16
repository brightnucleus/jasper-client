<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class DataUsageDetailType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $cycleStartDate = null;

    /**
     * @var string
     */
    private $terminalId = null;

    /**
     * @var string
     */
    private $endConsumerId = null;

    /**
     * @var string
     */
    private $customer = null;

    /**
     * @var bool
     */
    private $billable = null;

    /**
     * @var string
     */
    private $zone = null;

    /**
     * @var \DateTime
     */
    private $sessionStartTime = null;

    /**
     * @var int
     */
    private $duration = null;

    /**
     * @var float
     */
    private $dataVolume = null;

    /**
     * @var string
     */
    private $countryCode = null;

    /**
     * @var string
     */
    private $serviceType = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return \DateTime
     */
    public function getCycleStartDate()
    {
        return $this->cycleStartDate;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @return string
     */
    public function getEndConsumerId()
    {
        return $this->endConsumerId;
    }

    /**
     * @return string
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return bool
     */
    public function getBillable()
    {
        return $this->billable;
    }

    /**
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * @return \DateTime
     */
    public function getSessionStartTime()
    {
        return $this->sessionStartTime;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @return float
     */
    public function getDataVolume()
    {
        return $this->dataVolume;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }


}


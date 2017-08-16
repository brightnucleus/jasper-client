<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class VoiceUsageDetailType
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
    private $callTime = null;

    /**
     * @var string
     */
    private $calledNumber = null;

    /**
     * @var float
     */
    private $callDuration = null;

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
    public function getCallTime()
    {
        return $this->callTime;
    }

    /**
     * @return string
     */
    public function getCalledNumber()
    {
        return $this->calledNumber;
    }

    /**
     * @return float
     */
    public function getCallDuration()
    {
        return $this->callDuration;
    }


}


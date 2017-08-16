<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SmsUsageDetailType
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
    private $dateSent = null;

    /**
     * @var string
     */
    private $sentFrom = null;

    /**
     * @var string
     */
    private $sentTo = null;

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
    public function getDateSent()
    {
        return $this->dateSent;
    }

    /**
     * @return string
     */
    public function getSentFrom()
    {
        return $this->sentFrom;
    }

    /**
     * @return string
     */
    public function getSentTo()
    {
        return $this->sentTo;
    }


}


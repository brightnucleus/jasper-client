<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalUsageResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $terminalId = null;

    /**
     * @var string
     */
    private $customer = null;

    /**
     * @var string
     */
    private $endConsumerId = null;

    /**
     * @var float
     */
    private $totalDataVolume = null;

    /**
     * @var float
     */
    private $billableDataVolume = null;

    /**
     * @var \DateTime
     */
    private $cycleStartDate = null;

    /**
     * @var bool
     */
    private $billable = null;

    /**
     * @var float
     */
    private $totalSMSVolume = null;

    /**
     * @var float
     */
    private $totalVoiceVolume = null;

    /**
     * @var float
     */
    private $billableSMSVolume = null;

    /**
     * @var float
     */
    private $billableVoiceVolume = null;

    /**
     * @var string
     */
    private $ratePlan = null;

    /**
     * @var float
     */
    private $eventsUsage = null;

    /**
     * @var int
     */
    private $totalEvents = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
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
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @return string
     */
    public function getEndConsumerId()
    {
        return $this->endConsumerId;
    }

    /**
     * @return float
     */
    public function getTotalDataVolume()
    {
        return $this->totalDataVolume;
    }

    /**
     * @return float
     */
    public function getBillableDataVolume()
    {
        return $this->billableDataVolume;
    }

    /**
     * @return \DateTime
     */
    public function getCycleStartDate()
    {
        return $this->cycleStartDate;
    }

    /**
     * @return bool
     */
    public function getBillable()
    {
        return $this->billable;
    }

    /**
     * @return float
     */
    public function getTotalSMSVolume()
    {
        return $this->totalSMSVolume;
    }

    /**
     * @return float
     */
    public function getTotalVoiceVolume()
    {
        return $this->totalVoiceVolume;
    }

    /**
     * @return float
     */
    public function getBillableSMSVolume()
    {
        return $this->billableSMSVolume;
    }

    /**
     * @return float
     */
    public function getBillableVoiceVolume()
    {
        return $this->billableVoiceVolume;
    }

    /**
     * @return string
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * @return float
     */
    public function getEventsUsage()
    {
        return $this->eventsUsage;
    }

    /**
     * @return int
     */
    public function getTotalEvents()
    {
        return $this->totalEvents;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


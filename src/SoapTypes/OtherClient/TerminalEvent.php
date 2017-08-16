<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class TerminalEvent
{

    /**
     * @var int
     */
    private $eventInstanceId = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $eventName = null;

    /**
     * @var \DateTime
     */
    private $createdDate = null;

    /**
     * @var string
     */
    private $activeStatus = null;

    /**
     * @var \DateTime
     */
    private $startDate = null;

    /**
     * @var \DateTime
     */
    private $endDate = null;

    /**
     * @var float
     */
    private $price = null;

    /**
     * @var float
     */
    private $totalPrimaryIncludedData = null;

    /**
     * @var float
     */
    private $primaryDataRemaining = null;

    /**
     * @var float
     */
    private $totalPrimaryIncludedSMS = null;

    /**
     * @var float
     */
    private $primarySMSRemaining = null;

    /**
     * @return int
     */
    public function getEventInstanceId()
    {
        return $this->eventInstanceId;
    }

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
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * @return string
     */
    public function getActiveStatus()
    {
        return $this->activeStatus;
    }

    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getTotalPrimaryIncludedData()
    {
        return $this->totalPrimaryIncludedData;
    }

    /**
     * @return float
     */
    public function getPrimaryDataRemaining()
    {
        return $this->primaryDataRemaining;
    }

    /**
     * @return float
     */
    public function getTotalPrimaryIncludedSMS()
    {
        return $this->totalPrimaryIncludedSMS;
    }

    /**
     * @return float
     */
    public function getPrimarySMSRemaining()
    {
        return $this->primarySMSRemaining;
    }


}


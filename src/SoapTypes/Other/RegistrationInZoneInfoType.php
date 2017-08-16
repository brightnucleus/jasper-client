<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class RegistrationInZoneInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $ratePlanName = null;

    /**
     * @var string
     */
    private $gtAddress = null;

    /**
     * @var string
     */
    private $zoneName = null;

    /**
     * @var \DateTime
     */
    private $eventDate = null;

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
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return string
     */
    public function getRatePlanName()
    {
        return $this->ratePlanName;
    }

    /**
     * @return string
     */
    public function getGtAddress()
    {
        return $this->gtAddress;
    }

    /**
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }


}


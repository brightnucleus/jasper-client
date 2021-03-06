<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class DailySessionConnectionInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $triggerType = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $ratePlanName = null;

    /**
     * @var int
     */
    private $currentSessionUsage = null;

    /**
     * @var int
     */
    private $sessionUsageThreshold = null;

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
    public function getTriggerType()
    {
        return $this->triggerType;
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
     * @return int
     */
    public function getCurrentSessionUsage()
    {
        return $this->currentSessionUsage;
    }

    /**
     * @return int
     */
    public function getSessionUsageThreshold()
    {
        return $this->sessionUsageThreshold;
    }


}


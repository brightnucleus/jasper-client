<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class TooFewDailyConnectionInfoType
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


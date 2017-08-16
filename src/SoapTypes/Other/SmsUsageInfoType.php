<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SmsUsageInfoType
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
    private $alertType = null;

    /**
     * @var float
     */
    private $totalDailySmsUsage = null;

    /**
     * @var float
     */
    private $totalCtdSmsUsage = null;

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
    public function getAlertType()
    {
        return $this->alertType;
    }

    /**
     * @return float
     */
    public function getTotalDailySmsUsage()
    {
        return $this->totalDailySmsUsage;
    }

    /**
     * @return float
     */
    public function getTotalCtdSmsUsage()
    {
        return $this->totalCtdSmsUsage;
    }


}


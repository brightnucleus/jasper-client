<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class Past24HUssdUsageInfoType
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
    private $totalDailyUssdUsage = null;

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
    public function getTotalDailyUssdUsage()
    {
        return $this->totalDailyUssdUsage;
    }


}


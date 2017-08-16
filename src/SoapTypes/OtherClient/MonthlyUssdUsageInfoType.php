<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class MonthlyUssdUsageInfoType
{

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $zoneName = null;

    /**
     * @var string
     */
    private $ussdUsageType = null;

    /**
     * @var string
     */
    private $ratePlanName = null;

    /**
     * @var float
     */
    private $totalIncludedZoneUsage = null;

    /**
     * @var float
     */
    private $totalActualZoneUsage = null;

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
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * @return string
     */
    public function getUssdUsageType()
    {
        return $this->ussdUsageType;
    }

    /**
     * @return string
     */
    public function getRatePlanName()
    {
        return $this->ratePlanName;
    }

    /**
     * @return float
     */
    public function getTotalIncludedZoneUsage()
    {
        return $this->totalIncludedZoneUsage;
    }

    /**
     * @return float
     */
    public function getTotalActualZoneUsage()
    {
        return $this->totalActualZoneUsage;
    }


}


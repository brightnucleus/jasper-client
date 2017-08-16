<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class MonthlyDataUsageInfoType
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
     * @var string
     */
    private $includedUsageType = null;

    /**
     * @var string
     */
    private $includedNetworkType = null;

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

    /**
     * @return string
     */
    public function getIncludedUsageType()
    {
        return $this->includedUsageType;
    }

    /**
     * @return string
     */
    public function getIncludedNetworkType()
    {
        return $this->includedNetworkType;
    }


}


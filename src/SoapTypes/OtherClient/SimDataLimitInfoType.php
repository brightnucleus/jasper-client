<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimDataLimitInfoType
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
     * @var float
     */
    private $totalIncludedUsage = null;

    /**
     * @var float
     */
    private $totalActualUsage = null;

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
     * @return float
     */
    public function getTotalIncludedUsage()
    {
        return $this->totalIncludedUsage;
    }

    /**
     * @return float
     */
    public function getTotalActualUsage()
    {
        return $this->totalActualUsage;
    }


}


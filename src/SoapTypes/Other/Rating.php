<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class Rating
{

    /**
     * @var \DateTime
     */
    private $termStartDate = null;

    /**
     * @var \DateTime
     */
    private $termEndDate = null;

    /**
     * @var string
     */
    private $renewalPolicy = null;

    /**
     * @var string
     */
    private $renewalRatePlan = null;

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
     * @return \DateTime
     */
    public function getTermStartDate()
    {
        return $this->termStartDate;
    }

    /**
     * @return \DateTime
     */
    public function getTermEndDate()
    {
        return $this->termEndDate;
    }

    /**
     * @return string
     */
    public function getRenewalPolicy()
    {
        return $this->renewalPolicy;
    }

    /**
     * @return string
     */
    public function getRenewalRatePlan()
    {
        return $this->renewalRatePlan;
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


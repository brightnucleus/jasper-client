<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class NoConnectionInfoType
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
     * @var \DateTime
     */
    private $evaluatingTime = null;

    /**
     * @var int
     */
    private $noConnectionThreshold = null;

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
     * @return \DateTime
     */
    public function getEvaluatingTime()
    {
        return $this->evaluatingTime;
    }

    /**
     * @return int
     */
    public function getNoConnectionThreshold()
    {
        return $this->noConnectionThreshold;
    }


}


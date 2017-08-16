<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimExpirationInfoType
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
    private $expirationDate = null;

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
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }


}


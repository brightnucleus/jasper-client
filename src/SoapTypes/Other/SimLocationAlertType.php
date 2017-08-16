<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SimLocationAlertType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $alertType = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $msisdn = null;

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
    public function getAlertType()
    {
        return $this->alertType;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
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
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


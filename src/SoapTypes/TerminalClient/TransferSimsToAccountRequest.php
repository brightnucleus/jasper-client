<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class TransferSimsToAccountRequest extends JasperRequest
{

    /**
     * @var iccidList
     */
    private $iccidList = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var string
     */
    private $ratePlanName = null;

    /**
     * @var string
     */
    private $commPlanName = null;

    /**
     * @var anyURI
     */
    private $callbackUrl = null;

    /**
     * @return iccidList
     */
    public function getIccidList()
    {
        return $this->iccidList;
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
    public function getRatePlanName()
    {
        return $this->ratePlanName;
    }

    /**
     * @return string
     */
    public function getCommPlanName()
    {
        return $this->commPlanName;
    }

    /**
     * @return anyURI
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }


}


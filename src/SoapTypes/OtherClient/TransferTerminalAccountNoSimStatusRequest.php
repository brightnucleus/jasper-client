<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class TransferTerminalAccountNoSimStatusRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var int
     */
    private $accountid = null;

    /**
     * @var string
     */
    private $ratePlan = null;

    /**
     * @var string
     */
    private $communicationPlan = null;

    /**
     * @var \DateTime
     */
    private $dateShipped = null;

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
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return int
     */
    public function getAccountid()
    {
        return $this->accountid;
    }

    /**
     * @return string
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * @return string
     */
    public function getCommunicationPlan()
    {
        return $this->communicationPlan;
    }

    /**
     * @return \DateTime
     */
    public function getDateShipped()
    {
        return $this->dateShipped;
    }


}


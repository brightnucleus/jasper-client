<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetGlobalSimSubscriptionMappingRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $primaryIccid = null;

    /**
     * @var string
     */
    private $primaryImsi = null;

    /**
     * @var string
     */
    private $primaryMsisdn = null;

    /**
     * @var string
     */
    private $targetOperator = null;

    /**
     * @var string
     */
    private $targetAccount = null;

    /**
     * @return string
     */
    public function getPrimaryIccid()
    {
        return $this->primaryIccid;
    }

    /**
     * @return string
     */
    public function getPrimaryImsi()
    {
        return $this->primaryImsi;
    }

    /**
     * @return string
     */
    public function getPrimaryMsisdn()
    {
        return $this->primaryMsisdn;
    }

    /**
     * @return string
     */
    public function getTargetOperator()
    {
        return $this->targetOperator;
    }

    /**
     * @return string
     */
    public function getTargetAccount()
    {
        return $this->targetAccount;
    }


}


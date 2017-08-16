<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class GlobalSimSubscriptionInfoType
{

    /**
     * @var anyType
     */
    private $targetIccid = null;

    /**
     * @var anyType
     */
    private $targetMsisdn = null;

    /**
     * @var anyType
     */
    private $targetImsi = null;

    /**
     * @return anyType
     */
    public function getTargetIccid()
    {
        return $this->targetIccid;
    }

    /**
     * @return anyType
     */
    public function getTargetMsisdn()
    {
        return $this->targetMsisdn;
    }

    /**
     * @return anyType
     */
    public function getTargetImsi()
    {
        return $this->targetImsi;
    }


}


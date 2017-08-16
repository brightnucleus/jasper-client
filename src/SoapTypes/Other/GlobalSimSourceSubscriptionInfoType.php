<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class GlobalSimSourceSubscriptionInfoType
{

    /**
     * @var anyType
     */
    private $sourceIccid = null;

    /**
     * @var anyType
     */
    private $sourceMsisdn = null;

    /**
     * @var anyType
     */
    private $sourceImsi = null;

    /**
     * @return anyType
     */
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return anyType
     */
    public function getSourceMsisdn()
    {
        return $this->sourceMsisdn;
    }

    /**
     * @return anyType
     */
    public function getSourceImsi()
    {
        return $this->sourceImsi;
    }


}


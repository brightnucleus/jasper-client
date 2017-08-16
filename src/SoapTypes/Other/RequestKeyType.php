<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class RequestKeyType
{

    /**
     * @var string
     */
    private $billingAccountNumber = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @return string
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}


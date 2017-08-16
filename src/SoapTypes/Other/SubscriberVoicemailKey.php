<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberVoicemailKey
{

    /**
     * @var string
     */
    private $billingAccountNumber = null;

    /**
     * @var string
     */
    private $msisdn = null;

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
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetSubscriberPolicyDetailsRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}


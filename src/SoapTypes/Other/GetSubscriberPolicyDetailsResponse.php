<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetSubscriberPolicyDetailsResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $policy = null;

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
    public function getPolicy()
    {
        return $this->policy;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class OTANADResetRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $callbackUrl = null;

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
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }


}


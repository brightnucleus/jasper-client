<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class OTAMsisdnRequest extends JasperRequest
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
     * @var string
     */
    private $callbackUrl = null;

    /**
     * @var bool
     */
    private $msisdnMismatchOverride = null;

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
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }

    /**
     * @return bool
     */
    public function getMsisdnMismatchOverride()
    {
        return $this->msisdnMismatchOverride;
    }


}


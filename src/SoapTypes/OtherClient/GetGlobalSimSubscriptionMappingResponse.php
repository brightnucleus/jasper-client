<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetGlobalSimSubscriptionMappingResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $targetIccid = null;

    /**
     * @var string
     */
    private $targetImsi = null;

    /**
     * @var string
     */
    private $targetMsisdn = null;

    /**
     * @return string
     */
    public function getTargetIccid()
    {
        return $this->targetIccid;
    }

    /**
     * @return string
     */
    public function getTargetImsi()
    {
        return $this->targetImsi;
    }

    /**
     * @return string
     */
    public function getTargetMsisdn()
    {
        return $this->targetMsisdn;
    }


}


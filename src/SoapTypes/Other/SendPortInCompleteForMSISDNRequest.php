<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SendPortInCompleteForMSISDNRequest extends JasperRequest
{

    /**
     * @var RequestKeyType
     */
    private $requestKey = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @return RequestKeyType
     */
    public function getRequestKey()
    {
        return $this->requestKey;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


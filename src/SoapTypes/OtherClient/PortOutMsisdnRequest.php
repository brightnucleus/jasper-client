<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class PortOutMsisdnRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


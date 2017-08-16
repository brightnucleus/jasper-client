<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetSubscriberHistoryByMsisdnRequest extends JasperRequest
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


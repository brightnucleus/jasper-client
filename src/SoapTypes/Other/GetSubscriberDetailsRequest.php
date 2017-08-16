<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetSubscriberDetailsRequest extends JasperRequest
{

    /**
     * @var RequestKeyType
     */
    private $requestKey = null;

    /**
     * @return RequestKeyType
     */
    public function getRequestKey()
    {
        return $this->requestKey;
    }


}


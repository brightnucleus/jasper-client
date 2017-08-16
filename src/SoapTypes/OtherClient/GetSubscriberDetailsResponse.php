<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetSubscriberDetailsResponse extends JasperResponse
{

    /**
     * @var SubscriberDetailsType
     */
    private $subscriberDetails = null;

    /**
     * @return SubscriberDetailsType
     */
    public function getSubscriberDetails()
    {
        return $this->subscriberDetails;
    }


}


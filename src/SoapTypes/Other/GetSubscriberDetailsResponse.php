<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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


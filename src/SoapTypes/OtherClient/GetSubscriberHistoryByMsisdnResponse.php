<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetSubscriberHistoryByMsisdnResponse extends JasperResponse
{

    /**
     * @var subscriber
     */
    private $subscriber = null;

    /**
     * @return subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }


}


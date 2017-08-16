<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberDetailsType
{

    /**
     * @var TargetStateType
     */
    private $subscriberStatus = null;

    /**
     * @var SubscriberIdentifierType
     */
    private $subscriberIdentifiers = null;

    /**
     * @return TargetStateType
     */
    public function getSubscriberStatus()
    {
        return $this->subscriberStatus;
    }

    /**
     * @return SubscriberIdentifierType
     */
    public function getSubscriberIdentifiers()
    {
        return $this->subscriberIdentifiers;
    }


}


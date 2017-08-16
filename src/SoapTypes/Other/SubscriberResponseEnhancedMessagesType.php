<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberResponseEnhancedMessagesType
{

    /**
     * @var SubscriberResponseEnhancedMessageType
     */
    private $enhancedResponseMessage = null;

    /**
     * @return SubscriberResponseEnhancedMessageType
     */
    public function getEnhancedResponseMessage()
    {
        return $this->enhancedResponseMessage;
    }


}


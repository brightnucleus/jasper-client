<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberResponseType
{

    /**
     * @var SubscriberResponseStatusType
     */
    private $responseStatus = null;

    /**
     * @var SubscriberResponseMessageType
     */
    private $responseMessage = null;

    /**
     * @var SubscriberResponseEnhancedMessagesType
     */
    private $enhancedResponseMessages = null;

    /**
     * @return SubscriberResponseStatusType
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }

    /**
     * @return SubscriberResponseMessageType
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * @return SubscriberResponseEnhancedMessagesType
     */
    public function getEnhancedResponseMessages()
    {
        return $this->enhancedResponseMessages;
    }


}


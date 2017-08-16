<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SubscriberSendSMSByMsisdnRequest extends JasperRequest
{

    /**
     * @var RequestKeyType
     */
    private $requestKey = null;

    /**
     * @var string
     */
    private $sentToMsisdn = null;

    /**
     * @var string
     */
    private $messageText = null;

    /**
     * @var messageTextEncodingType
     */
    private $messageTextEncoding = null;

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
    public function getSentToMsisdn()
    {
        return $this->sentToMsisdn;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * @return messageTextEncodingType
     */
    public function getMessageTextEncoding()
    {
        return $this->messageTextEncoding;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SendSMSToMsisdnRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $sentToMsisdn = null;

    /**
     * @var string
     */
    private $messageText = null;

    /**
     * @var unsignedByte
     */
    private $tpvp = null;

    /**
     * @var string
     */
    private $messageTextEncoding = null;

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
     * @return unsignedByte
     */
    public function getTpvp()
    {
        return $this->tpvp;
    }

    /**
     * @return string
     */
    public function getMessageTextEncoding()
    {
        return $this->messageTextEncoding;
    }


}


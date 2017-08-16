<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SendSMSRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $sentToIccid = null;

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
    public function getSentToIccid()
    {
        return $this->sentToIccid;
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


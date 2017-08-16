<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GlobalSendSMSRequest extends JasperRequest
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


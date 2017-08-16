<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SendBulkSMSToMsisdnRequest extends JasperRequest
{

    /**
     * @var msisdnList
     */
    private $msisdnList = null;

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
     * @return msisdnList
     */
    public function getMsisdnList()
    {
        return $this->msisdnList;
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


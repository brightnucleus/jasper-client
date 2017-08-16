<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SendBulkSMSRequest extends JasperRequest
{

    /**
     * @var iccidList
     */
    private $iccidList = null;

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
     * @return iccidList
     */
    public function getIccidList()
    {
        return $this->iccidList;
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


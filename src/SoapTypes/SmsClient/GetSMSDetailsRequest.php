<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetSMSDetailsRequest extends JasperRequest
{

    /**
     * @var smsMsgIds
     */
    private $smsMsgIds = null;

    /**
     * @var string
     */
    private $messageTextEncoding = null;

    /**
     * @return smsMsgIds
     */
    public function getSmsMsgIds()
    {
        return $this->smsMsgIds;
    }

    /**
     * @return string
     */
    public function getMessageTextEncoding()
    {
        return $this->messageTextEncoding;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SmsMessages
{

    /**
     * @var SmsMessageType
     */
    private $smsMessage = null;

    /**
     * @return SmsMessageType
     */
    public function getSmsMessage()
    {
        return $this->smsMessage;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetSMSDetailsResponse extends JasperResponse
{

    /**
     * @var smsMessages
     */
    private $smsMessages = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return smsMessages
     */
    public function getSmsMessages()
    {
        return $this->smsMessages;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


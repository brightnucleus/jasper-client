<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SendSMSResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $smsMsgId = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return int
     */
    public function getSmsMsgId()
    {
        return $this->smsMsgId;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


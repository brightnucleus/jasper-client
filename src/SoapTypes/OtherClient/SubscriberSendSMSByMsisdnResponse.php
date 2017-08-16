<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SubscriberSendSMSByMsisdnResponse extends JasperResponse
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


<?php

namespace BrightNucleus\JasperClient\SoapTypes\SmsClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SendBulkSMSResponse extends JasperResponse
{

    /**
     * @var smsMsgIdList
     */
    private $smsMsgIdList = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return smsMsgIdList
     */
    public function getSmsMsgIdList()
    {
        return $this->smsMsgIdList;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


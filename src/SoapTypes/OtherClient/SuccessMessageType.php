<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SuccessMessageType
{

    /**
     * @var string
     */
    private $msgType = null;

    /**
     * @var string
     */
    private $msgText = null;

    /**
     * @return string
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

    /**
     * @return string
     */
    public function getMsgText()
    {
        return $this->msgText;
    }


}


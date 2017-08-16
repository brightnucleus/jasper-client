<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetSessionInfoResponse extends JasperResponse
{

    /**
     * @var sessionInfo
     */
    private $sessionInfo = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return sessionInfo
     */
    public function getSessionInfo()
    {
        return $this->sessionInfo;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


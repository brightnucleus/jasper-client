<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SessionInfo
{

    /**
     * @var SessionInfoType
     */
    private $session = null;

    /**
     * @return SessionInfoType
     */
    public function getSession()
    {
        return $this->session;
    }


}


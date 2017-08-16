<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetUserSessionResponse extends JasperResponse
{

    /**
     * @var anyURI
     */
    private $sessionUrl = null;

    /**
     * @var bool
     */
    private $success = null;

    /**
     * @return anyURI
     */
    public function getSessionUrl()
    {
        return $this->sessionUrl;
    }

    /**
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }


}


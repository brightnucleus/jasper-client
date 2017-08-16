<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetAuthTokenResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $authToken = null;

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }


}


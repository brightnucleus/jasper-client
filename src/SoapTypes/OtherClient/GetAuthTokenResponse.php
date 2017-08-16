<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

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


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class DeactivateAuthTokenRequest extends JasperRequest
{

    /**
     * @var UserIdentifierType
     */
    private $localUser = null;

    /**
     * @var UserIdentifierType
     */
    private $remoteUser = null;

    /**
     * @var string
     */
    private $authToken = null;

    /**
     * @return UserIdentifierType
     */
    public function getLocalUser()
    {
        return $this->localUser;
    }

    /**
     * @return UserIdentifierType
     */
    public function getRemoteUser()
    {
        return $this->remoteUser;
    }

    /**
     * @return string
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }


}


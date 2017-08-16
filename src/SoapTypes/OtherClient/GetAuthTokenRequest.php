<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAuthTokenRequest extends JasperRequest
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
     * @var int
     */
    private $linkageType = null;

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
     * @return int
     */
    public function getLinkageType()
    {
        return $this->linkageType;
    }


}


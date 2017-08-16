<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class EditUserForPartnersRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $username = null;

    /**
     * @var ChangeTypeEnum
     */
    private $changetype = null;

    /**
     * @var string
     */
    private $timezone = null;

    /**
     * @var string
     */
    private $language = null;

    /**
     * @var string
     */
    private $sharedSecretToken = null;

    /**
     * @var string
     */
    private $newSharedSecretToken = null;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return ChangeTypeEnum
     */
    public function getChangetype()
    {
        return $this->changetype;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getSharedSecretToken()
    {
        return $this->sharedSecretToken;
    }

    /**
     * @return string
     */
    public function getNewSharedSecretToken()
    {
        return $this->newSharedSecretToken;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class UserIdentifierType
{

    /**
     * @var string
     */
    private $namespace = null;

    /**
     * @var string
     */
    private $account = null;

    /**
     * @var string
     */
    private $username = null;

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


}


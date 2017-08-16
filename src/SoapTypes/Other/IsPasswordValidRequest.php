<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class IsPasswordValidRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $username = null;

    /**
     * @var string
     */
    private $password = null;

    /**
     * @var string
     */
    private $serviceProvider = null;

    /**
     * @var string
     */
    private $account = null;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }


}


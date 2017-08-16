<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class IsNewUsernameValidRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $username = null;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }


}


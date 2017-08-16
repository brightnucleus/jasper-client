<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class DeleteUserRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $userLogin = null;

    /**
     * @return string
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }


}


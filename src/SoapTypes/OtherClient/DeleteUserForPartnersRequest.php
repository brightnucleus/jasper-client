<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class DeleteUserForPartnersRequest extends JasperRequest
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


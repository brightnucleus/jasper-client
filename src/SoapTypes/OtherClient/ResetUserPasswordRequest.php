<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ResetUserPasswordRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $userId = null;

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }


}


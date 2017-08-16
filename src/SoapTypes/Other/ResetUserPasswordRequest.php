<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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


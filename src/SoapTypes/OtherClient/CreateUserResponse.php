<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class CreateUserResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $status = null;

    /**
     * @var ResponseStatusType
     */
    private $errorMessage = null;

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return ResponseStatusType
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }


}


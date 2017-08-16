<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class ResetUserPasswordResponse extends JasperResponse
{

    /**
     * @var ResponseStatusType
     */
    private $errorMessage = null;

    /**
     * @return ResponseStatusType
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }


}


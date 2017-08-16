<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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


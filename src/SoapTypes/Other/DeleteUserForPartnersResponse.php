<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class DeleteUserForPartnersResponse extends JasperResponse
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


<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class EditAccountResponse extends JasperResponse
{

    /**
     * @var ResponseStatusType
     */
    private $errorMessage = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return ResponseStatusType
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


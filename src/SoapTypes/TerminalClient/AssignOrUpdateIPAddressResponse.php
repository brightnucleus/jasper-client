<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AssignOrUpdateIPAddressResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $status = null;

    /**
     * @var string
     */
    private $errormessage = null;

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getErrormessage()
    {
        return $this->errormessage;
    }


}


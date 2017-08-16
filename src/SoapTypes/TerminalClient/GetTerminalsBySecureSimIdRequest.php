<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetTerminalsBySecureSimIdRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $secureSimId = null;

    /**
     * @return string
     */
    public function getSecureSimId()
    {
        return $this->secureSimId;
    }


}


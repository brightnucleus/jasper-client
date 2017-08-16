<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetLinePayStatusByOpAcctIdRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $operatorAccountId = null;

    /**
     * @return string
     */
    public function getOperatorAccountId()
    {
        return $this->operatorAccountId;
    }


}


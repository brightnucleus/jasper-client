<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAccountIdByOpAcctIdRequest extends JasperRequest
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


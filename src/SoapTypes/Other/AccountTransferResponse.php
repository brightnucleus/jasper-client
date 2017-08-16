<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AccountTransferResponse extends JasperResponse
{

    /**
     * @var AccountTransferStatusResponse
     */
    private $AccountTransferStatusResponse = null;

    /**
     * @return AccountTransferStatusResponse
     */
    public function getAccountTransferStatusResponse()
    {
        return $this->AccountTransferStatusResponse;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

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


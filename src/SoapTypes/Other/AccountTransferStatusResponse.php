<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AccountTransferStatusResponse extends JasperResponse
{

    /**
     * @var SimTransferResponseType
     */
    private $accountTransferStatus = null;

    /**
     * @return SimTransferResponseType
     */
    public function getAccountTransferStatus()
    {
        return $this->accountTransferStatus;
    }


}


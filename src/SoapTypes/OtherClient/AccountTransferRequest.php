<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class AccountTransferRequest extends JasperRequest
{

    /**
     * @var AccountTransfer
     */
    private $AccountTransfer = null;

    /**
     * @return AccountTransfer
     */
    public function getAccountTransfer()
    {
        return $this->AccountTransfer;
    }


}


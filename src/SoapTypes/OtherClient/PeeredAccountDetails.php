<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class PeeredAccountDetails
{

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $operatorName = null;

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return string
     */
    public function getOperatorName()
    {
        return $this->operatorName;
    }


}


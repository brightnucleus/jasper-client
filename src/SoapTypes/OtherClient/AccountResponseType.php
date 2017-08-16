<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class AccountResponseType
{

    /**
     * @var string
     */
    private $account = null;

    /**
     * @var string
     */
    private $operator = null;

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }


}


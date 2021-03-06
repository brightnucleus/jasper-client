<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAccountPeerStatusRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $operator = null;

    /**
     * @var string
     */
    private $account = null;

    /**
     * @var string
     */
    private $remoteOperator = null;

    /**
     * @var string
     */
    private $remoteAccount = null;

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

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
    public function getRemoteOperator()
    {
        return $this->remoteOperator;
    }

    /**
     * @return string
     */
    public function getRemoteAccount()
    {
        return $this->remoteAccount;
    }


}


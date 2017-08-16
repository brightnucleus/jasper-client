<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SetAccountPeerStatusRequest extends JasperRequest
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
     * @var int
     */
    private $status = null;

    /**
     * @var string
     */
    private $secretKey = null;

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

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }


}


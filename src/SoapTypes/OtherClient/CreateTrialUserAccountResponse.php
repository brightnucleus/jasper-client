<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class CreateTrialUserAccountResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $status = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $apiKey = null;

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

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
    public function getApiKey()
    {
        return $this->apiKey;
    }


}


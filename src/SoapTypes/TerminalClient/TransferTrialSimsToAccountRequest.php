<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class TransferTrialSimsToAccountRequest extends JasperRequest
{

    /**
     * @var iccidList
     */
    private $iccidList = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @return iccidList
     */
    public function getIccidList()
    {
        return $this->iccidList;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }


}


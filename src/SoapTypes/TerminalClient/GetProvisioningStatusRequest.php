<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetProvisioningStatusRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var ProvisioningChangeType
     */
    private $changeType = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return ProvisioningChangeType
     */
    public function getChangeType()
    {
        return $this->changeType;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }


}


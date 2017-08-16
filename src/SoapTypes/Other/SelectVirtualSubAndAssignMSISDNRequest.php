<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SelectVirtualSubAndAssignMSISDNRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

    /**
     * @var int
     */
    private $remoteRequestId = null;

    /**
     * @var string
     */
    private $targetAccount = null;

    /**
     * @var string
     */
    private $targetOperator = null;

    /**
     * @var string
     */
    private $primaryAccount = null;

    /**
     * @var string
     */
    private $primaryOperator = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var string
     */
    private $sourceImsi = null;

    /**
     * @var string
     */
    private $sourceMsisdn = null;

    /**
     * @var string
     */
    private $targetSimProfileId = null;

    /**
     * @var GlobalSimTransferType
     */
    private $globalSimTransferType = null;

    /**
     * @return int
     */
    public function getGlobalSimTransferId()
    {
        return $this->globalSimTransferId;
    }

    /**
     * @return int
     */
    public function getRemoteRequestId()
    {
        return $this->remoteRequestId;
    }

    /**
     * @return string
     */
    public function getTargetAccount()
    {
        return $this->targetAccount;
    }

    /**
     * @return string
     */
    public function getTargetOperator()
    {
        return $this->targetOperator;
    }

    /**
     * @return string
     */
    public function getPrimaryAccount()
    {
        return $this->primaryAccount;
    }

    /**
     * @return string
     */
    public function getPrimaryOperator()
    {
        return $this->primaryOperator;
    }

    /**
     * @return string
     */
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return string
     */
    public function getSourceImsi()
    {
        return $this->sourceImsi;
    }

    /**
     * @return string
     */
    public function getSourceMsisdn()
    {
        return $this->sourceMsisdn;
    }

    /**
     * @return string
     */
    public function getTargetSimProfileId()
    {
        return $this->targetSimProfileId;
    }

    /**
     * @return GlobalSimTransferType
     */
    public function getGlobalSimTransferType()
    {
        return $this->globalSimTransferType;
    }


}


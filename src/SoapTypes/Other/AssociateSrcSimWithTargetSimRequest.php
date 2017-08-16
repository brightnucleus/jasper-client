<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class AssociateSrcSimWithTargetSimRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

    /**
     * @var string
     */
    private $sourceIccid = null;

    /**
     * @var string
     */
    private $targetIccid = null;

    /**
     * @var string
     */
    private $targetMsisdn = null;

    /**
     * @var string
     */
    private $targetImsi = null;

    /**
     * @var string
     */
    private $targetAccount = null;

    /**
     * @var string
     */
    private $targetOperator = null;

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
     * @return string
     */
    public function getSourceIccid()
    {
        return $this->sourceIccid;
    }

    /**
     * @return string
     */
    public function getTargetIccid()
    {
        return $this->targetIccid;
    }

    /**
     * @return string
     */
    public function getTargetMsisdn()
    {
        return $this->targetMsisdn;
    }

    /**
     * @return string
     */
    public function getTargetImsi()
    {
        return $this->targetImsi;
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
     * @return GlobalSimTransferType
     */
    public function getGlobalSimTransferType()
    {
        return $this->globalSimTransferType;
    }


}


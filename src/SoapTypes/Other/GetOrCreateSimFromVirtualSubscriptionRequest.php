<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetOrCreateSimFromVirtualSubscriptionRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $globalSimTransferId = null;

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
     * @var string
     */
    private $pin1 = null;

    /**
     * @var string
     */
    private $puk1 = null;

    /**
     * @var string
     */
    private $pin2 = null;

    /**
     * @var string
     */
    private $puk2 = null;

    /**
     * @var string
     */
    private $adm1 = null;

    /**
     * @var string
     */
    private $adm2 = null;

    /**
     * @var string
     */
    private $adm3 = null;

    /**
     * @var string
     */
    private $adm4 = null;

    /**
     * @var string
     */
    private $acc = null;

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

    /**
     * @return string
     */
    public function getPin1()
    {
        return $this->pin1;
    }

    /**
     * @return string
     */
    public function getPuk1()
    {
        return $this->puk1;
    }

    /**
     * @return string
     */
    public function getPin2()
    {
        return $this->pin2;
    }

    /**
     * @return string
     */
    public function getPuk2()
    {
        return $this->puk2;
    }

    /**
     * @return string
     */
    public function getAdm1()
    {
        return $this->adm1;
    }

    /**
     * @return string
     */
    public function getAdm2()
    {
        return $this->adm2;
    }

    /**
     * @return string
     */
    public function getAdm3()
    {
        return $this->adm3;
    }

    /**
     * @return string
     */
    public function getAdm4()
    {
        return $this->adm4;
    }

    /**
     * @return string
     */
    public function getAcc()
    {
        return $this->acc;
    }


}


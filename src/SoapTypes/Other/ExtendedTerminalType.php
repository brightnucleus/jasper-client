<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ExtendedTerminalType
{

    /**
     * @var int
     */
    private $rawSimId = null;

    /**
     * @var int
     */
    private $simFileId = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $iccid = null;

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
    private $kiEnc = null;

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
     * @var string
     */
    private $dlKey = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var \DateTime
     */
    private $dateAdded = null;

    /**
     * @var \DateTime
     */
    private $dateModified = null;

    /**
     * @var bool
     */
    private $dualImsiCapable = null;

    /**
     * @var bool
     */
    private $dualImsiEnabled = null;

    /**
     * @var bool
     */
    private $simBound = null;

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
    private $areaCode = null;

    /**
     * @var string
     */
    private $countryCode = null;

    /**
     * @var string
     */
    private $externalSimProfileId = null;

    /**
     * @var int
     */
    private $operatorId = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @var int
     */
    private $msisdn = null;

    /**
     * @return int
     */
    public function getRawSimId()
    {
        return $this->rawSimId;
    }

    /**
     * @return int
     */
    public function getSimFileId()
    {
        return $this->simFileId;
    }

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
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
    public function getKiEnc()
    {
        return $this->kiEnc;
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

    /**
     * @return string
     */
    public function getDlKey()
    {
        return $this->dlKey;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @return bool
     */
    public function getDualImsiCapable()
    {
        return $this->dualImsiCapable;
    }

    /**
     * @return bool
     */
    public function getDualImsiEnabled()
    {
        return $this->dualImsiEnabled;
    }

    /**
     * @return bool
     */
    public function getSimBound()
    {
        return $this->simBound;
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
    public function getAreaCode()
    {
        return $this->areaCode;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getExternalSimProfileId()
    {
        return $this->externalSimProfileId;
    }

    /**
     * @return int
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @return int
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


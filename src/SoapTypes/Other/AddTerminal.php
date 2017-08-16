<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class AddTerminal
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $externalSimProfileId = null;

    /**
     * @var string
     */
    private $sourceOperatorName = null;

    /**
     * @var string
     */
    private $targetOperatorName = null;

    /**
     * @var string
     */
    private $terminalId = null;

    /**
     * @var string
     */
    private $modemId = null;

    /**
     * @var string
     */
    private $suspended = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var \DateTime
     */
    private $dateAdded = null;

    /**
     * @var \DateTime
     */
    private $dateShipped = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $primaryICCID = null;

    /**
     * @var string
     */
    private $imei = null;

    /**
     * @var string
     */
    private $simNotes = null;

    /**
     * @var int
     */
    private $version = null;

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
    private $secureSimId = null;

    /**
     * @var string
     */
    private $custom1 = null;

    /**
     * @var string
     */
    private $custom2 = null;

    /**
     * @var string
     */
    private $custom3 = null;

    /**
     * @var string
     */
    private $customerCustom1 = null;

    /**
     * @var string
     */
    private $customerCustom2 = null;

    /**
     * @var string
     */
    private $customerCustom3 = null;

    /**
     * @var string
     */
    private $customerCustom4 = null;

    /**
     * @var string
     */
    private $customerCustom5 = null;

    /**
     * @var string
     */
    private $operatorCustom1 = null;

    /**
     * @var string
     */
    private $operatorCustom2 = null;

    /**
     * @var string
     */
    private $operatorCustom3 = null;

    /**
     * @var string
     */
    private $operatorCustom4 = null;

    /**
     * @var string
     */
    private $operatorCustom5 = null;

    /**
     * @var string
     */
    private $globalSimType = null;

    /**
     * @var string
     */
    private $msisdn = null;

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
    public function getExternalSimProfileId()
    {
        return $this->externalSimProfileId;
    }

    /**
     * @return string
     */
    public function getSourceOperatorName()
    {
        return $this->sourceOperatorName;
    }

    /**
     * @return string
     */
    public function getTargetOperatorName()
    {
        return $this->targetOperatorName;
    }

    /**
     * @return string
     */
    public function getTerminalId()
    {
        return $this->terminalId;
    }

    /**
     * @return string
     */
    public function getModemId()
    {
        return $this->modemId;
    }

    /**
     * @return string
     */
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
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
    public function getDateShipped()
    {
        return $this->dateShipped;
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
    public function getPrimaryICCID()
    {
        return $this->primaryICCID;
    }

    /**
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * @return string
     */
    public function getSimNotes()
    {
        return $this->simNotes;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
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
    public function getSecureSimId()
    {
        return $this->secureSimId;
    }

    /**
     * @return string
     */
    public function getCustom1()
    {
        return $this->custom1;
    }

    /**
     * @return string
     */
    public function getCustom2()
    {
        return $this->custom2;
    }

    /**
     * @return string
     */
    public function getCustom3()
    {
        return $this->custom3;
    }

    /**
     * @return string
     */
    public function getCustomerCustom1()
    {
        return $this->customerCustom1;
    }

    /**
     * @return string
     */
    public function getCustomerCustom2()
    {
        return $this->customerCustom2;
    }

    /**
     * @return string
     */
    public function getCustomerCustom3()
    {
        return $this->customerCustom3;
    }

    /**
     * @return string
     */
    public function getCustomerCustom4()
    {
        return $this->customerCustom4;
    }

    /**
     * @return string
     */
    public function getCustomerCustom5()
    {
        return $this->customerCustom5;
    }

    /**
     * @return string
     */
    public function getOperatorCustom1()
    {
        return $this->operatorCustom1;
    }

    /**
     * @return string
     */
    public function getOperatorCustom2()
    {
        return $this->operatorCustom2;
    }

    /**
     * @return string
     */
    public function getOperatorCustom3()
    {
        return $this->operatorCustom3;
    }

    /**
     * @return string
     */
    public function getOperatorCustom4()
    {
        return $this->operatorCustom4;
    }

    /**
     * @return string
     */
    public function getOperatorCustom5()
    {
        return $this->operatorCustom5;
    }

    /**
     * @return string
     */
    public function getGlobalSimType()
    {
        return $this->globalSimType;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


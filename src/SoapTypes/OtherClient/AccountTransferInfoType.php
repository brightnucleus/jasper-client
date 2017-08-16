<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class AccountTransferInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $imei = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $previousSimState = null;

    /**
     * @var string
     */
    private $newSimState = null;

    /**
     * @var int
     */
    private $previousAccountId = null;

    /**
     * @var int
     */
    private $newAccountId = null;

    /**
     * @var string
     */
    private $previousAccountName = null;

    /**
     * @var string
     */
    private $newAccountName = null;

    /**
     * @var \DateTime
     */
    private $dateChanged = null;

    /**
     * @var \DateTime
     */
    private $shippedDate = null;

    /**
     * @var \DateTime
     */
    private $deferActionStartDate = null;

    /**
     * @var int
     */
    private $deferActionPeriod = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

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
    public function getMsisdn()
    {
        return $this->msisdn;
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
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getPreviousSimState()
    {
        return $this->previousSimState;
    }

    /**
     * @return string
     */
    public function getNewSimState()
    {
        return $this->newSimState;
    }

    /**
     * @return int
     */
    public function getPreviousAccountId()
    {
        return $this->previousAccountId;
    }

    /**
     * @return int
     */
    public function getNewAccountId()
    {
        return $this->newAccountId;
    }

    /**
     * @return string
     */
    public function getPreviousAccountName()
    {
        return $this->previousAccountName;
    }

    /**
     * @return string
     */
    public function getNewAccountName()
    {
        return $this->newAccountName;
    }

    /**
     * @return \DateTime
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * @return \DateTime
     */
    public function getShippedDate()
    {
        return $this->shippedDate;
    }

    /**
     * @return \DateTime
     */
    public function getDeferActionStartDate()
    {
        return $this->deferActionStartDate;
    }

    /**
     * @return int
     */
    public function getDeferActionPeriod()
    {
        return $this->deferActionPeriod;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


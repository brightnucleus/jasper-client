<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class MsisdnChangeInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $imei = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var string
     */
    private $simState = null;

    /**
     * @var string
     */
    private $customerName = null;

    /**
     * @var string
     */
    private $endConsumerId = null;

    /**
     * @var string
     */
    private $oldMsisdn = null;

    /**
     * @var string
     */
    private $newMsisdn = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var \DateTime
     */
    private $dateChanged = null;

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
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
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
    public function getSimState()
    {
        return $this->simState;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @return string
     */
    public function getEndConsumerId()
    {
        return $this->endConsumerId;
    }

    /**
     * @return string
     */
    public function getOldMsisdn()
    {
        return $this->oldMsisdn;
    }

    /**
     * @return string
     */
    public function getNewMsisdn()
    {
        return $this->newMsisdn;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return \DateTime
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


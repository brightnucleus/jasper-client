<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class TerminalType
{

    /**
     * @var string
     */
    private $iccid = null;

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
    private $customer = null;

    /**
     * @var string
     */
    private $endConsumerId = null;

    /**
     * @var string
     */
    private $suspended = null;

    /**
     * @var string
     */
    private $ratePlan = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var float
     */
    private $monthToDateUsage = null;

    /**
     * @var bool
     */
    private $overageLimitReached = null;

    /**
     * @var string
     */
    private $overageLimitOverride = null;

    /**
     * @var \DateTime
     */
    private $dateActivated = null;

    /**
     * @var \DateTime
     */
    private $dateAdded = null;

    /**
     * @var \DateTime
     */
    private $dateModified = null;

    /**
     * @var \DateTime
     */
    private $dateShipped = null;

    /**
     * @var float
     */
    private $monthToDateDataUsage = null;

    /**
     * @var float
     */
    private $monthToDateSMSUsage = null;

    /**
     * @var float
     */
    private $monthToDateVoiceUsage = null;

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
     * @var rating
     */
    private $rating = null;

    /**
     * @var string
     */
    private $secureSimUsernameCopyRule = null;

    /**
     * @var string
     */
    private $secureSimPasswordCopyRule = null;

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var string
     */
    private $fixedIpAddress = null;

    /**
     * @var int
     */
    private $ctdSessionCount = null;

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
    private $globalSimType = null;

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
    private $custom4 = null;

    /**
     * @var string
     */
    private $custom5 = null;

    /**
     * @var string
     */
    private $custom6 = null;

    /**
     * @var string
     */
    private $custom7 = null;

    /**
     * @var string
     */
    private $custom8 = null;

    /**
     * @var string
     */
    private $custom9 = null;

    /**
     * @var string
     */
    private $custom10 = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

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
    public function getCustomer()
    {
        return $this->customer;
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
    public function getSuspended()
    {
        return $this->suspended;
    }

    /**
     * @return string
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return float
     */
    public function getMonthToDateUsage()
    {
        return $this->monthToDateUsage;
    }

    /**
     * @return bool
     */
    public function getOverageLimitReached()
    {
        return $this->overageLimitReached;
    }

    /**
     * @return string
     */
    public function getOverageLimitOverride()
    {
        return $this->overageLimitOverride;
    }

    /**
     * @return \DateTime
     */
    public function getDateActivated()
    {
        return $this->dateActivated;
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
     * @return \DateTime
     */
    public function getDateShipped()
    {
        return $this->dateShipped;
    }

    /**
     * @return float
     */
    public function getMonthToDateDataUsage()
    {
        return $this->monthToDateDataUsage;
    }

    /**
     * @return float
     */
    public function getMonthToDateSMSUsage()
    {
        return $this->monthToDateSMSUsage;
    }

    /**
     * @return float
     */
    public function getMonthToDateVoiceUsage()
    {
        return $this->monthToDateVoiceUsage;
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
     * @return rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getSecureSimUsernameCopyRule()
    {
        return $this->secureSimUsernameCopyRule;
    }

    /**
     * @return string
     */
    public function getSecureSimPasswordCopyRule()
    {
        return $this->secureSimPasswordCopyRule;
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
    public function getFixedIpAddress()
    {
        return $this->fixedIpAddress;
    }

    /**
     * @return int
     */
    public function getCtdSessionCount()
    {
        return $this->ctdSessionCount;
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
    public function getGlobalSimType()
    {
        return $this->globalSimType;
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
    public function getCustom4()
    {
        return $this->custom4;
    }

    /**
     * @return string
     */
    public function getCustom5()
    {
        return $this->custom5;
    }

    /**
     * @return string
     */
    public function getCustom6()
    {
        return $this->custom6;
    }

    /**
     * @return string
     */
    public function getCustom7()
    {
        return $this->custom7;
    }

    /**
     * @return string
     */
    public function getCustom8()
    {
        return $this->custom8;
    }

    /**
     * @return string
     */
    public function getCustom9()
    {
        return $this->custom9;
    }

    /**
     * @return string
     */
    public function getCustom10()
    {
        return $this->custom10;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimInfo
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
    private $deviceId = null;

    /**
     * @var int
     */
    private $simProfileId = null;

    /**
     * @var int
     */
    private $acctId = null;

    /**
     * @var bool
     */
    private $live = null;

    /**
     * @var int
     */
    private $ratePlanId = null;

    /**
     * @var \DateTime
     */
    private $activationDate = null;

    /**
     * @var int
     */
    private $status = null;

    /**
     * @var string
     */
    private $modemId = null;

    /**
     * @var string
     */
    private $customer = null;

    /**
     * @var int
     */
    private $overAgeLimitToOverrideMode = null;

    /**
     * @var bool
     */
    private $overAgeLimitReached = null;

    /**
     * @var float
     */
    private $overAgeLimit = null;

    /**
     * @var int
     */
    private $customerId = null;

    /**
     * @var string
     */
    private $endConsumerIdentity = null;

    /**
     * @var int
     */
    private $commPlanId = null;

    /**
     * @var \DateTime
     */
    private $lastStateChange = null;

    /**
     * @var int
     */
    private $testReadyDataLimit = null;

    /**
     * @var float
     */
    private $monthToDateSmsUsage = null;

    /**
     * @var float
     */
    private $monthToDateVoiceUsage = null;

    /**
     * @var string
     */
    private $userName = null;

    /**
     * @var string
     */
    private $password = null;

    /**
     * @var float
     */
    private $monthToDateDataUsage = null;

    /**
     * @var string
     */
    private $oneBox = null;

    /**
     * @var \DateTime
     */
    private $dateShipped = null;

    /**
     * @var int
     */
    private $testReadyDataState = null;

    /**
     * @var int
     */
    private $testReadyTimeLimit = null;

    /**
     * @var int
     */
    private $testReadyTimeState = null;

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
     * @var int
     */
    private $version = null;

    /**
     * @var int
     */
    private $operatorId = null;

    /**
     * @var string
     */
    private $notes = null;

    /**
     * @var bool
     */
    private $networkBlocked = null;

    /**
     * @var int
     */
    private $consumerUserId = null;

    /**
     * @var \DateTime
     */
    private $dateOneBoxModified = null;

    /**
     * @var string
     */
    private $linePayStatus = null;

    /**
     * @var string
     */
    private $imsi1 = null;

    /**
     * @var bool
     */
    private $primaryDevice = null;

    /**
     * @var string
     */
    private $nickName = null;

    /**
     * @var string
     */
    private $areaCode = null;

    /**
     * @var string
     */
    private $countryCode = null;

    /**
     * @var bool
     */
    private $migratedSim = null;

    /**
     * @var string
     */
    private $saleDate = null;

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
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @return int
     */
    public function getSimProfileId()
    {
        return $this->simProfileId;
    }

    /**
     * @return int
     */
    public function getAcctId()
    {
        return $this->acctId;
    }

    /**
     * @return bool
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * @return int
     */
    public function getRatePlanId()
    {
        return $this->ratePlanId;
    }

    /**
     * @return \DateTime
     */
    public function getActivationDate()
    {
        return $this->activationDate;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
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
     * @return int
     */
    public function getOverAgeLimitToOverrideMode()
    {
        return $this->overAgeLimitToOverrideMode;
    }

    /**
     * @return bool
     */
    public function getOverAgeLimitReached()
    {
        return $this->overAgeLimitReached;
    }

    /**
     * @return float
     */
    public function getOverAgeLimit()
    {
        return $this->overAgeLimit;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return string
     */
    public function getEndConsumerIdentity()
    {
        return $this->endConsumerIdentity;
    }

    /**
     * @return int
     */
    public function getCommPlanId()
    {
        return $this->commPlanId;
    }

    /**
     * @return \DateTime
     */
    public function getLastStateChange()
    {
        return $this->lastStateChange;
    }

    /**
     * @return int
     */
    public function getTestReadyDataLimit()
    {
        return $this->testReadyDataLimit;
    }

    /**
     * @return float
     */
    public function getMonthToDateSmsUsage()
    {
        return $this->monthToDateSmsUsage;
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
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return float
     */
    public function getMonthToDateDataUsage()
    {
        return $this->monthToDateDataUsage;
    }

    /**
     * @return string
     */
    public function getOneBox()
    {
        return $this->oneBox;
    }

    /**
     * @return \DateTime
     */
    public function getDateShipped()
    {
        return $this->dateShipped;
    }

    /**
     * @return int
     */
    public function getTestReadyDataState()
    {
        return $this->testReadyDataState;
    }

    /**
     * @return int
     */
    public function getTestReadyTimeLimit()
    {
        return $this->testReadyTimeLimit;
    }

    /**
     * @return int
     */
    public function getTestReadyTimeState()
    {
        return $this->testReadyTimeState;
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
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return int
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return bool
     */
    public function getNetworkBlocked()
    {
        return $this->networkBlocked;
    }

    /**
     * @return int
     */
    public function getConsumerUserId()
    {
        return $this->consumerUserId;
    }

    /**
     * @return \DateTime
     */
    public function getDateOneBoxModified()
    {
        return $this->dateOneBoxModified;
    }

    /**
     * @return string
     */
    public function getLinePayStatus()
    {
        return $this->linePayStatus;
    }

    /**
     * @return string
     */
    public function getImsi1()
    {
        return $this->imsi1;
    }

    /**
     * @return bool
     */
    public function getPrimaryDevice()
    {
        return $this->primaryDevice;
    }

    /**
     * @return string
     */
    public function getNickName()
    {
        return $this->nickName;
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
     * @return bool
     */
    public function getMigratedSim()
    {
        return $this->migratedSim;
    }

    /**
     * @return string
     */
    public function getSaleDate()
    {
        return $this->saleDate;
    }


}


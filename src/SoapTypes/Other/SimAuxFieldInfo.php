<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SimAuxFieldInfo
{

    /**
     * @var string
     */
    private $OPERATORCUSTOM1 = null;

    /**
     * @var string
     */
    private $OPERATORCUSTOM2 = null;

    /**
     * @var string
     */
    private $OPERATORCUSTOM3 = null;

    /**
     * @var string
     */
    private $OPERATORCUSTOM4 = null;

    /**
     * @var string
     */
    private $OPERATORCUSTOM5 = null;

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
    private $bootstrapIccid = null;

    /**
     * @var int
     */
    private $policyId = null;

    /**
     * @var string
     */
    private $policyTierName = null;

    /**
     * @var string
     */
    private $cfNumber = null;

    /**
     * @var string
     */
    private $cfType = null;

    /**
     * @var int
     */
    private $voiceMailId = null;

    /**
     * @var string
     */
    private $imei = null;

    /**
     * @var string
     */
    private $pin1 = null;

    /**
     * @var string
     */
    private $pin2 = null;

    /**
     * @var string
     */
    private $puk1 = null;

    /**
     * @var string
     */
    private $puk2 = null;

    /**
     * @var bool
     */
    private $msisdnFromApi = null;

    /**
     * @var bool
     */
    private $mmscProvisioned = null;

    /**
     * @var string
     */
    private $globalSimType = null;

    /**
     * @var string
     */
    private $timeZone = null;

    /**
     * @var bool
     */
    private $sendOTAOnFirstRegistration = null;

    /**
     * @var int
     */
    private $clusterChanges = null;

    /**
     * @var \DateTime
     */
    private $clusterChangeTime = null;

    /**
     * @var int
     */
    private $checkedClusterCountryId = null;

    /**
     * @var \DateTime
     */
    private $checkedOTATime = null;

    /**
     * @var string
     */
    private $imeiTechType = null;

    /**
     * @var string
     */
    private $customerIMEITechType = null;

    /**
     * @var string
     */
    private $customerIMEI = null;

    /**
     * @var int
     */
    private $ppuID = null;

    /**
     * @var int
     */
    private $orderID = null;

    /**
     * @var bool
     */
    private $opmNotificationSent = null;

    /**
     * @var int
     */
    private $settlementRatePlanID = null;

    /**
     * @var string
     */
    private $custom10 = null;

    /**
     * @var string
     */
    private $custom9 = null;

    /**
     * @var string
     */
    private $custom8 = null;

    /**
     * @var string
     */
    private $custom7 = null;

    /**
     * @var string
     */
    private $custom6 = null;

    /**
     * @var string
     */
    private $custom5 = null;

    /**
     * @var string
     */
    private $custom4 = null;

    /**
     * @return string
     */
    public function getOPERATORCUSTOM1()
    {
        return $this->OPERATORCUSTOM1;
    }

    /**
     * @return string
     */
    public function getOPERATORCUSTOM2()
    {
        return $this->OPERATORCUSTOM2;
    }

    /**
     * @return string
     */
    public function getOPERATORCUSTOM3()
    {
        return $this->OPERATORCUSTOM3;
    }

    /**
     * @return string
     */
    public function getOPERATORCUSTOM4()
    {
        return $this->OPERATORCUSTOM4;
    }

    /**
     * @return string
     */
    public function getOPERATORCUSTOM5()
    {
        return $this->OPERATORCUSTOM5;
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
    public function getBootstrapIccid()
    {
        return $this->bootstrapIccid;
    }

    /**
     * @return int
     */
    public function getPolicyId()
    {
        return $this->policyId;
    }

    /**
     * @return string
     */
    public function getPolicyTierName()
    {
        return $this->policyTierName;
    }

    /**
     * @return string
     */
    public function getCfNumber()
    {
        return $this->cfNumber;
    }

    /**
     * @return string
     */
    public function getCfType()
    {
        return $this->cfType;
    }

    /**
     * @return int
     */
    public function getVoiceMailId()
    {
        return $this->voiceMailId;
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
    public function getPin1()
    {
        return $this->pin1;
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
    public function getPuk1()
    {
        return $this->puk1;
    }

    /**
     * @return string
     */
    public function getPuk2()
    {
        return $this->puk2;
    }

    /**
     * @return bool
     */
    public function getMsisdnFromApi()
    {
        return $this->msisdnFromApi;
    }

    /**
     * @return bool
     */
    public function getMmscProvisioned()
    {
        return $this->mmscProvisioned;
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
    public function getTimeZone()
    {
        return $this->timeZone;
    }

    /**
     * @return bool
     */
    public function getSendOTAOnFirstRegistration()
    {
        return $this->sendOTAOnFirstRegistration;
    }

    /**
     * @return int
     */
    public function getClusterChanges()
    {
        return $this->clusterChanges;
    }

    /**
     * @return \DateTime
     */
    public function getClusterChangeTime()
    {
        return $this->clusterChangeTime;
    }

    /**
     * @return int
     */
    public function getCheckedClusterCountryId()
    {
        return $this->checkedClusterCountryId;
    }

    /**
     * @return \DateTime
     */
    public function getCheckedOTATime()
    {
        return $this->checkedOTATime;
    }

    /**
     * @return string
     */
    public function getImeiTechType()
    {
        return $this->imeiTechType;
    }

    /**
     * @return string
     */
    public function getCustomerIMEITechType()
    {
        return $this->customerIMEITechType;
    }

    /**
     * @return string
     */
    public function getCustomerIMEI()
    {
        return $this->customerIMEI;
    }

    /**
     * @return int
     */
    public function getPpuID()
    {
        return $this->ppuID;
    }

    /**
     * @return int
     */
    public function getOrderID()
    {
        return $this->orderID;
    }

    /**
     * @return bool
     */
    public function getOpmNotificationSent()
    {
        return $this->opmNotificationSent;
    }

    /**
     * @return int
     */
    public function getSettlementRatePlanID()
    {
        return $this->settlementRatePlanID;
    }

    /**
     * @return string
     */
    public function getCustom10()
    {
        return $this->custom10;
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
    public function getCustom8()
    {
        return $this->custom8;
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
    public function getCustom6()
    {
        return $this->custom6;
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
    public function getCustom4()
    {
        return $this->custom4;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\AccountClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CreateAccountRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $serviceProvider = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $accountType = null;

    /**
     * @var string
     */
    private $currencyCode = null;

    /**
     * @var string
     */
    private $taxId = null;

    /**
     * @var string
     */
    private $salesForceAccountName = null;

    /**
     * @var bool
     */
    private $createSalesForceAccount = null;

    /**
     * @var string
     */
    private $defaultCommunicationPlan = null;

    /**
     * @var string
     */
    private $defaultRatePlan = null;

    /**
     * @var bool
     */
    private $createDefaultRatePlan = null;

    /**
     * @var string
     */
    private $billingCycleStart = null;

    /**
     * @var ContactType
     */
    private $primaryContact = null;

    /**
     * @var ContactType
     */
    private $billingContact = null;

    /**
     * @var AddressType
     */
    private $billingAddress = null;

    /**
     * @var AddressType
     */
    private $shippingAddress = null;

    /**
     * @var string
     */
    private $timezone = null;

    /**
     * @var string
     */
    private $preferredLanguage = null;

    /**
     * @var string
     */
    private $notes = null;

    /**
     * @var string
     */
    private $supportEmail = null;

    /**
     * @var string
     */
    private $supportPhone = null;

    /**
     * @var string
     */
    private $devKitType = null;

    /**
     * @var bool
     */
    private $showJasperSupport = null;

    /**
     * @var bool
     */
    private $showSpSupport = null;

    /**
     * @var bool
     */
    private $showAcctSupport = null;

    /**
     * @var string
     */
    private $regionId = null;

    /**
     * @var string
     */
    private $accountSegment = null;

    /**
     * @var string
     */
    private $ssoType = null;

    /**
     * @return string
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * @return string
     */
    public function getSalesForceAccountName()
    {
        return $this->salesForceAccountName;
    }

    /**
     * @return bool
     */
    public function getCreateSalesForceAccount()
    {
        return $this->createSalesForceAccount;
    }

    /**
     * @return string
     */
    public function getDefaultCommunicationPlan()
    {
        return $this->defaultCommunicationPlan;
    }

    /**
     * @return string
     */
    public function getDefaultRatePlan()
    {
        return $this->defaultRatePlan;
    }

    /**
     * @return bool
     */
    public function getCreateDefaultRatePlan()
    {
        return $this->createDefaultRatePlan;
    }

    /**
     * @return string
     */
    public function getBillingCycleStart()
    {
        return $this->billingCycleStart;
    }

    /**
     * @return ContactType
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }

    /**
     * @return ContactType
     */
    public function getBillingContact()
    {
        return $this->billingContact;
    }

    /**
     * @return AddressType
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @return AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @return string
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @return string
     */
    public function getPreferredLanguage()
    {
        return $this->preferredLanguage;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return string
     */
    public function getSupportEmail()
    {
        return $this->supportEmail;
    }

    /**
     * @return string
     */
    public function getSupportPhone()
    {
        return $this->supportPhone;
    }

    /**
     * @return string
     */
    public function getDevKitType()
    {
        return $this->devKitType;
    }

    /**
     * @return bool
     */
    public function getShowJasperSupport()
    {
        return $this->showJasperSupport;
    }

    /**
     * @return bool
     */
    public function getShowSpSupport()
    {
        return $this->showSpSupport;
    }

    /**
     * @return bool
     */
    public function getShowAcctSupport()
    {
        return $this->showAcctSupport;
    }

    /**
     * @return string
     */
    public function getRegionId()
    {
        return $this->regionId;
    }

    /**
     * @return string
     */
    public function getAccountSegment()
    {
        return $this->accountSegment;
    }

    /**
     * @return string
     */
    public function getSsoType()
    {
        return $this->ssoType;
    }


}


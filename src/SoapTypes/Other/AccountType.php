<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class AccountType
{

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var bool
     */
    private $billable = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var string
     */
    private $operatorAccountId = null;

    /**
     * @var ContactType
     */
    private $primaryContact = null;

    /**
     * @var AddressType
     */
    private $shippingAddress = null;

    /**
     * @var AccountBillingType
     */
    private $billing = null;

    /**
     * @var AccountSupportType
     */
    private $support = null;

    /**
     * @var AccountCustomFieldsType
     */
    private $customFields = null;

    /**
     * @var LocationServiceType
     */
    private $locationServiceType = null;

    /**
     * @var string
     */
    private $locationServiceMim = null;

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
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * @return bool
     */
    public function getBillable()
    {
        return $this->billable;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getOperatorAccountId()
    {
        return $this->operatorAccountId;
    }

    /**
     * @return ContactType
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }

    /**
     * @return AddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @return AccountBillingType
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @return AccountSupportType
     */
    public function getSupport()
    {
        return $this->support;
    }

    /**
     * @return AccountCustomFieldsType
     */
    public function getCustomFields()
    {
        return $this->customFields;
    }

    /**
     * @return LocationServiceType
     */
    public function getLocationServiceType()
    {
        return $this->locationServiceType;
    }

    /**
     * @return string
     */
    public function getLocationServiceMim()
    {
        return $this->locationServiceMim;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CreateTrialUserAccountRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $username = null;

    /**
     * @var string
     */
    private $password = null;

    /**
     * @var string
     */
    private $operator = null;

    /**
     * @var ContactType
     */
    private $contact = null;

    /**
     * @var AddressType
     */
    private $billingAddress = null;

    /**
     * @var AddressType
     */
    private $shippingAddress = null;

    /**
     * @var SalesLeadType
     */
    private $salesLeadData = null;

    /**
     * @var string
     */
    private $devKitType = null;

    /**
     * @var string
     */
    private $timezone = null;

    /**
     * @var string
     */
    private $language = null;

    /**
     * @var string
     */
    private $roleName = null;

    /**
     * @var string
     */
    private $taxId = null;

    /**
     * @var string
     */
    private $accountSegment = null;

    /**
     * @var string
     */
    private $uuid = null;

    /**
     * @var string
     */
    private $ssoType = null;

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @return ContactType
     */
    public function getContact()
    {
        return $this->contact;
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
     * @return SalesLeadType
     */
    public function getSalesLeadData()
    {
        return $this->salesLeadData;
    }

    /**
     * @return string
     */
    public function getDevKitType()
    {
        return $this->devKitType;
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
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
        return $this->roleName;
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
    public function getAccountSegment()
    {
        return $this->accountSegment;
    }

    /**
     * @return string
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * @return string
     */
    public function getSsoType()
    {
        return $this->ssoType;
    }


}


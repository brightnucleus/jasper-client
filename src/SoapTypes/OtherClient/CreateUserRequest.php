<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CreateUserRequest extends JasperRequest
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
    private $operatorName = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $customerName = null;

    /**
     * @var ContactType
     */
    private $contact = null;

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
    private $role = null;

    /**
     * @var string
     */
    private $accountAuthToken = null;

    /**
     * @var UserIdentifierType
     */
    private $peeredUser = null;

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
    public function getOperatorName()
    {
        return $this->operatorName;
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
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @return ContactType
     */
    public function getContact()
    {
        return $this->contact;
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
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return string
     */
    public function getAccountAuthToken()
    {
        return $this->accountAuthToken;
    }

    /**
     * @return UserIdentifierType
     */
    public function getPeeredUser()
    {
        return $this->peeredUser;
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


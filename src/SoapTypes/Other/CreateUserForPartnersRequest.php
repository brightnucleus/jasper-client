<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CreateUserForPartnersRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $username = null;

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
     * @var UserContactType
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
     * @var bool
     */
    private $welcomeEmail = null;

    /**
     * @var LoginTypeEnum
     */
    private $loginType = null;

    /**
     * @var string
     */
    private $sharedSecretToken = null;

    /**
     * @var string
     */
    private $externalId = null;

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
     * @return UserContactType
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
     * @return bool
     */
    public function getWelcomeEmail()
    {
        return $this->welcomeEmail;
    }

    /**
     * @return LoginTypeEnum
     */
    public function getLoginType()
    {
        return $this->loginType;
    }

    /**
     * @return string
     */
    public function getSharedSecretToken()
    {
        return $this->sharedSecretToken;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }


}


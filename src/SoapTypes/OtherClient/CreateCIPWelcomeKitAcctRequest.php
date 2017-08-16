<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class CreateCIPWelcomeKitAcctRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $kitRequestor = null;

    /**
     * @var string
     */
    private $accountName = null;

    /**
     * @var string
     */
    private $contactFirstName = null;

    /**
     * @var string
     */
    private $contactLastName = null;

    /**
     * @var string
     */
    private $contactPhoneNumber = null;

    /**
     * @var string
     */
    private $contactEmail = null;

    /**
     * @var string
     */
    private $contactTitle = null;

    /**
     * @var CIPAddressType
     */
    private $billingAddress = null;

    /**
     * @var CIPAddressType
     */
    private $shippingAddress = null;

    /**
     * @return string
     */
    public function getKitRequestor()
    {
        return $this->kitRequestor;
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
    public function getContactFirstName()
    {
        return $this->contactFirstName;
    }

    /**
     * @return string
     */
    public function getContactLastName()
    {
        return $this->contactLastName;
    }

    /**
     * @return string
     */
    public function getContactPhoneNumber()
    {
        return $this->contactPhoneNumber;
    }

    /**
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * @return string
     */
    public function getContactTitle()
    {
        return $this->contactTitle;
    }

    /**
     * @return CIPAddressType
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @return CIPAddressType
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }


}


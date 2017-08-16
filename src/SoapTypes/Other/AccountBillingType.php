<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class AccountBillingType
{

    /**
     * @var AddressType
     */
    private $address = null;

    /**
     * @var ContactType
     */
    private $contact = null;

    /**
     * @var string
     */
    private $taxId = null;

    /**
     * @var string
     */
    private $currencyCode = null;

    /**
     * @var string
     */
    private $newBillingCycleStart = null;

    /**
     * @return AddressType
     */
    public function getAddress()
    {
        return $this->address;
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
    public function getTaxId()
    {
        return $this->taxId;
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
    public function getNewBillingCycleStart()
    {
        return $this->newBillingCycleStart;
    }


}


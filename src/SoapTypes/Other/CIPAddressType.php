<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class CIPAddressType
{

    /**
     * @var string
     */
    private $address1 = null;

    /**
     * @var string
     */
    private $address2 = null;

    /**
     * @var string
     */
    private $city = null;

    /**
     * @var string
     */
    private $state = null;

    /**
     * @var string
     */
    private $country = null;

    /**
     * @var string
     */
    private $postalCode = null;

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }


}


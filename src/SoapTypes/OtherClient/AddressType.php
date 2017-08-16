<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class AddressType
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
    private $region = null;

    /**
     * @var string
     */
    private $countryCode = null;

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
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }


}


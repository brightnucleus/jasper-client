<?php

namespace BrightNucleus\JasperClient\SoapTypes\AddRoutableMSISDNClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class AddRoutableMSISDNRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $addressLine1 = null;

    /**
     * @var string
     */
    private $addressLine2 = null;

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
    private $zip = null;

    /**
     * @var string
     */
    private $country = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->addressLine2;
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
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }


}


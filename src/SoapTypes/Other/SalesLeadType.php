<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SalesLeadType
{

    /**
     * @var string
     */
    private $company = null;

    /**
     * @var string
     */
    private $industry = null;

    /**
     * @var string
     */
    private $launchTimeframe = null;

    /**
     * @var string
     */
    private $device = null;

    /**
     * @var int
     */
    private $numberOfDevices = null;

    /**
     * @var string
     */
    private $referralCode = null;

    /**
     * @var string
     */
    private $deviceDetails = null;

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @return string
     */
    public function getLaunchTimeframe()
    {
        return $this->launchTimeframe;
    }

    /**
     * @return string
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @return int
     */
    public function getNumberOfDevices()
    {
        return $this->numberOfDevices;
    }

    /**
     * @return string
     */
    public function getReferralCode()
    {
        return $this->referralCode;
    }

    /**
     * @return string
     */
    public function getDeviceDetails()
    {
        return $this->deviceDetails;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class Location
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var int
     */
    private $msisdn = null;

    /**
     * @var float
     */
    private $longitude = null;

    /**
     * @var float
     */
    private $latitude = null;

    /**
     * @var string
     */
    private $address = null;

    /**
     * @var string
     */
    private $time = null;

    /**
     * @var int
     */
    private $accuracy = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return int
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @return int
     */
    public function getAccuracy()
    {
        return $this->accuracy;
    }


}


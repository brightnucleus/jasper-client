<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class EditTerminalLocationTrackingRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var activityCode
     */
    private $activityCode = null;

    /**
     * @var anyURI
     */
    private $pushURL = null;

    /**
     * @var \DateTime
     */
    private $startDateTime = null;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return activityCode
     */
    public function getActivityCode()
    {
        return $this->activityCode;
    }

    /**
     * @return anyURI
     */
    public function getPushURL()
    {
        return $this->pushURL;
    }

    /**
     * @return \DateTime
     */
    public function getStartDateTime()
    {
        return $this->startDateTime;
    }


}


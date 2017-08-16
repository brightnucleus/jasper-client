<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetSimLocationResponse extends JasperResponse
{

    /**
     * @var location
     */
    private $location = null;

    /**
     * @var bool
     */
    private $status = null;

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorDetails = null;

    /**
     * @return location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return bool
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ServiceDetailsType
{

    /**
     * @var string
     */
    private $baseOfferId = null;

    /**
     * @var string
     */
    private $primaryMsisdn = null;

    /**
     * @var ServiceType
     */
    private $services = null;

    /**
     * @return string
     */
    public function getBaseOfferId()
    {
        return $this->baseOfferId;
    }

    /**
     * @return string
     */
    public function getPrimaryMsisdn()
    {
        return $this->primaryMsisdn;
    }

    /**
     * @return ServiceType
     */
    public function getServices()
    {
        return $this->services;
    }


}


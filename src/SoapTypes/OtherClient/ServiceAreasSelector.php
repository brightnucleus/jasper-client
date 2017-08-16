<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class ServiceAreasSelector
{

    /**
     * @var string
     */
    private $zipcode = null;

    /**
     * @var string
     */
    private $marketCode = null;

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @return string
     */
    public function getMarketCode()
    {
        return $this->marketCode;
    }


}


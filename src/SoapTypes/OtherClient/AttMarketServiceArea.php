<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class AttMarketServiceArea
{

    /**
     * @var string
     */
    private $billingMarket = null;

    /**
     * @var string
     */
    private $billingSubMarket = null;

    /**
     * @var string
     */
    private $serviceArea = null;

    /**
     * @var string
     */
    private $conversionId = null;

    /**
     * @return string
     */
    public function getBillingMarket()
    {
        return $this->billingMarket;
    }

    /**
     * @return string
     */
    public function getBillingSubMarket()
    {
        return $this->billingSubMarket;
    }

    /**
     * @return string
     */
    public function getServiceArea()
    {
        return $this->serviceArea;
    }

    /**
     * @return string
     */
    public function getConversionId()
    {
        return $this->conversionId;
    }


}


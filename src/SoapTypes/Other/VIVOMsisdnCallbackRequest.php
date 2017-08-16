<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class VIVOMsisdnCallbackRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $requestId = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $subscriptionId = null;

    /**
     * @var string
     */
    private $responseCode = null;

    /**
     * @var string
     */
    private $responseCodeDescription = null;

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

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
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscriptionId;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @return string
     */
    public function getResponseCodeDescription()
    {
        return $this->responseCodeDescription;
    }


}


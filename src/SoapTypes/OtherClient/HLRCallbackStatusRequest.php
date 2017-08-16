<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class HLRCallbackStatusRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $channelTransactionId = null;

    /**
     * @var string
     */
    private $functionId = null;

    /**
     * @var string
     */
    private $requestorChannelId = null;

    /**
     * @var string
     */
    private $requesortUserId = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorMessage = null;

    /**
     * @return string
     */
    public function getChannelTransactionId()
    {
        return $this->channelTransactionId;
    }

    /**
     * @return string
     */
    public function getFunctionId()
    {
        return $this->functionId;
    }

    /**
     * @return string
     */
    public function getRequestorChannelId()
    {
        return $this->requestorChannelId;
    }

    /**
     * @return string
     */
    public function getRequesortUserId()
    {
        return $this->requesortUserId;
    }

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
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
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }


}


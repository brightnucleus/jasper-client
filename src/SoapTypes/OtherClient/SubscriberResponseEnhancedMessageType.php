<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SubscriberResponseEnhancedMessageType
{

    /**
     * @var EnhancedErrorCategoryType
     */
    private $errorCategory = null;

    /**
     * @var string
     */
    private $errorCode = null;

    /**
     * @var string
     */
    private $errorName = null;

    /**
     * @var string
     */
    private $errorDetails = null;

    /**
     * @return EnhancedErrorCategoryType
     */
    public function getErrorCategory()
    {
        return $this->errorCategory;
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
    public function getErrorName()
    {
        return $this->errorName;
    }

    /**
     * @return string
     */
    public function getErrorDetails()
    {
        return $this->errorDetails;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RequestType
{

    /**
     * @var string
     */
    private $messageId = null;

    /**
     * @var string
     */
    private $version = null;

    /**
     * @var string
     */
    private $licenseKey = null;

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getLicenseKey()
    {
        return $this->licenseKey;
    }


}


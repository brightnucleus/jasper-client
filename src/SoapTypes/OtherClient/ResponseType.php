<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class ResponseType
{

    /**
     * @var string
     */
    private $correlationId = null;

    /**
     * @var string
     */
    private $version = null;

    /**
     * @var string
     */
    private $build = null;

    /**
     * @var \DateTime
     */
    private $timestamp = null;

    /**
     * @return string
     */
    public function getCorrelationId()
    {
        return $this->correlationId;
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
    public function getBuild()
    {
        return $this->build;
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RogersSIMActivationFileResponseType
{

    /**
     * @var string
     */
    private $fileName = null;

    /**
     * @var string
     */
    private $statusCode = null;

    /**
     * @var string
     */
    private $errorDescription = null;

    /**
     * @var \DateTime
     */
    private $eventTimeStamp = null;

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * @return \DateTime
     */
    public function getEventTimeStamp()
    {
        return $this->eventTimeStamp;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class ResponseMessageType
{

    /**
     * @var string
     */
    private $type = null;

    /**
     * @var string
     */
    private $subject = null;

    /**
     * @var string
     */
    private $payload = null;

    /**
     * @var string
     */
    private $description = null;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


}


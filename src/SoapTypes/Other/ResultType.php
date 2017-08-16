<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ResultType
{

    /**
     * @var string
     */
    private $MajorStatusCode = null;

    /**
     * @var string
     */
    private $MinorStatusCode = null;

    /**
     * @var string
     */
    private $StatusCode = null;

    /**
     * @var string
     */
    private $StatusMessage = null;

    /**
     * @return string
     */
    public function getMajorStatusCode()
    {
        return $this->MajorStatusCode;
    }

    /**
     * @return string
     */
    public function getMinorStatusCode()
    {
        return $this->MinorStatusCode;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class PortOutMsisdnResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var string
     */
    private $description = null;

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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


}


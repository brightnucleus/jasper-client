<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class UpdateMsisdnResponse extends JasperResponse
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


}


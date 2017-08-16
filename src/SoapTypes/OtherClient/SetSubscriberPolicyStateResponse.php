<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SetSubscriberPolicyStateResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $status = null;

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
    public function getStatus()
    {
        return $this->status;
    }


}


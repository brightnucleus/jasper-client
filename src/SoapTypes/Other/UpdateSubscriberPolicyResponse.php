<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class UpdateSubscriberPolicyResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $iccid = null;

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
    public function getIccid()
    {
        return $this->iccid;
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
    public function getStatus()
    {
        return $this->status;
    }


}


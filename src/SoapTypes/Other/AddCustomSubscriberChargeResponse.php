<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class AddCustomSubscriberChargeResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $chargetype = null;

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
    public function getChargetype()
    {
        return $this->chargetype;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}


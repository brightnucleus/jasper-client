<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UpdateMsisdnRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $msisdn = null;

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
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ChangeImeiRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $imei = null;

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
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
    }


}


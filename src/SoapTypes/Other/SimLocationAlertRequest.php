<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SimLocationAlertRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var alertType
     */
    private $alertType = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return alertType
     */
    public function getAlertType()
    {
        return $this->alertType;
    }


}


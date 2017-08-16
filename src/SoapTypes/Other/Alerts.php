<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class Alerts
{

    /**
     * @var AlertDetailType
     */
    private $alert = null;

    /**
     * @return AlertDetailType
     */
    public function getAlert()
    {
        return $this->alert;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

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


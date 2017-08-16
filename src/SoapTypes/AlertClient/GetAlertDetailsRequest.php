<?php

namespace BrightNucleus\JasperClient\SoapTypes\AlertClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAlertDetailsRequest extends JasperRequest
{

    /**
     * @var alertIds
     */
    private $alertIds = null;

    /**
     * @return alertIds
     */
    public function getAlertIds()
    {
        return $this->alertIds;
    }


}


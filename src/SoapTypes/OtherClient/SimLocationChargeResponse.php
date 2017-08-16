<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SimLocationChargeResponse extends JasperResponse
{

    /**
     * @var SimLocationChargeResponseType
     */
    private $simLocationChargeResponseDetails = null;

    /**
     * @return SimLocationChargeResponseType
     */
    public function getSimLocationChargeResponseDetails()
    {
        return $this->simLocationChargeResponseDetails;
    }


}


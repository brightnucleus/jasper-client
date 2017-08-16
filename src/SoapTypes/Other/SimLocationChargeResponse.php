<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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


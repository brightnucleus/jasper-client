<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class MBBVehicleRegistrationResponse extends JasperResponse
{

    /**
     * @var OperationalResultType
     */
    private $OperationResult = null;

    /**
     * @return OperationalResultType
     */
    public function getOperationResult()
    {
        return $this->OperationResult;
    }


}


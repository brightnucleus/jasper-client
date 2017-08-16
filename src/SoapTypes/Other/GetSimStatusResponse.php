<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetSimStatusResponse extends JasperResponse
{

    /**
     * @var SimStatus
     */
    private $Get_SIM_StatusResult = null;

    /**
     * @return SimStatus
     */
    public function getGet_SIM_StatusResult()
    {
        return $this->Get_SIM_StatusResult;
    }


}


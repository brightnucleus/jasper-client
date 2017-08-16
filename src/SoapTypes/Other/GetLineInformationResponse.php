<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetLineInformationResponse extends JasperResponse
{

    /**
     * @var LineResultType
     */
    private $IMSI_RES = null;

    /**
     * @return LineResultType
     */
    public function getIMSI_RES()
    {
        return $this->IMSI_RES;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetExtendedTerminalDetailsResponse extends JasperResponse
{

    /**
     * @var extendedTerminalDetails
     */
    private $extendedTerminalDetails = null;

    /**
     * @return extendedTerminalDetails
     */
    public function getExtendedTerminalDetails()
    {
        return $this->extendedTerminalDetails;
    }


}


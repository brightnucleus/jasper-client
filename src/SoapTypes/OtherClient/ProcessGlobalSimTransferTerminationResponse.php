<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class ProcessGlobalSimTransferTerminationResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $status = null;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}

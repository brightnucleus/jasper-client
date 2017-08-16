<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class SimRmaExchangeResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $rmaId = null;

    /**
     * @return string
     */
    public function getRmaId()
    {
        return $this->rmaId;
    }


}


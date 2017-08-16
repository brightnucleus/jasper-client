<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class InterSPResetSrcSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $previousSourceSimState = null;

    /**
     * @var string
     */
    private $sourceSimState = null;

    /**
     * @return string
     */
    public function getPreviousSourceSimState()
    {
        return $this->previousSourceSimState;
    }

    /**
     * @return string
     */
    public function getSourceSimState()
    {
        return $this->sourceSimState;
    }


}


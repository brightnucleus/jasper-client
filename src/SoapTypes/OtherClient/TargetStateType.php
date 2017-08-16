<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class TargetStateType
{

    /**
     * @var SimStateType
     */
    private $simState = null;

    /**
     * @return SimStateType
     */
    public function getSimState()
    {
        return $this->simState;
    }


}


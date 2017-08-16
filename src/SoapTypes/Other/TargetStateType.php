<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

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


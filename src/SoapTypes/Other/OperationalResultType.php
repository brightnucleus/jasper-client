<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class OperationalResultType
{

    /**
     * @var ResultType
     */
    private $Result = null;

    /**
     * @return ResultType
     */
    public function getResult()
    {
        return $this->Result;
    }


}


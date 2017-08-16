<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

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


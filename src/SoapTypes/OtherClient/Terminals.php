<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class Terminals
{

    /**
     * @var ImsiToIccidType
     */
    private $terminal = null;

    /**
     * @return ImsiToIccidType
     */
    public function getTerminal()
    {
        return $this->terminal;
    }


}


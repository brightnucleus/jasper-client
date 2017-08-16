<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;
use BrightNucleus\JasperClient\SoapTypes\Other\Terminals;

class GetTerminalDetailsResponse extends JasperResponse
{

    /**
     * @var Terminals
     */
    private $terminals = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return Terminals
     */
    public function getTerminals()
    {
        return $this->terminals;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalsByImsiResponse extends JasperResponse
{

    /**
     * @var terminals
     */
    private $terminals = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return terminals
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


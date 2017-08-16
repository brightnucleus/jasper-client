<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalsBySecureSimIdResponse extends JasperResponse
{

    /**
     * @var iccids
     */
    private $iccids = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return iccids
     */
    public function getIccids()
    {
        return $this->iccids;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


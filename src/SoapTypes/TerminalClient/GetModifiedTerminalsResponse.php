<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;
use BrightNucleus\JasperClient\SoapTypes\Other\Iccids;

class GetModifiedTerminalsResponse extends JasperResponse
{

    /**
     * @var Iccids
     */
    private $iccids = null;

    /**
     * @var int
     */
    private $totalPages = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return Iccids
     */
    public function getIccids()
    {
        return $this->iccids;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


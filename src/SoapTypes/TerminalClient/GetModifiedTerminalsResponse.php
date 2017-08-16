<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetModifiedTerminalsResponse extends JasperResponse
{

    /**
     * @var iccids
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
     * @return iccids
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


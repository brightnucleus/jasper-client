<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetTerminalAuditTrailResponse extends JasperResponse
{

    /**
     * @var terminalAuditTrails
     */
    private $terminalAuditTrails = null;

    /**
     * @var int
     */
    private $totalPages = null;

    /**
     * @return terminalAuditTrails
     */
    public function getTerminalAuditTrails()
    {
        return $this->terminalAuditTrails;
    }

    /**
     * @return int
     */
    public function getTotalPages()
    {
        return $this->totalPages;
    }


}


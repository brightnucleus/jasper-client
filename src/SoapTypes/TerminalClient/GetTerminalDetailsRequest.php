<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;
use BrightNucleus\JasperClient\SoapTypes\Other\Iccids;

class GetTerminalDetailsRequest extends JasperRequest
{

    /**
     * @var Iccids
     */
    private $iccids = null;

    /**
     * Instantiate a GetTerminalDetailsRequest object.
     *
     * @since 0.1.1
     *
     * @param $iccids
     */
    public function __construct($iccids)
    {
        $this->iccids = $iccids;
    }

    /**
     * @return Iccids
     */
    public function getIccids()
    {
        return $this->iccids;
    }


}


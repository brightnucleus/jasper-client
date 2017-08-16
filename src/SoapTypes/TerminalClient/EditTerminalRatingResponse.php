<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class EditTerminalRatingResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


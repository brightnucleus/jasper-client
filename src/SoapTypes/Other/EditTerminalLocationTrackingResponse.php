<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class EditTerminalLocationTrackingResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var status
     */
    private $status = null;

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return status
     */
    public function getStatus()
    {
        return $this->status;
    }


}


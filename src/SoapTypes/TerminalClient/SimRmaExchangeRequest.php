<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class SimRmaExchangeRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $exchangeSimIccid = null;

    /**
     * @var string
     */
    private $externalRmaId = null;

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
    public function getExchangeSimIccid()
    {
        return $this->exchangeSimIccid;
    }

    /**
     * @return string
     */
    public function getExternalRmaId()
    {
        return $this->externalRmaId;
    }


}


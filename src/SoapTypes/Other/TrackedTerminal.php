<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class TrackedTerminal
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


}


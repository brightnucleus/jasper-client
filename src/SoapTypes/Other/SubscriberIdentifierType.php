<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SubscriberIdentifierType
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }


}


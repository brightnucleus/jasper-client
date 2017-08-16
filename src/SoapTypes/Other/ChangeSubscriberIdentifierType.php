<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ChangeSubscriberIdentifierType
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
     * @var string
     */
    private $iccid = null;

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

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }


}


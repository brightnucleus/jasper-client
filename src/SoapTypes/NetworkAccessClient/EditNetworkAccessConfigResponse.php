<?php

namespace BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class EditNetworkAccessConfigResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $effectiveDate = null;

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
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\NetworkAccessClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class EditNetworkAccessConfigRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var int
     */
    private $nacId = null;

    /**
     * @var \DateTime
     */
    private $effectiveDate = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return int
     */
    public function getNacId()
    {
        return $this->nacId;
    }

    /**
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->effectiveDate;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class DeactivateSimRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $strSIM = null;

    /**
     * @var string
     */
    private $strCustPrefix = null;

    /**
     * @var string
     */
    private $strDeactivationDate = null;

    /**
     * @return string
     */
    public function getStrSIM()
    {
        return $this->strSIM;
    }

    /**
     * @return string
     */
    public function getStrCustPrefix()
    {
        return $this->strCustPrefix;
    }

    /**
     * @return string
     */
    public function getStrDeactivationDate()
    {
        return $this->strDeactivationDate;
    }


}


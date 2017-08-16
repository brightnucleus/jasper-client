<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetSimStatusRequest extends JasperRequest
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


}


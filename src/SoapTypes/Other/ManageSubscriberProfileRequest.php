<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ManageSubscriberProfileRequest extends JasperRequest
{

    /**
     * @var iccids
     */
    private $iccids = null;

    /**
     * @var directives
     */
    private $directives = null;

    /**
     * @return iccids
     */
    public function getIccids()
    {
        return $this->iccids;
    }

    /**
     * @return directives
     */
    public function getDirectives()
    {
        return $this->directives;
    }


}


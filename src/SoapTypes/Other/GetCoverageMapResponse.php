<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetCoverageMapResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $mapUrl = null;

    /**
     * @var string
     */
    private $matchType = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getMapUrl()
    {
        return $this->mapUrl;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetCoverageResponse extends JasperResponse
{

    /**
     * @var bool
     */
    private $live = null;

    /**
     * @var bool
     */
    private $comingSoon = null;

    /**
     * @var string
     */
    private $matchType = null;

    /**
     * @var bool
     */
    private $retiring = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return bool
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * @return bool
     */
    public function getComingSoon()
    {
        return $this->comingSoon;
    }

    /**
     * @return string
     */
    public function getMatchType()
    {
        return $this->matchType;
    }

    /**
     * @return bool
     */
    public function getRetiring()
    {
        return $this->retiring;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


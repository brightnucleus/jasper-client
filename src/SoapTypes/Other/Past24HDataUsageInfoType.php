<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class Past24HDataUsageInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $dataUsage = null;

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
     * @return string
     */
    public function getDataUsage()
    {
        return $this->dataUsage;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}


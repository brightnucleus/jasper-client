<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class Past24HCsdUsageInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $dailyCsdMoUsage = null;

    /**
     * @var string
     */
    private $dailyCsdMtUsage = null;

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
    public function getDailyCsdMoUsage()
    {
        return $this->dailyCsdMoUsage;
    }

    /**
     * @return string
     */
    public function getDailyCsdMtUsage()
    {
        return $this->dailyCsdMtUsage;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

